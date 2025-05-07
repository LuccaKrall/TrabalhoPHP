<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gerenciamento de Semi Joias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table th, table td {
        text-align: center;
        vertical-align: middle;
        }
        body {
            background-color: #f8f9fa;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 1.8rem;
        }

        .header .btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .header .btn:hover {
            background-color: #218838;
        }

        .search-bar {
            padding: 15px 20px;
            background-color: #f1f1f1;
            display: flex;
            gap: 10px;
        }

        .search-bar input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .search-bar button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #0069d9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #495057;
        }

        table tr:hover {
            background-color: #f8f9fa;
        }

        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }

        .action-btns {
            display: flex;
            gap: 5px;
        }

        .action-btns .btn {
            padding: 5px 10px;
            font-size: 0.8rem;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            color: white;
        }

        .btn-edit {
            background-color: #17a2b8;
        }

        .btn-edit:hover {
            background-color: #138496;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-active {
            background-color: #d4edda;
            color: #155724;
        }

        .status-inactive {
            background-color: #f8d7da;
            color: #721c24;
        }

        .pagination {
            display: flex;
            justify-content: center;
            padding: 15px;
            background-color: #f1f1f1;
        }

        .pagination a {
            padding: 8px 12px;
            margin: 0 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: #007bff;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        @media (max-width: 768px) {
            .container {
                border-radius: 0;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
            
            .action-btns {
                flex-direction: column;
                gap: 3px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-gem"></i> Gerenciamento de Produtos</h1>
            <div>
                <a href="Scriptphp/admin_Adicionar_Categoria.php" class="btn">
                    <i class="fas fa-plus"></i> Adicionar Categoria
                </a>
                <a href="Scriptphp/admin_Adicionar.php" class="btn">
                    <i class="fas fa-plus"></i> Adicionar Produto
                </a>
            </div>
        </div>

        <div class="search-bar">
         <form action="" method="get">
        <input type="text" name="NOME" placeholder="Pesquisar produtos...">
        <button type="submit"><i class="fas fa-search"></i> Buscar</button>
        </form>   
        </div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php include('Scriptphp/adminConsulta.php'); ?>
    </tbody>
</table>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</body>
</html>