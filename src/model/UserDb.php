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

            $query = $this->entityManager->createQuery("SELECT u FROM User u WHERE u.username = :username");

            $query->setParameter('username', $username);

            $singleUser = $query->getSingleResult();

            $hashedPassword = $singleUser->getPassword();

            if(password_verify($password, $hashedPassword)){
                echo "The login model is a masterPiece";
                echo "<br>";
                return $singleUser;
            }else{
                return false;
            }
        }

        public function findUserByEmail($email){

            $query = $this->entityManager->createQuery("SELECT u FROM User u WHERE u.email_user = :email_user");
    
            $query.setParameter(email_user, $email);
    
            $singleUser = $query.getSingleResult();

            // We have to check later the value returned by an empty array
            
            if($singleUser){
                return true;
            }else{
                return false;
            }
        }
    }

?>