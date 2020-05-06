<?php

class user_controller {
    function users() {
        $users = user_model::fetch_users();
        $data = [
            "title" => "صفحه مدیریت کاربران",
            "users" => $users
        ];
        View::render("user/user.php", $data);

    }


    function show_login_form() {
        $data = [
            "prefix" => "-mini",
            "message"=>"لطفا شماره موبایل و  رمزعبور خود را وارد کنید"
        ];
        View::render("user/login-page.php", $data);
    }


    function show_register_form() {
        $data = [
            "prefix" => "-mini",
            "message"=>"اگر قبلا ثبت ‌نام کرده‌اید، نیاز به ثبت ‌نام مجدد ندارید",
        ];
        View::render("user/register-page.php", $data);
    }

    function login_submit() {

        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $user = user_model::fetch_users_by_mobile($mobile);
        // dump($user);
        if ($user != null) {
            $user_password = $user['password'];
            if ($password == $user_password) {
                $data = [
                    "prefix" => "-mini",
                    "message"=>""
                ];
                $_SESSION['user_id']=$user['user_id'];
                $_SESSION['role_id']=$user['role_id'];
                $_SESSION['first_name']=$user['first_name'];
                $_SESSION['last_name']=$user['last_name'];
                $_SESSION['mobile']=$user['mobile'];
                $_SESSION['is_login']=true;
                redirect("/main/main");
            } else {
                $data = [
                    "prefix" => "-mini",
                    "message"=>"رمز عبور شما اشتباه است.",

                ];
                View::render("user/login-page.php",$data);
            }
        } else {
            $data = [
                "prefix" => "-mini",
                "message"=>"شماره موبایلی با این مشخصات وجود ندارد",

            ];
            View::render("user/login-page.php",$data);
        }


    }

    function check_existing_mobile($mobile) {
        $user = user_model::fetch_users_by_mobile($mobile);
        if ($user != null) {
            echo json_encode(["result" => "user-exist"]);
        } else {
            echo json_encode(["result" => "user-not-exist"]);
        }

    }

    function register_submit() {

        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $user = user_model::fetch_users_by_mobile($mobile);
        $user_mobile = $user['mobile'];
        if ($user_mobile != $mobile) {
            $user_id = user_model::insert_users("1", "", "", "", "", "", "", "", $mobile, $password, "");
            $data=[
                "prefix" => "-mini",
                "message"=>"ثبت نام شما با موفقیت انجام شد",
                "url"=>"/user/show_login_form",
                "btn_title"=>"ورود"
                ];
            View::render("user/register-success.php",$data);
        } else {
            $data = [
                "prefix" => "-mini",
                "message"=>"شما قبلا ثبت نام نموده ایید",

            ];
            View::render("user/register-page.php", $data);
        }

    }
    function logout(){
        session_destroy();
        redirect("/main/main");
    }
    function show_profile() {

     $user=user_model::fetch_users_by_mobile($_SESSION['mobile']);
        $data = [
            "prefix" => "-mini",
            "user"=>$user
        ];
        View::render("user/profile.php", $data);
    }

}
