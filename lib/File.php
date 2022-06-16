<?php

class File {

    public static function buildPath($path_array): string {
        $ROOT_FOLDER = __DIR__ . DIRECTORY_SEPARATOR . "..";
        return $ROOT_FOLDER . "/" . implode("/", $path_array);
    }
}