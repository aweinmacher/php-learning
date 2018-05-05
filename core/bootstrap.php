<?php

App::bind('config', require 'config.php'); // get the file and put into the App "box"...

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database']) // ... and then take it from the box
));

function view($name, $data=[]) {
    extract($data);
    return require "views/{$name}.view.php";
};

function redirect($path) {
    header("Location: /{$path}");
}