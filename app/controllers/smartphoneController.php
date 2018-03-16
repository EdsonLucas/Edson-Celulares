<?php
class smartphoneController extends controller {

    public function index() {
      $array = array();

     	$this->loadTemplate("smartphone", $array);
    }

}
