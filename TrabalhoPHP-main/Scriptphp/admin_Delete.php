<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Exclusão</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .delete-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .delete-icon {
            font-size: 60px;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 15px;
        }

        p {
            color: #666;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .item-name {
            font-weight: bold;
            color: #e74c3c;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn {
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .btn-cancel {
            background-color: #ecf0f1;
            color: #333;
        }

        .btn-cancel:hover {
            background-color: #bdc3c7;
        }
    </style>
</head>
<body>
<form action="admin_Deletar_sql.php" method="post">
    <div class="delete-container">
        <div class="delete-icon">🗑️</div>
        <h2>Confirmar Exclusão</h2>
        <p>Você está prestes a excluir o item <span class="item-name"><?php echo htmlspecialchars($_GET['nome']); ?></span>. Esta ação não pode ser desfeita.</p>
        
        <div class="button-group">
            <button type="submit" name="confirm" value="DELETE" class="btn btn-delete">Confirmar Exclusão</button>
            <a href="/TrabalhoPHP-main/TrabalhoPHP-main/admin.php" class="btn btn-cancel">Cancelar</a>
        </div>
    </div>
</form>
</body>
</html>