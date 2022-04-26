<?php
// src/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_user;

    /**
     * @ORM\Column(type="string", unique=true)
     */

    private $username;

    /**
     * @ORM\Column(type="string", unique=true)
     */

    private $email_user;

    /**
     * @ORM\Column(type="string")
     */

    private $password;

    /**
     * One user can add many owner. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Proprietaire", mappedBy="user_id")
     */

    private $user_id;


    public function getUserId(){
        return $this->id_user;
    }

    public function setUserId($id_user){
        return $this->id_user = $id_user;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        return $this->username = $username;
    }

    public function getEmailUser(){
        return $this->email_user;
    }

    public function setEmailUser($email_user){
        return $this->email_user = $email_user;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        return $this->password = $password;
    }
}