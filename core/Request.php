<?php

namespace core;

use src\Config;

class Request
{

    public static function getUrl()
    {
        $url = filter_input(INPUT_GET, 'request');
        // $url = $_SERVER['REQUEST_URI'];
        error_log("URL solicitada: $url");
        if ($url !== null) {
            $url = str_replace(Config::BASE_DIR, '', $url);
        }
        error_log("URL capturada após o str_replace: $url");
        return $url;
    }

    public static function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
