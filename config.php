<?php
require_once '.env.php';

$config = [
    'host' => $env['host'],
    'name' => $env["name"],
    'password' => $env["password"],
    'dbname' => $env["dbname"],
    'port' => $env["port"]
];


// https://stackoverflow.com/questions/48765859/github-this-branch-is-n-commits-behind/51950539