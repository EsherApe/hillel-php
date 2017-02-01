<?php

require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Route.php';

foreach (glob('application/helpers/*.php') as $file) {
    require_once $file;
}

Route::start(); // запускаем маршрутизатор