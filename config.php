<?php
require_once '.env.php';

$config = [
    'host' => $env['host'],
    'name' => $env["name"],
    'password' => $env["password"],
    'dbname' => $env["dbname"],
    'port' => $env["port"]
];

// $config = [
//     'host' => "remotemysql.com",
//     'name' => "lbwYH9VpoY",
//     'password' => "7rS60Kddwz",
//     'dbname' => "lbwYH9VpoY",
//     'port' => 3306
// ];




// https://stackoverflow.com/questions/48765859/github-this-branch-is-n-commits-behind/51950539