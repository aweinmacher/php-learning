<?php

require 'vendor/autoload.php'; // composer
require 'core/bootstrap.php';  // config and database

Router::load('routes.php')
        ->direct(Request::uri(), Request::method());