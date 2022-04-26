<?php

use libs\system\Controller;
use src\model\ProprietaireDb;

class ProprietaireController extends Controller{

    private $proprio;

    public function __construct(){
        parent::__construct();
        $this->proprio = new ProprietaireDb(); 
    }

    public function index(){

        return $this->view->load("Proprietaire/index");
    }

    public function add(){

        if(!isLoggedIn()){
            header("location: http://localhost/doctrine/proprietaire/index");
         }
   
         $data = [
            "user_id" => $_SESSION["id_user"],
            "prenom_p" => '',
            "nom_p" => '',
            "date_naissance" => '',
            "lieu_naissance" => '',
            "code_piece_identite" => '',
            "numero_piece_identite" => '',
            "adresse" => '',
            "email" => '',
            "prenomError" => '',
            "nomError" => '',
            "date_naissance_Error" => '',
            "lieu_naissance_Error" => '',
            "code_piece_identite_Error" => '',
            "numero_piece_identite_Error" => '',
            "adresseError" => '',
            "emailError" => ''
         ];
   
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
   
            $data = [
               "user_id" => $_SESSION["id_user"],
               "prenom_p" => trim($_POST['prenom_p']),
               "nom_p" => trim($_POST['nom_p']),
               "date_naissance" => trim($_POST['date_naissance']),
               "lieu_naissance" => trim($_POST['lieu_naissance']),
               "code_piece_identite" => trim($_POST['code_piece_identite']),
               "numero_piece_identite" => (int)trim($_POST['numero_piece_identite']),
               "adresse" => trim($_POST['adresse']),
               "email" => trim($_POST['email']),
               "prenomError" => '',
               "nomError" => '',
               "date_naissance_Error" => '',
               "lieu_naissance_Error" => '',
               "code_piece_identite_Error" => '',
               "numero_piece_identite_Error" => '',
               "adresseError" => '',
               "emailError" => ''
            ];
   
            //  In here we are doing some data validation without regular expressions
            if(empty($data["prenom_p"])){
               $data["prenomError"] = "Entrez le prenom du proprietaire";
            }
   
            if(empty($data["nom_p"])){
               $data["nomError"] = "Entrez le nom du proprietaire";
            }
   
            if(empty($data["date_naissance"])){
               $data["date_naissance_Error"] = "Entrez la date de naissance du proprietaire";
            }
   
            if(empty($data["lieu_naissance"])){
               $data["lieu_naissance_Error"] = "Entrez le lieu de naissance du proprietaire";
            }
   
            if(empty($data["code_piece_identite"])){
               $data["code_piece_identite_Error"] = "Entrez le code de la piece d'identite du proprietaire";
            }
   
            if(empty($data["numero_piece_identite"])){
               $data["numero_piece_identite_Error"] = "Entrez le numero de la piede d'identite du proprietaire";
            }
   
            if(empty($data["adresse"])){
               $data["adresseError"] = "Entrez l'adresse du proprietaire";
            }
   
            if(empty($data["email"])){
               $data["emailError"] = "Entrez l'email du proprietaire";
            }
   
            if(empty($data["prenomError"]) && empty($data["nomError"]) && empty($data["date_naissance_Error"]) && empty($data["lieu_naissance_Error"]) && empty($data["code_piece_identite_Error"]) && empty($data["numero_piece_identite_Error"]) && empty($data["adresseError"]) && empty($data["emailError"])){
              
               // This is a little trial for the date
   
               $box = $data["date_naissance"];
               $convertingDate = new \DateTime($box);
   
               // Date trial ending
   
               $proprietaire = new Proprietaire();
               $proprietaire->setIdUser($data["user_id"]);
               $proprietaire->setPrenom($data['prenom_p']);
               $proprietaire->setNom($data['nom_p']);
               // $proprietaire->setDateNaissance($data['date_naissance']);
               $proprietaire->setDateNaissance($convertingDate);
               $proprietaire->setLieuNaissance($data['lieu_naissance']);
               $proprietaire->setCni($data['code_piece_identite']);
               $proprietaire->setNumeroCni($data['numero_piece_identite']);
               $proprietaire->setAdresse($data['adresse']);
               $proprietaire->setEmail($data['email']);
   
               if($this->proprio->add($proprietaire)){
                  echo "Everything is allright";
                  header("location: http://localhost/doctrine/proprietaire/all");
               }else{
                  die("Une erreur s'est produite");
               }
   
            }
   
         } 

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