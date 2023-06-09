<?php

require './lib/autoload.php';
$smarty = new template();

Rotas::get_pagina();

//valores para o template
$smarty->assign('NOME', 'Luis Lessi');

$smarty->display('index.tpl');