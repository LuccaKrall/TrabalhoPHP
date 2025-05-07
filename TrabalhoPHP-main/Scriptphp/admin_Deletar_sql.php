<?php
 include("banco.php");

 $id = @$_POST["id"];   
$imagem = @$_POST["imagem"];
 $nome = @$_POST ["nome"];
 $categoria = @$_POST ["categoria"];
 $preco = @$_POST ["preco"];

 $sql = "DELETE FROM produtos
         WHERE id = '$id'";

$conexao->query($sql);


header("location: /TrabalhoPHP-main/TrabalhoPHP-main/admin.php");



?>