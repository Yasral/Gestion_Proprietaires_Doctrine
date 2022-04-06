<?php
namespace libs\system;

// This is the base model

class Model
{
    protected $entityManager;
    public function __construct()
    {
        require_once "bootstrap.php";
        $this->entityManager=$entityManager;
    }
    
}

?>