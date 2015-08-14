<?php

namespace ahnames\hidev\config;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@ahnames/hidev/config/config.yml',
        ],
        'views' => [
            '@ahnames/hidev/config/views',
        ],
    ];
}
