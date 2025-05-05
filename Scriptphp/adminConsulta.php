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
            <td class="action-btns">
                <button class="btn btn-edit"><i class="fas fa-edit"></i> Editar</button>
                <button class="btn btn-delete"><i class="fas fa-trash"></i> Excluir</button>
            </td>
        </tr>
    ';
}
?>