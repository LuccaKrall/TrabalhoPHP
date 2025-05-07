<?php
// Conectar ao banco
$conexao = new mysqli(
    "localhost", //servidor
    "root", //usuario
    "",  //senha
    "loja"  //BD
);

$nome = $_GET['NOME'] ?? '';

$sql = "SELECT* 
FROM produtos
WHERE nome LIKE '%$nome%'";

$resultado = $conexao->query($sql);

foreach($resultado as $linha) {
    echo '
    <tr>
        <td>'.$linha['ID'].'</td>
        <td><img src="'.$linha['imagens'].'" alt="'.$linha['NOME'].'" class="product-image"></td>
        <td>'.$linha['NOME'].'</td>
        <td>Anéis</td>
        <td>15</td>
        <td>R$'.$linha['PRECO'].'</td>
        <td>
            <a href="Scriptphp/admin_Delete.php?nome='.$linha['NOME'].'" class="btn btn-danger">🗑</a>
            <a href="aluno_alterar.php?nome='.$linha['NOME'].'" class="btn btn-primary">✏️</a>
        </td>
    </tr>
';
}
?>