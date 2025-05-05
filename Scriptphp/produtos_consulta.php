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


<div>
 <form action="aluno_consulta.php" method="get">
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
";

$resultado = $conexao -> query($sql);

foreach($resultado as $linha)
{
    echo '
               <div class="product-card">
                    <div class="product-image">
                        <img src="'.$linha['imagens'].'" alt="Produto 1">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">'.$linha['NOME'].'</h3>
                        <p class="product-price price-tech">R$'.$linha['PRECO'].'</p>
                        <p class="product-description">Robo Aspirador, xiaomi, com sensores, passador de pano, e mopo giratorio.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-tech">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline">Detalhes</a>
                        </div>
                    </div>
                </div>
    ';
}
?>
        
       </tbody>
</body>
</html>