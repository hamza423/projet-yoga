<?php

/*
 * Code d'initialisation des tous les programmes
 *
 *
 */

// Affichage des erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);

// chargement classes et fonctions
include "classes/contact.php";

// ouverture de la base de donnÃ©es
// new PDO(paramÃ¨tres de connexion, login, mote de passe)

global $bdd;
$bdd = new PDO("mysql:host=sqlprive-be24678-001.privatesql;dbname=serhane;charset=UTF8", "serhane", "Aquaman42");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);