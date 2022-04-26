<?php
    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['id_user'])){
            // echo "The user is logged in";
            return true;
        }else{
            // echo "The user is not logged in";
            return false;
        }
    }