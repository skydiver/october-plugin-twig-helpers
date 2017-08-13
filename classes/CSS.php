<?php

    namespace Martin\Helpers\Classes;

    class CSS {

        public static function isActive($current, $expected, $class='active') {
            if($current->baseFileName == $expected) {
                return ' class="' . $class . '"';
            }
        }

    }

?>