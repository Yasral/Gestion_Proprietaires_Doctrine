<?php

use libs\system\Controller;
use src\model\ProprietaireDb;

class ProprietaireController extends Controller{

    private $proprio;

    public function index(){

        return $this->view->load("Proprietaire/index");
    }

    public function add(){

        return $this->view->load("Proprietaire/add", $data);
    }

    public function all(){

        return $this->view->load("Proprietaire/all");
    }

    public function delete($id){

        return $this->view->load("Proprietaire/delete");
    }

    public function edit($id){

        return $this->view->load("Proprietaire/edit");
    }

    public function fullDetails($id){

        return $this->view->load("Proprietaire/fullDetails");
    }
}

?>