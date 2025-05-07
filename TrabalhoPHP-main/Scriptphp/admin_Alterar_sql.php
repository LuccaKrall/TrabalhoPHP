<?php
include("banco.php");

// Configurações de upload
$diretorioUploads = dirname(__DIR__) . "/imagens/"; //caminho para onde a imagem sera salva
if (!is_dir($diretorioUploads)) {
    mkdir($diretorioUploads, 0755, true);
}

// Dados do formulário
$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
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

//comando para atualizar o banco de dados 
//coloquei este caminho relativo, pois quando salvacva o caminho absoluto
//  ele não estava encontrando a imagem na pasta,exibindo em branco.
$sql = "UPDATE produtos
SET nome = '$nome',
    preco = '$preco',
    categoria_id = '$categoria',
    quantidade = '$quantidade',
    imagem = '$caminhoRelativo'   
WHERE id = '$id';";
$conexao->query($sql);

header("Location: /TrabalhoPHP-main/TrabalhoPHP-main/admin.php");
?>
