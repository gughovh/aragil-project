<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11.12.2017
 * Time: 13:15
 */

namespace App\Http\Controllers;


use Aragil\Http\Controller;

class ExampleController extends  Controller
{
    public function welcome()
    {
        return 'You have successfully installed the Aragil bird!!!';
    }
}