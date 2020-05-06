<?php


class SessionHelper {

    public function __construct() {
    }

    public static function checkLogin() {
        $isLogin = false;
        if (isset($_SESSION["user_id"])) {
            $isLogin = true;
        }
        return $isLogin;
    }

    public static function checkAccess() {
        $isLogin = self::checkLogin();
        if (!$isLogin) {
            message("alert", _please_login_first);
            exit;
        }
    }

    public static function setUser($user) {
        $_SESSION["user_id"] = $user['user_id'];
        $_SESSION["user"]["rol_id"] = $user['rol_id'];
        $_SESSION["user"]["username"] = $user['username'];
        $_SESSION["user"]["first_name"] = $user['first_name'];
        $_SESSION["user"]["last_name"] = $user['last_name'];
        $_SESSION["user"]["password"] = $user['password'];





    }

    public static function getUser() {
        $user = array(
            'user_id' => $_SESSION["user_id"],
            'password' => $_SESSION["password"],


        );
        return $user;

    }

    public static function getNameAndFamily() {
        $nameAndFamily = $_SESSION["user"]["firs_name"] . " " . $_SESSION["user"]["last_name"];
        return $nameAndFamily;

    }


}



?>