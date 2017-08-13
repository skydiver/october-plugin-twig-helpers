<?php

    namespace Martin\Helpers\Classes;

    class Gravatar {

        public static function filterGravatar($text) {
            return 'https://gravatar.com/avatar/' . md5($text);
        }

    }

?>