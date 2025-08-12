<?php


function asset($filepath)
{
    echo "/asset/".$filepath;
}

function addClassIf($currentPath, $class)
{
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

    $rootPath = explode('/', $uri);

    echo $rootPath[1] === $currentPath ? $class : '';
}