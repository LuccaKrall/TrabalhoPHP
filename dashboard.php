<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Moderno</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        body {
            background: #f8fafc;
            min-height: 100vh;
            padding: 2rem;
        }

        .dashboard-header {
            text-align: center;
            margin: 2rem 0 3rem 0;
        }

        .dashboard-header h1 {
            font-size: 2.5rem;
            color: #1e293b;
            letter-spacing: -0.025em;
            margin-bottom: 0.5rem;
            position: relative;
            display: inline-block;
        }

        .dashboard-header h1::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #6366f1;
            border-radius: 2px;
        }

        .dashboard-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .dashboard-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05),
                        0 2px 4px -1px rgba(0, 0, 0, 0.02);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            color: #334155;
            position: relative;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08),
                        0 4px 6px -2px rgba(0, 0, 0, 0.03);
        }

        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 100%);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: #1e293b;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .card-title::before {
            content: '';
            width: 24px;
            height: 24px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        #produtos .card-title::before {
            content: '📦';
        }

        #vendas .card-title::before {
            content: '💰';
        }

        #categorias .card-title::before {
            content: '📁';
        }

        .card-content {
            font-size: 0.875rem;
            color: #64748b;
            line-height: 1.5;
        }

        /* Cores diferentes para cada card */
        #produtos::before { background: linear-gradient(90deg, #60a5fa 0%, #3b82f6 100%); }
        #vendas::before { background: linear-gradient(90deg, #34d399 0%, #10b981 100%); }
        #categorias::before { background: linear-gradient(90deg, #f59e0b 0%, #d97706 100%); }

        @media (max-width: 640px) {
            body {
                padding: 1rem;
            }
            
            .dashboard-header h1 {
                font-size: 2rem;
            }
            
            .dashboard-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <h1>Painel de Controle</h1>
        <p>Gestão completa do seu negócio</p>
    </div>
    
    <div class="dashboard-container">
        <a href="TrabalhoPHP-main/admin.php" class="dashboard-card" id="produtos">
            <h2 class="card-title">Produtos</h2>
            <p class="card-content">Gerencie seu catálogo de produtos, estoque e variações</p>
        </a>

        <a href="vendas.html" class="dashboard-card" id="vendas">
            <h2 class="card-title">Vendas</h2>
            <p class="card-content">Acompanhe relatórios financeiros e histórico de transações</p>
        </a>

        <a href="categorias.html" class="dashboard-card" id="categorias">
            <h2 class="card-title">Categorias</h2>
            <p class="card-content">Organize suas categorias e subcategorias de produtos</p>
        </a>
    </div>
</body>
</html>