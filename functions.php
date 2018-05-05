<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function checkAccess($age) {
    if ($age >= 21) {
        return true;
    } else {
        return false;
    }
}