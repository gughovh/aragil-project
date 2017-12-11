<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11.12.2017
 * Time: 12:03
 */
use Aragil\Router\Route;

Route::get('', function() {
    return 'You have successfully installed the Aragil bird!!!';
});

Route::prefix('example-prefix', function () {
    Route::get('test/{argument}', function ($argument) {
        return func_get_args();
    });
});