<?php

require './lib/autoload.php';
$smarty = new template();

Rotas::parse_url();
Rotas::get_pagina();

//valores para o template
$smarty->assign('NOME', 'Luis Lessi');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());

$dados = new Conexao();
$sql = "SELECT * FROM categorias";
$dados->ExecuteSQL($sql);
echo $dados->TotalDados();

$smarty->display('index.tpl');