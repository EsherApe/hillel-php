<?php


class Navbar
{
    public static function widget($items)
    {
        $navbar = '<div class="navbar navbar-default"><ul class="nav navbar-nav">';

        foreach ($items as $label=>$url) {
            $navbar .= $_SERVER['REQUEST_URI'] == $url ? '<li class="active">' : '<li>';
            $navbar .= '<a href="'.$url.'">'.$label.'</a></li>';
        }

        return $navbar.'</ul></div>';
    }
}