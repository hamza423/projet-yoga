<?php

/*
 * 
 * Cette classe va nous permettre d'inserer les valeurs inscrit dans le formulaire de contact
 * 
 * 
 */
class contact {

    protected $id;
    protected $nom;
    protected $prenom;
    protected $telephone;
    protected $email;
    protected $objet;
    protected $message;

    //GETTER
    function getId() {
        //Role: récupération de l'attribut qui correspond à l'id
        //retour: retourne la valeur de l'atribut
        //parameter: neant
        return $this->id;
    }

    function getNom() {
        //Role: récupération de l'attribut qui correspond à Nom
        //retour: retourne la valeur de l'atribut
        //parameter: neant
        return $this->nom;
    }

    function getPrenom() {
        //Role: récupération de l'attribut qui correspond à prenom
        //retour: retourne la valeur de l'atribut
        //parameter: neant
        return $this->prenom;
    }

    function getTelephone() {
        //Role: récupération de l'attribut qui correspond à telephone
        //retour: retourne la valeur de l'atribut
        //parameter: neant
        return $this->telephone;
    }

    function getEmail() {
        //Role: récupération de l'attribut qui correspond à email
        //retour: retourne la valeur de l'atribut
        //parameter: neant
        return $this->email;
    }

    function getObjet() {
        //Role: récupération de l'attribut qui correspond à objet
        //retour: retourne la valeur de l'atribut
        //parameter: neant
        return $this->objet;
    }

    function getMessage() {
        //Role: récupération de l'attribut qui correspond à message
        //retour: retourne la valeur de l'atribut
        //parameter: neant
        return $this->message;
    }

    //SETTER
    function setId($id) {
        //Role: modifie la valeur de l'attribut Id
        //retour: retourne true si ok, false sinon
        //Parametre: $id
        $this->id = $id;
    }

    function setNom($nom) {
        //Role: modifie la valeur de l'attribut nom
        //retour: retourne true si ok, false sinon
        //Parametre: $nom
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        //Role: modifie la valeur de l'attribut prenom
        //retour: retourne true si ok, false sinon
        //Parametre: $prenom
        $this->prenom = $prenom;
    }

    function setTelephone($telephone) {
        //Role: modifie la valeur de l'attribut telephone
        //retour: retourne true si ok, false sinon
        //Parametre: $id
        $this->telephone = $telephone;
    }

    function setEmail($email) {
        //Role: modifie la valeur de l'attribut email
        //retour: retourne true si ok, false sinon
        //Parametre: $email
        $this->email = $email;
    }

    function setObjet($objet) {
        //Role: modifie la valeur de l'attribut objet
        //retour: retourne true si ok, false sinon
        //Parametre: $objet
        $this->objet = $objet;
    }

    function setMessage($message) {
        //Role: modifie la valeur de l'attribut message
        //retour: retourne true si ok, false sinon
        //Parametre: $message
        $this->message = $message;
    }

    public function loadFromTab($tab) {
        // Rôle : tableau contenant des valeurs d'attributs à modifier, avec comme clé le nom de l'attribut
        // Retour : true si réussi, false sinon
        // Paramètres : $tab
        $cpt = 0;

        foreach (["id", "nom", "prenom", "email", "telephone", "objet", "message"] as $champ) {
            if (isset($tab[$champ])) {
                $setter = "set" . ucfirst($champ);
                if (!$this->$setter($tab[$champ])) {
                    $cpt++;
                }
            }
        }
        if ($cpt === 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert() {

        global $bdd;
        $sql = "INSERT INTO `contact_yoga` SET `nom`=:nom,`prenom`=:prenom, `email`=:email, `telephone`=:telephone, `objet`=:objet, `message`=:message";
        $req = $bdd->prepare($sql);
        if ($req->execute([":nom" => $this->nom, ":prenom" => $this->prenom, ":email" => $this->email, ":telephone" => $this->telephone, ":objet" => $this->objet, ":message" => $this->message])) {
            
        };
        
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['objet'], $_POST['message']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['objet']) && !empty($_POST['message'])) {
            echo "<span class='success'>Merci,votre message</span>";
        } else {
            echo "<span class='error'>Veuillez remplir les champs !</span>";
        }
    }
}
