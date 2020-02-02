<?php
require 'recaptcha/autoload.php';
if(isset($_POST['submitPost'])){
if(isset($_POST['g-recaptcha-response'])){
$recaptcha = new \ReCaptcha\ReCaptcha('6LdyJ9QUAAAAACWLj7SH72ik7107GRvBKJQ2jSc6');
$resp = $recatcha->setExpectedHostname('site-yoga.serhane.ovh.com')
                 ->verify($_POST['g-recaptcha-response'], $remoteIp);
if ($resp->isSuccess()) {
    echo('verifier');
} else {
    $errors = $resp->getErrorCodes();
    echo('error robot');
}
}else {
    echo 'captcha non remplie';
}
}