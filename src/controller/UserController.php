<?php 

    use libs\system\Controller;
    use src\model\UserDb;

    class UserController extends Controller{
        private $admin;

        public function register(){

            return $this->view->load('User/register');
        }

        public function login(){

            return $this->view->load("User/login");
        }

        public function createUserSession($user){

            $_SESSION['id_user'] = $user->getUserId();
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['email_user'] = $user->getEmailUser();

            header("location: http://localhost/doctrine/Proprietaire/index");
        }

        public function logout(){
            unset($_SESSION['id_user']);
            unset($_SESSION['username']);
            unset($_SESSION['email_user']);
            header("location: http://localhost/doctrine/User/login");
        }
    }

?>