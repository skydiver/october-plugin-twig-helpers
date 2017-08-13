<?php

    namespace Martin\Helpers;

    use Backend;
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

        public function registerMarkupTags() {
            return [
                'filters' => [
                    'gravatar' => ['Martin\Helpers\Classes\Gravatar', 'filterGravatar'],
                    'pr'       => ['Martin\Helpers\Classes\PrintR'  , 'pr'],
                    'prd'      => ['Martin\Helpers\Classes\PrintR'  , 'prd'],
                ],
            ];
        }

    }

?>