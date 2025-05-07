<?php
 include("banco.php");

 $id = @$_POST["ID"];   
$imagem = @$_POST["imagens"];
 $nome = @$_POST ["NOME"];
 $categoria = @$_POST ["CATEGORIA"];
 $preco = @$_POST ["PRECO"];

 $sql = "DELETE FROM produtos
         WHERE ID = '$id'";

$conexao->query($sql);


header("location: /Loja-main/admin.php");



?>