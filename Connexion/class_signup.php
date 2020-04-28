<?php

class signup{
    protected $_prenom;
    protected $_mdp;
    protected $_mail;
    


    public function __construct($_prenom,$_mdp,$_mail){
        $this->_prenom = $_prenom;
        $this->_mdp = $_mdp;
        $this->_mail = $_mail;
    }

    //getters
    public function getPrenom(){
        return $this->_prenom;
    }

    public function getMdp(){
        return $this->_mdp;
    }

    public function getMail(){
        return $this->_mail;
    }


  
    //setters
    public function setPrenom($Prenom){
        $this->_prenom = $Prenom;
       
    }
    public function setMdp($Mdp){
        $this->_mdp = $Mdp;
       
    }

    public function setMail($Mail){
        $this->_mail = $Mail;       
    }


    

    public function inscription($bdd){
        $prenom = $this->_prenom;
        $mdp = $this->_mdp;
        $mail = $this->_mail;
        $req = $bdd->prepare("INSERT INTO users (prenom, mail, mdp, id_usertype)
                            VALUES (:prenom, :mail, :mdp, 2) ");
        $req->execute(array(
                    'prenom' => $this->_prenom,
                    'mdp' => $this->_mdp,
                    'mail'=>$this->_mail
                       ));

        header("location:success.php");
   }




}