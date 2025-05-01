<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
<a href="aluno_novo.php" class=" btn btn-sucess">  
    NOVO
</a>

<div>
 <form action="aluno_consulta.php" method="get">
  <input type="text" name="nome"/>
  <input type="submit" value='Pesquisar'/>
 </form>
</div>


    
    
       <tbody>

       <?php

 //Conectar ao banco
 $conexao = new mysqli(
   "localhost", //servidor
   "root", //usuario
   "",  //senha
   "loja",  //BD
 );

 
$nome ="";

    
 $nome = @$_GET["nome"];



$sql = "SELECT* 
FROM produtos
WHERE nome LIKE '%$nome%'";

$resultado = $conexao -> query($sql);

foreach($resultado as $linha)
{
    echo '
       <div class="product-card" data-category="'.$linha['ID'].'">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img style=" width: 500px; height: 800px;" src="Roupas/infantil/stich22,99.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">'.$linha['NOME'].'</h3>
                        <p class="product-price">R$'.$linha['PRECO'].'</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>
    ';
}
?>
 
       </tbody>
</body>
</html>