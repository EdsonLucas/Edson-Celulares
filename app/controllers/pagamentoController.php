<?php
class pagamentoController extends controller {

    public function index() {
    	$array = array();

     	$this->loadTemplate("pagamento", $array);
    }

}
