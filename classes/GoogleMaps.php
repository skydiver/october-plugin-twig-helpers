<?php

namespace Martin\Helpers\Classes;

class GoogleMaps {

    public static function staticMap($options) {
        return 'https://maps.googleapis.com/maps/api/staticmap?' . http_build_query($options);
    }

}

?>