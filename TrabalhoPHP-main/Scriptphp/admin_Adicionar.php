


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-size: 16px;
        }

        .image-preview {
            width: 200px;
            height: 200px;
            border: 2px dashed #bdc3c7;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 100%;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: opacity 0.3s;
        }

        .btn-confirm {
            background-color: #27ae60;
            color: white;
        }

        .btn-cancel {
            background-color: #95a5a6;
            color: white;
            text-decoration: none;
            text-align: center;
            line-height: 40px;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Editar Produto</h1>
        <!-- Adicione enctype para permitir upload de arquivos -->
        <form action="admin_Adicionar_sql.php" method="POST" enctype="multipart/form-data">
            <!-- Preview da imagem -->
            <div class="form-group">
                <label>Imagem do Produto</label>
                <div class="image-preview">
                    <!-- Exibe a imagem atual do produto -->
                    <img src="" id="imagePreview" alt="Preview da imagem">
                </div>
                <!-- Altere o nome do input e adicione o campo oculto para imagem existente -->
                <input type="file" id="imageInput" name="imagem" accept="image/*">
                <input type="hidden" name="imagem_existente" value="<?php echo $dados['imagem']; ?>">
            </div>
            <input type="hidden" name="id" value="">
            <!-- Nome do produto -->
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" name="nome" value="" required>
            </div>

            <!-- Categoria -->
            <div class="form-group">
            <!- Faz a conexao com o banco de dados, seleciona a tabela categorias, e exite a categoria, e o id dela, Fiz desta maneira
            pois no trabalho pedia para o id ser primary key, entao para na hora de cadastrar oproduto no sistema, o usuario nao se perder ao ter que Adicionar
            o id para cadastrar  o produto, saber exatamente qual id se refere a qual catgoria    –>
            <label>Categoria</label>
                <select name="categoria" required>
                    <option value="">Selecione uma categoria</option>
                    <?php
                    // Conexão com o banco de dados
                    include("banco.php");

                    // Verifica se houve erro na conexão
                    if ($conexao->connect_error) {
                        die("Erro de conexão: " . $conexao->connect_error);
                    }

                    // Consulta para buscar as categorias
                    $sql = "SELECT id, nome FROM categorias";
                    $result = $conexao->query($sql);

                    // Verifica se há resultados
                    if ($result->num_rows > 0) {
                        // Loop para exibir as opções
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'> - " . $row['nome'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>Nenhuma categoria encontrada</option>";
                    }

                    // Fecha a conexão
                    $conexao->close();
                    ?>
                </select>
            </div>      <!-- Preço -->
            <div class="form-group">
                <label>Preço (R$)</label>
                <input type="number" name="preco" value="" min="0" step="0.01">
            </div>
            <div class="form-group">
                <label>Quantidade Estoque</label>
                <input type="number" name="quantidade" value="" min="0" step="0.01">
            </div>
            <div class="form-group">
                <label>Descricao Produto</label>
                <input type="text" name="descricao" value="" required>

            </div>
            <!-- Botões -->
            <div class="button-group">
                <a href="/TrabalhoPHP-main/TrabalhoPHP-main/admin.php" class="btn btn-cancel">Voltar</a>
                <button type="submit" class="btn btn-confirm">Confirmar Alterações</button>
            </div>
        </form>
    </div>
    <script>
        // Script para preview da imagem
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>