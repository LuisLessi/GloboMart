<?php

class Rotas {
    static function get_pagina() {
        if (isset($_GET['pag'])) {
            $pagina = 'controller/' . $_GET['pag'] . '.php';
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        }
    }
}
