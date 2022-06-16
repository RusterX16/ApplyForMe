<?php

class Utils {

    public static function readFileContent($filename) {
        $file = fopen($filename, "rb");

        if(!$file) {
            exit("Error while opening the file");
        }
        $content = fread($file, filesize($filename));
        fclose($file);
        return explode(".", $content);
    }

    public static function getMonthByNumber($month): string {
        return match($month) {
            "01" => "Janvier",
            "02" => "Février",
            "03" => "Mars",
            "04" => "Avril",
            "05" => "Mai",
            "06" => "Juin",
            "07" => "Juillet",
            "08" => "Août",
            "09" => "Septembre",
            "10" => "Octobre",
            "11" => "Novembre",
            "12" => "Décembre",
        };
    }
}