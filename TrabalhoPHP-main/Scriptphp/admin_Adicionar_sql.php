<?php
include("banco.php");

// Configurações de upload
$diretorioUploads = dirname(__DIR__) . "/imagens/"; //caminho para onde a imagem sera salva
if (!is_dir($diretorioUploads)) {
    mkdir($diretorioUploads, 0755, true);
}

// Dados do formulário
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$descricao = $_POST["descricao"];
$imagemExistente = $_POST["imagem_existente"];


$nomeImagem = $imagemExistente; // Mantém a imagem existente por padrão
// Verifica se o arquivo foi enviado
if (!empty($_FILES['imagem']['name'])) {
    $arquivoTmp = $_FILES['imagem']['tmp_name'];
    $nomeArquivo = basename($_FILES['imagem']['name']);
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    
    // Valida extensões permitidas
    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];
    if (in_array($extensao, $extensoesPermitidas)) {
        // Gera nome único para evitar conflitos
        $nomeImagem = uniqid('img_') . '.' . $extensao;
        $caminhoCompleto = $diretorioUploads . $nomeImagem;
        $caminhoRelativo = "imagens/" . $nomeImagem;
        
        if (move_uploaded_file($arquivoTmp, $caminhoCompleto)) {
            // Remove a imagem antiga se existir
            if (!empty($imagemExistente) && file_exists(dirname(__DIR__) . '/' . $imagemExistente)) {
                unlink(dirname(__DIR__) . '/' . $imagemExistente);
            }
        } else {
            die("Erro ao fazer upload da imagem");
        }
    } else {
        die("Tipo de arquivo não permitido");
    }
}

//coloquei este caminho relativo, pois quando salvacva o caminho absoluto
//  ele não estava encontrando a imagem na pasta,exibindo em branco.
$sql = "INSERT INTO  produtos
    (nome, preco, categoria_id, imagem,descricao,quantidade)
    VALUES
    ('$nome', '$preco', '$categoria', '$caminhoRelativo','$descricao',$quantidade) 
    ";
$conexao->query($sql);

header("Location: /TrabalhoPHP-main/TrabalhoPHP-main/admin.php");
?>
