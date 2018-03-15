<?php
class carrinhoDeComprasController extends controller {

    public function index() {
        $array = array();

        $this->loadTemplate("carrinho-de-compras", $array);
    }

}
