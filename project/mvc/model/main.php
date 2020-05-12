<?php


class main_model
{
    static function fetch_heder_menu() {
        return query("SELECT * FROM header_menu");
    }
    static function fetch_informations() {
        return first("SELECT * FROM informations");
    }


    static function fetch_categories() {
        $cats = [];
        $categories = query("SELECT * FROM categories where parent_id is null");
        foreach ($categories as $category) {
            $subcategory = self::limited_fetch_subcategories($category['category_id']);
            $subs = [];
            foreach ($subcategory as $item) {
                $item['subs'] = self::limited_fetch_subcategories($item['category_id']);
                array_push($subs, $item);
                $category['subs'] = $subs;
            }
            array_push($cats, $category);
        }
        return $cats;
    }
    static function fetch_subcategories($parent_id) {
        return query("SELECT * FROM categories where parent_id =:parent_id", ['parent_id' => $parent_id]);
    }
  static function limited_fetch_subcategories($parent_id) {
        return query("SELECT * FROM categories where parent_id =:parent_id limit 4 ", ['parent_id' => $parent_id]);
    }

    static function fetch_slider_big() {
        return query("SELECT * FROM slides where type =1");
    }
    static function fetch_slider_small() {
        return query("SELECT * FROM slides where type =2");
    }
    static function fetch_slider_small_top() {
        return query("SELECT * FROM slides where type =3");
    }
    static function fetch_slider_small_bottom() {
        return query("SELECT * FROM slides where type =4");
    }
}