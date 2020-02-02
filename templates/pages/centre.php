<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Voltaire&display=swap" rel="stylesheet"> 
        <link href="css/glide.core.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/glide.theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include '../../templates/fragments/header.php' ?>
        <?php include '../../templates/fragments/main_centre.php' ?>
        <?php include '../../templates/fragments/footer.php' ?>
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script>
            new Glide('.glide').mount();
        </script>
        <script src="../../js/script.js" type="text/javascript"></script>
    </body>
</html>