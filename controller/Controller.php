<?php

class Controller {

    public static function homePage(): void {
        require_once File::buildPath([
            "view",
            "homepage.php"
        ]);
    }

    public static function generate() {
        require_once File::buildPath([
            "view",
            "letter.php"
        ]);
    }
}