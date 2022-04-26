<?php

namespace libs\system;
use libs\system\Controller;

//In this file we are parsing the urls to extract the controller and the actions (methods in the controller)


class BootStrap
{
    
    public function __construct(){
        if(isset($_GET["url"])){

            $url=explode("/",$_GET["url"]);

            $controller_file="src/controller/".ucfirst($url[0])."Controller.php";

            //$controller_file="src/controller/".$url[0]."Controller.php";

            //echo $controller_file;
            
            if(file_exists($controller_file)){

                require_once $controller_file;

                $file = ucfirst($url[0])."Controller";

                $controller_object= new $file();

                // echo $controller_object;

                if(isset($url[2])){

                    $method=$url[1];

                    if(method_exists($controller_object,$method)){

                        $controller_object->$method($url[2]);
                    }else {

                        die($method."n'exite pas dans le controlleur".$file);
                    }
                 
                }

                else if(isset($url[1])){

                    $method=$url[1];

                    if(method_exists($controller_object,$method)){

                        $controller_object->$method();

                    }else {
                        die($method."n'exite pas dans le controlleur".$file);
                    }
                 
                }
            }else {
                die($controller_file."n'existe pas");
            }
        }elseif(!isset($_GET["url"])) {
      
          header("location: http://localhost/doctrineProprietaire/proprietaire/index");
            
        }
    }
}

?>