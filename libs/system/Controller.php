<?php
namespace libs\system;
use libs\system\View;

// This is the base controller

class Controller
{
    protected $view;
    public function __construct(){
        $this->view=new View();
    }
}

?>