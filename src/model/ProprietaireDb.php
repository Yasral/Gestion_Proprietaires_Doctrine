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

        $query = $this->entityManager->createQuery("SELECT p FROM Proprietaire p");

        $list = $query->getResult();

        return $list;
    }

    public function deleteRecord($id){

        $findProprio = $this->entityManager->find("Proprietaire", $id);

        $this->entityManager->remove($findProprio);

        if($this->entityManager->flush()){
            echo "We haven't delete the owner";
            return false;
        }else{
            echo "We delete the owner successfully";
            return true;
        }
    }

    public function editRecord($id){

        $findOwner = $this->entityManager->find("Proprietaire", $id);

        return $findOwner;
    }

    public function editRecordBis(){
        
        if($this->entityManager->flush()){
            echo "We haven't updated the owner";
            return false;
        }else{
            echo "We updated the owner successfully";
            return true;
        }
    }
}

?>