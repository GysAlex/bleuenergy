<?php

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../utils/global.php";

use App\Controllers\PageController;


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];



if($uri === "/" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::home();
}

else if ($uri === "/" && $_SERVER["REQUEST_METHOD"] == "POST")
{
    PageController::sendContactMail();
}

else if($uri === "/contact-mail" && $_SERVER["REQUEST_METHOD"] == "POST")
{
    PageController::contactSend();
}

else if($uri === "/partenaire" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::partnership();
}
else if($uri === "/about" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::about();
}

else if($uri === "/project" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::project();
}




else if($uri === "/technologie" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::techno();
}

else if($uri === "/technologie/tri" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::tri();
}
else if($uri === "/technologie/camion" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::camion();
}

else if($uri === "/impact" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::impact();
}
else if($uri === "/impact/environnement" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::environmentImpact();
}
else if($uri === "/impact/social" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::socialImpact();
}
else if($uri === "/impact/economique" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::economicImpact();
}

else if($uri === "/contact" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::contact();
}

else if($uri === "/technologie/usine" && $_SERVER["REQUEST_METHOD"] == "GET")
{
    PageController::usine();
}


else 
{
    PageController::notFound();
}