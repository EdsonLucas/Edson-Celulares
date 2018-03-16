<?php
class compraFinalizadaController extends controller {

    public function index() {
    	$array = array();

     	$this->loadTemplate("compra-finalizada", $array);
    }

}
