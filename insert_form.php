<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'lib/init.php';

$contact = new contact();
$contact->loadFromTab($_POST);

$contact->insert();

$destinataires = $_POST['email'];
$sujet = "Merci pour votre message";

//entete de la page
$header = "MIME-Version: 1.0\n";
$header .= "content-type: text/html; charset=utf-8\n";

$message = '<html><header><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>';
$message .= '<body>';
$message .= "<h1>Bonjour</h1><br>";
$message .= "<p>Merci pour le message dont vous nous avez envoyez</p><br>";
$message .= "<p>Notre équipe d'analyse recherche,en ce moment, une solution àd'établir pour votre question</p>";
$message .= "<p>Nous vous recontacterons dès que possible</p><br>";
$message .= "L'équipe Instant Présent";


mail($destinataires, $sujet, $message, $header);