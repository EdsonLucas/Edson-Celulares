<?php
class homeController extends controller {

    public function index() {
    	$array = array();

     	$this->loadTemplate("home", $array);
    }

}
