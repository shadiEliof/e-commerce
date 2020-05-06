<?php


class main_model
{
    static function fetch_heder_menu() {
        return query("SELECT * FROM header_menu");
    }
    static function fetch_informations() {
        return first("SELECT * FROM informations");
    }

    static function fetch_slider() {
        return query("SELECT * FROM slides");
    }

}