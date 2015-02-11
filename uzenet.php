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
    </head>
    <body>
        <h1>Üzenet érkezett:</h1>
        <?php
            //print_r($_POST);
            echo "Név: " . $_POST['nev'] . '<br>';
            echo "Telefon: ".$_POST['tel'].'<br>';
            echo "e-mail: ".$_POST['email'].'<br>';
            echo "Üzenet: ".$_POST['uzenet'].'<br>';
        ?>
    </body>
</html>
