<?php

namespace Martin\Helpers;

use Backend;
use Event;
use System\Classes\PluginBase;

class Plugin extends PluginBase {

    public function pluginDetails() {
        return [
            'name'        => 'Twig Helpers',
            'description' => 'Twig Helpers to make life easier',
            'author'      => 'Martin M.',
            'icon'        => 'icon-life-ring',
            'homepage'    => 'https://github.com/skydiver/'
        ];
    }

    public function boot() {
        Event::listen('cms.page.beforeRenderPage', function($controller, $page) {
            $twig = $controller->getTwig();
            $twig->addExtension(new \nochso\HtmlCompressTwig\Extension());
        });
    }
    
    public function registerMarkupTags() {
        return [
            'filters' => [
                'gravatar' => ['Martin\Helpers\Classes\Gravatar', 'filterGravatar'],
                'pr'       => ['Martin\Helpers\Classes\PrintR'  , 'pr'],
                'prd'      => ['Martin\Helpers\Classes\PrintR'  , 'prd'],

            ],
            'functions' => [
                'isActive'        => ['Martin\Helpers\Classes\CSS'   , 'isActive'],
                'isActiveArray'   => ['Martin\Helpers\Classes\CSS'   , 'isActiveArray'],
                'staticGoogleMap' => ['Martin\Helpers\Classes\GoogleMaps', 'staticMap'],
            ]
        ];
    }

}

?>