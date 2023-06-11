<?php

require './lib/autoload.php';
$smarty = new template();

Rotas::parse_url();
Rotas::get_pagina();

//valores para o template
$smarty->assign('NOME', 'Luis Lessi');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

echo Rotas::pag_Carrinho();

$smarty->display('index.tpl');