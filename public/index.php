<?php

require '../vendor/autoload.php';

// Have a config?
$config = [

  // Can be applied at URL /example/user
//  'locales' => [
//    'es-ES'
//  ],

  'plugins' => [

    // These modules are within Deft
    'example',
    'debug',

    // This module is within this project ~/plugin/test.php
    'test',
  ],

  // Local plugins
  'path.plugins' => '../plugin',

  // Local public assets
  'path.public.asset' => '../public/asset',

  // Provide debug stack, produced by 'debug' plugin
  'debug' => 3,

  // Storage path for logs, debug JSON stacks, etc
  'path.storage' => sys_get_temp_dir()
];

// Attempt to include a Deft configuration parameters
$path = '../config/deft.php';
if (file_exists($path))
	$config = array_merge($config, require '../config/deft.php');

// Init Deft
Deft::init($config);

// Echo response
echo Deft::response();

/**
 * Deft, a micro framework for PHP.
 *
 * @author Alexander Gailey-White <alex@gailey-white.com>
 *
 * This file is part of Deft.
 *
 * Deft is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Deft is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Deft.  If not, see <http://www.gnu.org/licenses/>.
 */