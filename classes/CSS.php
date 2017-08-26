<?php

namespace Martin\Helpers\Classes;

class CSS {

    /**
     * Check for current page and return CSS active class
     *
     * @param object $current  Current page object
     * @param string $expected Expected string (support wildcards)
     * @param bool   $attrib   Return class attribute
     * @param string $class    CSS class to apply
     *
     * @return string active class (and attribute)
     */
    public static function isActive($current, $expected, $attrib=true, $class='active') {
        if (str_is($expected, $current->baseFileName)) {
            return ($attrib) ? self::_addClassAttrib($class) : $class;
        }
    }

    /**
     * Check for current page and return CSS active class
     * from an array of expected strings
     *
     * @param object $current       Current page object
     * @param array  $expectedArray Array of expected strings (support wildcards)
     * @param bool   $attrib        Return class attribute
     * @param string $class         CSS class to apply
     *
     * @return string active class (and attribute)
     */
    public static function isActiveArray($current, $expectedArray, $attrib=true, $class='active') {
        $arr = explode('|', $expectedArray);
        foreach ($arr as $expected) {
            $is = self::isActive($current, $expected, $attrib, $class);
            if ($is) {
                return $is;
            }
        }
    }

    /**
     * Return class attribute with supplied class
     *
     * @param string $class CSS class(es)
     *
     * @return string CSS class(es) with HTML attribute
     */
    private static function _addClassAttrib($class) {
        return ' class="' . $class . '"';
    }

}

?>