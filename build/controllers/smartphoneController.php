<?php
class smartphoneController extends controller {

    public function index() {
      include_once("./models/DBprodutos.php");

      $array = array(
        'produto' => $dados
      );

     	$this->loadTemplate("smartphone", $array);
    }

}
