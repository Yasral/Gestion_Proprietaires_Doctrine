<?php 

    use libs\system\Controller;
    use src\model\UserDb;

    class UserController extends Controller{
        private $admin;

        public function __construct(){
            parent::__construct();
            $this->admin = new UserDb();
        }

        public function register(){

            $data = [
                "username" => "",
                "email_user" => "",
                "password" => "",
                "confirmPassword" => "",
                "usernameError" => "",
                "email_userError" => "",
                "passwordError" => "",
                "confirmPasswordError" => "",
            ];

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    "username" => trim($_POST['username']),
                    "email_user" => trim($_POST['email_user']),
                    "password" => trim($_POST['password']),
                    "confirmPassword" => trim($_POST['confirmPassword']),
                    "usernameError" => "",
                    "email_userError" => "",
                    "passwordError" => "",
                    "confirmPasswordError" => "",
                ];

                // $nameValidation = "/^[a-zA-Z0-9]*$/";
                // $passwordValidation = "/^(.{0,5}|[^a-z]*|[^\d]*)$/i";


                // Validate username

                if(empty($data["username"])){
                    $data["usernameError"] = "Entrez un nom d'utilisateur";
                }

                // Validate email adress

                if(empty($data["email_user"])){
                    $data["email_userError"] = "Entrez votre adresse mail";
                }elseif(!filter_var($data["email_user"], FILTER_VALIDATE_EMAIL)){
                    $data["email_userError"] = "Le format n'est pas correct";
                }

                // Validate password
                if(empty($data["password"])){
                    $data["passwordError"] = "Entrez un mot de passe";
                }

                // Validate confirm password
                if(empty($data["confirmPassword"])){
                    $data["confirmPasswordError"] = "Confirmez votre mot de passe";
                }else{
                    if($data["confirmPassword"] != $data["password"]){
                        $data["confirmPasswordError"] = "Vos mots de passe ne sont pas identiques. Reessayer a nouveau";
                    }
                }

                // Making sure that errors are not empty

                var_dump($data);
                
                if(empty($data["usernameError"]) && empty($data["email_userError"]) && empty($data["passwordError"]) && empty($data["confirmPasswordError"])){

                    // Little password hashing
                    $data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
                    $administrator = new User();
                    $administrator->setUsername($data['username']);
                    $administrator->setEmailUser($data['email_user']);
                    $administrator->setPassword($data['password']);

                    // Trying to register a new user
                    if($this->admin->registerUser($administrator)){
                        echo "New user saved";
                        header("location: http://localhost/doctrineProprietaire/User/login");
                    }else{
                        die("Une erreur s'est produite");
                    }

                }
            }

            return $this->view->load('User/register', $data);
        }

        public function login(){

            $data = [
                "username" => "",
                "email_user" => "",
                "password" => "",
                "confirmPassword" => "",
                "usernameError" => "",
                "email_userError" => "",
                "passwordError" => "",
                "confirmPasswordError" => "",
            ];

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    "username" => trim($_POST['username']),
                    "email_user" => trim($_POST['email_user']),
                    "password" => trim($_POST['password']),
                    "confirmPassword" => trim($_POST['confirmPassword']),
                    "usernameError" => "",
                    "email_userError" => "",
                    "passwordError" => "",
                    "confirmPasswordError" => "",
                ];

                if(empty($data["username"])){
                    $data["usernameError"] = "Entrez un nom d'utilisateur";
                }

                if(empty($data["password"])){
                    $data["passwordError"] = "Entrez un mot de passe";
                }

                if(empty($data["usernameError"]) && empty($data["passwordError"])){
                    $administrator = new User();
                    $administrator->setUsername($data['username']);
                    $administrator->setEmailUser($data['email_user']);
                    $administrator->setPassword($data['password']);

                    $loggedInUser = $this->admin->login($data['username'], $data['password']);

                    if($loggedInUser){

                        $this->createUserSession($loggedInUser);
    
                    }else{

                        $data['passwordError'] = 'Mot de passe ou Identifiant incorrect. Veuillez reessayer svp.';

                        return $this->view->load("User/login", $data);
                    }
                }
            }
            else{
                $data = [
                    "username" => "",
                    "email_user" => "",
                    "password" => "",
                    "confirmPassword" => "",
                    "usernameError" => "",
                    "email_userError" => "",
                    "passwordError" => "",
                    "confirmPasswordError" => "",
                ];
            }

            return $this->view->load("User/login", $data);
        }

        public function createUserSession($user){

            $_SESSION['id_user'] = $user->getUserId();
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['email_user'] = $user->getEmailUser();

            header("location: http://localhost/doctrineProprietaire/Proprietaire/index");
        }

        public function logout(){
            unset($_SESSION['id_user']);
            unset($_SESSION['username']);
            unset($_SESSION['email_user']);
            header("location: http://localhost/doctrineProprietaire/User/login");
        }
    }

?>