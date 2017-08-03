<?php defined('BASEPATH') OR exit('No direct script access allowed');

$hook = [];

/**
 * Some event to dispatch after something happens on your business, e.g: after an user update
 */
$hook['UserWasUpdated'][] = [
    'class' => 'UserRedisCache',
    'function' => 'invalidate',
    'filename' => 'UserRedisCache.php',
    'filepath' => 'hooks/user/cache',
    //'params' => [],
];