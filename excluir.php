<?php 

    include 'conexao.php';

    $db->query("delete from clientes where idclientes = ".$_GET['cliente_idclientes']);

?>