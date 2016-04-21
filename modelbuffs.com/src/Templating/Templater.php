<?php

namespace MB\Templating;


class Templater
{
    public static function getTwig()
    {
        $filter_displayHtml = new \Twig_SimpleFilter('displayHtml', function ($string) {
            echo html_entity_decode($string, ENT_QUOTES, 'UTF-8');
        });

        $loader = new \Twig_Loader_Filesystem('views/');
        $twig = new \Twig_Environment($loader);
        $twig->addFilter($filter_displayHtml);
        $twig->addExtension(new CartExtension());

        return $twig;
    }
}