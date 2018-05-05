<?php

require 'vendor/autoload.php'; // composer
require 'core/bootstrap.php';  // config and database

use App\Core\Router;
use App\Core\Request;

Router::load('app/routes.php')
        ->direct(Request::uri(), Request::method());