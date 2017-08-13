<?php

    namespace Martin\Helpers\Classes;

    class PrintR {

        public static function pr($array) {
            echo self::prx($array);
        }

        public static function prd($array) {
            die(self::prx($array));
        }

        private static function prx($array) {
            return "<pre>" . print_r($array, true) . "</pre>";
        }

    }

?>