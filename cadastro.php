<?php
    
    include 'conexao.php';
    include 'funcoes.php';

    $db = new mysqli("localhost", "root", "root", "alphacode"); 
    
    $db->query("insert into register (`nome`,`data`,
    `email`,`celular`,`telefone`,`profissao`)
     values ('".$_POST['nome']."', '".$_POST['data']."',
     '".$_POST['email']."', '".$_POST['celular']."',
      '".$_POST['telefone']."', '".$_POST['profissao']."')");

?>



