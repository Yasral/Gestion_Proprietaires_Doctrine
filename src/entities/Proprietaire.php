<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaire")
 */
    class Proprietaire
    {
           /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
        private $code_proprietaire;

    /**
     * Many proprietaires were added by one user. This is the owning side.
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="User", inversedBy="proprietaires")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id_user", nullable="false")
     */

    private $user_id;  

         /**
     * @ORM\Column(type="string")
     */
        private $prenom_p;
        
         /**
     * @ORM\Column(type="string")
     */
        private $nom_p;
                
         /**
     * @ORM\Column(type="date")
     */
        private $date_naissance;
                
         /**
     * @ORM\Column(type="string")
     */
        private $lieu_naissance;
                
        /**
     * @ORM\Column(type="string", unique=true)
     */
        private $code_piece_identite;

        /**
     * @ORM\Column(type="integer", unique=true)
     */
        private $numero_piece_identite;
                
         /**
     * @ORM\Column(type="string")
     */
        private $adresse;
        
     /**
     * @ORM\Column(type="string", unique=true)
     */
        private $email; 
        
        public function getCode_proprietaire(){
            return $this->code_proprietaire;
        }
        public function setId_proprietaire($code_proprietaire){
            return $this->code_proprietaire = $code_proprietaire;
        }

        public function getIdUser(){
            return $this->user_id;
        }

        public function setIdUser($user_id){
            $this->user_id = $user_id;
        }

        public function getPrenom(){
            return $this->prenom_p;
        }

        public function setPrenom($prenom){
            return $this->prenom_p = $prenom;
        }

        public function getNom(){
            return $this->nom_p;
        }

        public function setNom($nom){
            return $this->nom_p = $nom;
        }

        public function getDateNaissance(){
            return $this->date_naissance;
        }
        public function setDateNaissance($dateNaissance){
            return $this->date_naissance = $dateNaissance;
        }

        public function getLieuNaissance(){
            return $this->lieu_naissance;
        }
        public function setLieuNaissance($lieuNaissance){
            return $this->lieu_naissance = $lieuNaissance;
        }

        public function getCni(){
            return $this->code_piece_identite;
        }
        public function setCni($cni){
            $this->code_piece_identite = $cni;
        }

        public function getNumeroCni(){
            return $this->numero_piece_identite;
        } 
        public function setNumeroCni($Numerocni){
            $this->numero_piece_identite = $Numerocni;
        }

        public function getAdresse(){
            return $this->adresse;
        }
        public  function setAdresse($adresse){
            $this->adresse=$adresse;
        }

        public  function getEmail(){
            return $this->email;
        }
        public  function setEmail($email){
            $this->email=$email;
        }

    }
?>