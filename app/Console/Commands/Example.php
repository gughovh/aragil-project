<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11.12.2017
 * Time: 13:12
 */

namespace App\Console\Commands;


use Aragil\Console\BaseCommand;

class Example extends BaseCommand
{
    protected $description = 'The example command';

    public function handle()
    {
        var_dump(
            $this->arguments(),
            $this->options()
        );
    }
}