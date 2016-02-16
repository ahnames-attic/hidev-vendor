<?php

/*
 * AHnames vendor configuration for HiDev
 *
 * @link      https://github.com/ahnames/hidev-config
 * @package   hidev-config
 * @license   No license
 * @copyright Copyright (c) 2015-2016, AHnames (https://ahnames.com/)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@ahnames/hidev/vendor/config.yml',
            ],
            'views' => [
                '@ahnames/hidev/vendor/views',
            ],
        ],
    ],
];
