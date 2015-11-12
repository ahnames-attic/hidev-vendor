<?php

/*
 * AHnames vendor configuration for HiDev
 *
 * @link      https://github.com/ahnames/hidev-config
 * @package   hidev-config
 * @license   No license
 * @copyright Copyright (c) 2015, AHnames (https://ahnames.com/)
 */

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
