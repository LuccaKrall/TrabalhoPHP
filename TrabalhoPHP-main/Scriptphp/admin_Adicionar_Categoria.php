<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Categoria</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-confirm {
            background-color: #28a745;
            color: white;
        }
        .btn-back {
            background-color: #dc3545;
            color: white;
        }
        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Adicionar Categoria</h1>
        <form action="admin_Adicionar_Categoria_sql.php" method="POST">
            <input type="text" name="nome" placeholder="Nome da Categoria" required>
            <div class="buttons">
                <button type="submit" class="btn-confirm">Confirmar</button>
                <a class="btn-back" href="/TrabalhoPHP-main/TrabalhoPHP-main/admin.php" style="text-decoration: none; display: inline-block; padding: 10px 15px; background-color: #dc3545; color: white; border-radius: 4px; text-align: center;">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>