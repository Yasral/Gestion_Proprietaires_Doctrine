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

        }

        public function logout(){

        }
    }

?>