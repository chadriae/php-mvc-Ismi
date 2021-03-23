<?php
require_once('DotEnv.php');

$config = [
    'DB_CONNECTION' => $_ENV['DB_CONNECTION'],
    'DB_HOST' => $_ENV['DB_HOST'],
    'DB_USERNAME' => $_ENV['DB_USERNAME'],
    'DB_PASSWORD' => $_ENV['DB_PASSWORD'],
    'DB_DATABASE' => $_ENV['DB_DATABASE'],
    'DB_PORT' => $_ENV['DB_PORT']
];




// https://stackoverflow.com/questions/48765859/github-this-branch-is-n-commits-behind/51950539