<?php

namespace App\Controllers;

function view($viewname)
{
    return require_once(__DIR__."/../Views/".$viewname.".php");
}


class PageController
{
    public static function home()
    {
        return view('home');
    }

    public static function contact()
    {
        return view('contact');
    }

    public static function about()
    {
        return view('about');
    }

    public static function partnership()
    {
        return view('partenaire');
    }

    public static function techno()
    {
        return view('techno');
    }

    public static function tri()
    {
        return view('tri');
    }

    public static function camion()
    {
        return view('camion');
    }

    public static function notFound()
    {
        return view('pageNotFound');
    }

    public static function impact()
    {
        return view('impact');
    }

    public static function environmentImpact()
    {
        return view('impact-enviro');
    }

    public static function socialImpact()
    {
        return view('impact-social');
    }

    public static function economicImpact()
    {
        return view('impact-eco');
    }
}


