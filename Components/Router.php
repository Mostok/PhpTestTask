<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routersPath = ROOT . '/Config/routes.php';
        $this->routes = include $routersPath;
    }

    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получение адреса
        $uri = $this->getUri();

        // Нахождение контроллера и метода для данного адреса
        foreach ($this->routes as $route => $path) {
            if (preg_match("#$route#", $uri)) {
                if($_SERVER['QUERY_STRING']){
                    list($uri, $query) = explode('?', $uri);
                }

                $iternalRoute = preg_replace("#$route#", $path, $uri);


                $segment = explode('@', $iternalRoute);
                $controllerName = array_shift($segment);
                $methodName = array_shift($segment);
                
                $parametrs = $segment;
                // var_dump($iternalRoute);

                // Подключение файла контроллера
                $controllerFile = ROOT . '/Controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                } else {
                    echo "Нет файла контроллера";
                }

                // Создание объекта класса и вызов нужного метода
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $methodName), $parametrs);

                if ($result != null) {
                    break;
                }
            }
        }

    }
}
