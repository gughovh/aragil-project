<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11.12.2017
 * Time: 12:03
 */
use Aragil\Router\Route;

Route::prefix('example-prefix', function () {
    Route::console('command:{argument}', function () {
        var_dump(
            $this->arguments('argument'),
            $this->options()
        );
    });
});