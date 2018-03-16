<?php
class carrinhoDeComprasController extends controller {

    public function index() {
        include_once("./models/DBprodutos.php");

        $array = array(
          'produto' => $dados
        );

        $this->loadTemplate("carrinho-de-compras", $array);
    }

}
