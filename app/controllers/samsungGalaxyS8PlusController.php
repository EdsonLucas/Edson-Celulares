<?php
class samsungGalaxyS8PlusController extends controller {

    public function index() {

      $db = new DBprodutos();

      $array = array(
        'p' => $db->getInfo()
      );

     	$this->loadTemplate("smartphones/samsung-galaxy-s8-plus", $array);
    }

}
