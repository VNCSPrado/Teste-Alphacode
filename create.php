<?php


    $db = new mysqli("localhost", "root", "root", "alphacode"); 

    $mysqli->query("insert into register (`nome`,`data`,`email`,`celular`) 
    values ('".$_POST['nome']."','".$_POST['data']."',"',
    '".$_POST['data']."',"','".$_POST['data']."')");

?>