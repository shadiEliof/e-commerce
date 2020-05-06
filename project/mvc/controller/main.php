<?php
/**
 * Created by PhpStorm.
 * User: bitnetsoft
 * Date: 4/18/2020
 * Time: 5:21 PM
 */

class main_controller {

    public function header_menu() {
        $menu = main_model::fetch_heder_menu();
        return $menu;
    }

    public function main() {
        $slider = main_model::fetch_slider();
        $data=[
            "prefix"=>"",
            "slider"=>$slider
        ];
        View::render("main.php", $data);

    }
}