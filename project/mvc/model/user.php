<?php

class user_model {

    static function fetch_users() {
        return query("select * from users", []);

    }

    static function fetch_users_by_mobile($mobile) {
        $user = first("SELECT * FROM users WHERE mobile=:mobile", [
            'mobile' => $mobile
        ]);

        return $user;
    }

    static function insert_users($role_id, $username, $first_name, $last_name, $user_email, $address_id, $register_date, $last_update, $mobile, $password, $gender) {
        $user_id = insert("INSERT INTO users 
(user_id, role_id, username, first_name, last_name, user_email, address_id, register_date, last_update, mobile, password, gender) 
VALUES 
(NULL, :role_id, :username, :first_name, :last_name, :user_email, :address_id, :register_date, :last_update, :mobile, :password, :gender)", [
            'role_id' => $role_id,
            'username' => $username,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'user_email' => $user_email,
            'address_id' => $address_id,
            'register_date' => $register_date,
            'last_update' => $last_update,
            'mobile' => $mobile,
            'password' => $password,
            'gender' => $gender
        ]);

        return $user_id;
    }
}