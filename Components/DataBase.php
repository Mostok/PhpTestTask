<?php
class DataBase
{
    public static $instance;
    public $link;

    public function __construct()
    {
        if (!self::$instance) {
            $this->link = mysqli_connect('localhost', 'root', '', 'test');
            if (!$this->link) {
                die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
            }
            self::$instance = $this;
        }

        return self::$instance;
    }

}
