<?php 

namespace src\model;
use libs\system\Model;

class ProprietaireDb extends Model{

    public function add($proprietaire){

        $this->entityManager->persist($proprietaire);

        $this->entityManager->flush();

        if($this->entityManager->flush()){
            // echo "We saved the house owner";
            // return true;
            echo "We didn't save the house owner";
            return false;
        }else{
            // echo "We didn't save the house owner";
            // return false;
            echo "We saved the house owner";
            return true;
        }
    }

    public function findAll(){

    }

    public function deleteRecord($id){

    }

    public function editRecord($id){

    }

    public function editRecordBis(){
        
    }
}

?>