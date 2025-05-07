<?php
// Conectar ao banco
include("banco.php");

$nome = $_GET['NOME'] ?? '';

$sql = "SELECT produtos.id, produtos.imagem, produtos.nome, produtos.quantidade, produtos.preco, categorias.nome AS categoria_nome
FROM produtos
LEFT JOIN categorias ON produtos.categoria_id = categorias.id
WHERE produtos.nome LIKE '%$nome%'";

$resultado = $conexao->query($sql);

foreach($resultado as $linha) {
    echo '
    <tr>
        <td>'.$linha['id'].'</td>
        <td><img src="'.$linha['imagem'].'" alt="'.$linha['nome'].'" class="product-image"></td>
        <td>'.$linha['nome'].'</td>
        <td>'.$linha['categoria_nome'].'</td>
        <td>'.$linha['quantidade'].'</td>
        <td>R$'.$linha['preco'].'</td>
        <td>
            <a href="Scriptphp/admin_Delete.php?id='.$linha['id'].'" class="btn btn-danger">🗑</a>
            <a href="Scriptphp/admin_Alterar.php?id='.$linha['id'].'" class="btn btn-primary">✏️</a>
        </td>
    </tr>
';
}
?>