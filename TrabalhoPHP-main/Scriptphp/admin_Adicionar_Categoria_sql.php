<?php
 include("banco.php");

 $nome = @$_POST ["nome"];

 $sql = "INSERT INTO  categorias
         (nome)
          values
        ('$nome')";

$conexao->query($sql);


header("location: /TrabalhoPHP-main/TrabalhoPHP-main/admin.php");



?>