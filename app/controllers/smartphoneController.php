<?php
class smartphoneController extends controller {

    public function index() {
<<<<<<< HEAD
      include_once("./models/DBprodutos.php");

      $array = array(
        'produto' => $dados
      );
=======
      $array = array();
>>>>>>> b3c5f214643d0192e17013200273ea09a7c04cb8

     	$this->loadTemplate("smartphone", $array);
    }

}
