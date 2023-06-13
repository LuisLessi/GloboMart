<?php

class Rotas {

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHOME(){
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function get_SiteTEMA(){
        return self::get_SiteHOME() . '/' .self::$pasta_view;
    }

    static function pag_Carrinho(){
        return self::get_SiteHOME() . '/carrinho';
    }

    static function pag_Contato(){
        return self::get_SiteHOME() . '/contato';
    }

    static function pag_MinhaConta(){
        return self::get_SiteHOME() . '/minhaconta';
    }

    static function get_pagina() {
        if (isset($_GET['pag'])) {

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);
            self::$pag = array_values(array_filter(self::$pag));
            var_dump(self::$pag);

            $pagina = 'controller/' . self::$pag[0] . '.php';
            //$pagina = 'controller/' . $_GET['pag'] . '.php';
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        }
    }

    static function parse_url() {
        if (isset($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
            $url = trim($url, '/');
            $url = explode('/', $url);
            $url = array_filter($url);
            $url = array_values($url);
            
            if (!empty($url)) {
                $_GET['pag'] = implode('/', $url);
            }
        }
    }
}
