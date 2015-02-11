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
        <h1>Üzenet</h1>
        <form method="post" action="uzenet.php">
            Név: <br><input name="nev" size="30" maxlength="10">
            <br>
            Telefon: <br><input name="tel" size="30" maxlength="10">
            <br>
            e-mail: <br><input name="email" size="30" maxlength="10">
            <br>
            Üzenet: <br><textarea name="uzenet" rows="15" cols="40">
                
            </textarea>
            <br>
            <input type="submit" value="Küldés" name="kuld" >
            <br>
            
            
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
