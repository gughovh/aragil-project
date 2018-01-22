<?php
/**
 * Created by IntelliJ IDEA.
 * User: gurgen
 * Date: 2018-01-22
 * Time: 2:16 PM
 */
return [
    'driver' => ini('queue.driver', 'redis'),
    'timeout' => ini('queue.timeout', 600),
    'sleep' => ini('queue.sleep', 0),
    'retries' => ini('queue.retries', 5),
];