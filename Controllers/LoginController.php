<?php

include_once ROOT . '/Models/User.php';

class LoginController {

    public function login() {
        unset($_SESSION['logged_user']);
        $contentPage = ROOT . "/Views/login.php";
        require_once ROOT . "/Views/header.php";
        return true;
    }

    public function logout() {
        unset($_SESSION['logged_user']);
        header('Location: /tasks');
    }

    public function authorization() {
        $errors = array();
        $name = $_POST['name'];
        $password = $_POST['password'];

        if(empty($name)) {
            $errors[] = 'Заполните поле ИМЯ ПОЛЬЗОВАТЕЛЯ';
        }

        if(empty($password)) {
            $errors[] = 'Заполните поле ПАРОЛЬ';
        }

        if(empty($errors)) {
            $user = User::checkUser($name, $password);
            if(empty($user)) {
                $errors[] = 'Неверный логин или пароль';
                $contentPage = ROOT . "/Views/login.php";
                require_once ROOT . "/Views/header.php";
                return true;
            } else {
                $_SESSION['logged_user'] = $user;
                header('Location: /admin');
            }
        } else {
            $contentPage = ROOT . "/Views/login.php";
            require_once ROOT . "/Views/header.php";
            return true;
        }
    }
}