<?php
/**
 * Created by IntelliJ IDEA.
 * User: gurgen
 * Date: 2017-12-13
 * Time: 12:15 PM
 */

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap/app.php';

createDirs([
    LOG_DIR,
    APP_STORAGE_DIR,
    MIGRATED_DIR,
    DATABASE_DIR,
    DATABASE_DIR . DS . 'clickhouse',
    DATABASE_DIR . DS . 'clickhouse' . DS . 'migrations',
    DATABASE_DIR . DS . 'mysql',
    DATABASE_DIR . DS . 'mysql' . DS . 'migrations',
]);

function createDirs(array $dirs)
{
    foreach ($dirs as $dir) {
        is_dir($dir) || mkdir($dir);
    }
}