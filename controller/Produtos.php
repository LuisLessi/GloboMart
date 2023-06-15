<h1>Pagina produtos</h1>
<?php

    $produtos = new Produtos();
    $produtos->GetProdutos();

    var_dump($produtos->GetItens());
?>
