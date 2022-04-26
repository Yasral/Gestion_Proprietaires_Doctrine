<?php 

    namespace src\model;
    use libs\system\Model;

    class UserDb extends Model{

        public function registerUser($administrator){

            $this->entityManager->persist($administrator);

            if($this->entityManager->flush()){
                echo "We haven't saved the new user";
                return false;
            }else{

                echo "We saved the new user successfully";
                return true;
            }
        }

        public function login($username, $password){

        }

        public function findUserByEmail($email){

        }
    }

?>