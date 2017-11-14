<?php

namespace Martin\Helpers\Classes;

class PrintR {

    public static function pr($array) {
        echo self::_prx($array);
    }

    public static function prd($array) {
        die(self::_prx($array));
    }

    private static function _prx($array) {
        return "<pre>" . print_r($array, true) . "</pre>";
    }

}

?>