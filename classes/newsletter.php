<?php

class newsletter {
    
    protected $id;
    protected $email;
    
    public function __construct($id = null) {
        
        $this->email = '';
        $this->id = 0;
        
        if(!is_null($id)){
            $this->loadById($id);
        }
    }
    
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function setId($id){
        $this->id = $id;
    } 
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function loadById(){
        global $bdd;
        
        $sql = "SELECT * FROM `newsletter_yoga` WHERE `id` = :id";
        $req = $bdd->prepare($id);
        $req->execute([':id' => $id]);
    }
    
}

