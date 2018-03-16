<?php
class pagamentoController extends controller {

    public function index() {
      include_once("./models/DBprodutos.php");

      $array = array(
        'produto' => $dados
      );

     	$this->loadTemplate("pagamento", $array);
    }

}
