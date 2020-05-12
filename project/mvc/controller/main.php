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
        $slider_big = main_model::fetch_slider_big();
        $slider_small = main_model::fetch_slider_small();
        $slider_top = main_model::fetch_slider_small_top();
        $slider_bottom = main_model::fetch_slider_small_bottom();
        $categories= main_model::fetch_categories();
        $data=[
            "prefix"=>"",
            "slider_big"=>$slider_big,
            "slider_small"=>$slider_small,
            "slider_top"=>$slider_top,
            "slider_bottom"=>$slider_bottom,
            "categories"=>$categories
        ];
        View::render("main.php", $data);

    }
    public function categories() {

        echo_result_response(200,"success",$categories);
    }

}