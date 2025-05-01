<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brilho Elegante - Moda e Acessórios</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body data-page="home">
    <header>
        <div class="container">
            <nav>
                <div class="logo" onclick="confirmPageChange('home')" style="cursor: pointer;">
                    <span>Brilho</span><span>Elegante</span>
                    <img class="icone" src="Untitled.png" alt="Logo">
                </div>
                <script>
                    function confirmPageChange(page) {
                        // Logic to navigate to the section
                        document.body.setAttribute('data-page', page);

                        // Hide all sections
                        document.querySelectorAll('.page').forEach(section => {
                            section.classList.remove('active');
                        });

                        // Show the target section
                        const targetSection = document.getElementById(page);
                        if (targetSection) {
                            targetSection.classList.add('active');
                            window.scrollTo({
                                top: targetSection.offsetTop,
                                behavior: 'smooth'
                            });
                        }
                    }
                </script>
                <button class="hamburger" aria-label="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="menu">
                    <li><a href="#" data-page="tecnologia">Tecnologia</a></li>
                    <li><a href="#" data-page="roupas">Roupas</a></li>
                    <li><a href="#" data-page="semi-joias" class="active">Semi Joias</a></li>
                    <li><a href="#" data-page="contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Página Inicial -->
    <section id="home" class="page active">
        <div class="hero">
            <div class="hero-content">
                <h1>Semi Joias que Transformam seu Estilo</h1>
                <p>Descubra nossa coleção exclusiva de peças que combinam elegância e sofisticação</p>
                <a href="#semi-joias" data-page="semi-joias" class="btn btn-semi-joias" id="catalogo-btn">Ver Catálogo Completo</a>
            </div>
        </div>

        <div class="container">
            <h2 class="section-title title-semi-joias">Destaques da Coleção</h2>
            <div class="products">
                
                
                
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar_Ouro_Coracao_50,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Ouro</h3>
                        <p class="product-price price-semi-joias">R$ 64,80</p>
                        <p class="product-description">Colar de ouro com pingente de coracao.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/CorrentinhaDeOuro38,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Correntinha De Ouro</h3>
                        <p class="product-price price-semi-joias">R$ 38,00</p>
                        <p class="product-description">Correntinha De Ouro</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="pagination">
                <button class="pagination-btn prev" disabled>Anterior</button>
                <span class="page-info">Página <span class="current-page">1</span> de <span class="total-pages">5</span></span>
                <button class="pagination-btn next">Próximo</button>
            </div>
        </div>

    </section>

    <!-- Página de Semi Joias -->
    <section id="semi-joias" class="page">
        <div class="container">
            <h2 class="section-title title-semi-joias">Catálogo de Semi Joias</h2>
            
            <div class="category-filters filters-semi-joias">
                <button class="category-btn active" data-category="todos">Todos</button>
                <button class="category-btn" data-category="colares">Colares</button>
                <button class="category-btn" data-category="brincos">Brincos</button>
                <button class="category-btn" data-category="aneis">Anéis</button>
                <button class="category-btn" data-category="pulseiras">Pulseiras</button>
                <button class="category-btn" data-category="berloques">Berloques</button>
                <button class="category-btn" data-category="conjuntos">Conjuntos</button>
            </div>
            
            <div class="products">
                <!-- Colares -->
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Chocker_Prata_Pedras_Coloridas.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Chocker Prata Pedras Coloridas</h3>
                        <p class="product-price price-semi-joias">R$81,</p>
                        <p class="product-description">Colar com um pingente delicado de Menino</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
               
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Colar_Astronalta.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Pingente de Menino</h3>
                        <p class="product-price price-semi-joias">R$70,20</p>
                        <p class="product-description">Colar com um pingente delicado de Menino</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Colar_Atranalta_Mulher.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Pingente de Menina</h3>
                        <p class="product-price price-semi-joias">R$70,20</p>
                        <p class="product-description">Colar com um pingente delicado de Menina</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Colar_Coracao_Colorido.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Coracao</h3>
                        <p class="product-price price-semi-joias">R$81,00</p>
                        <p class="product-description">Colar com um pingente de coracao, com pedras coloridas</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Colar com Pingente de Coração Dourado.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar</h3>
                        <p class="product-price price-semi-joias">R$75,60</p>
                        <p class="product-description">Colar</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Coracao_Diamente_Pontilhado.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar</h3>
                        <p class="product-price price-semi-joias">R$91,80</p>
                        <p class="product-description">Colar com pingente de coracao cravejado com diamantes.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Colar_Ouro_Trevo_Preto_64,80.webp" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Dourado</h3>
                        <p class="product-price price-semi-joias">R$64,80</p>
                        <p class="product-description">Colar Ouro Trevo Preto</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Colar_Prata_Flor_Preta_64,80.webp" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Prata</h3>
                        <p class="product-price price-semi-joias">R$64,80</p>
                        <p class="product-description">Colar Prata Flor Preta</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/ColarIA/Colar_Rosa.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar</h3>
                        <p class="product-price price-semi-joias">R$43,20</p>
                        <p class="product-description">Colar Com Perolas Rosas</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/Colar/Colares_Diversos_A_Partir_de_43,90.jpg" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colares</h3>
                        <p class="product-price price-semi-joias">R$43,90</p>
                        <p class="product-description">Colares Diversos A Partir de 43,90</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/Colar/Colares_Diversos_A_Partir_de_43,90.jpg" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colares</h3>
                        <p class="product-price price-semi-joias">R$43,90</p>
                        <p class="product-description">Colares Diversos A Partir de 43,90</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
               
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/Colar/Colares_Rosa43,20_Colar_Borboleta_97,20.jpg" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colares</h3>
                        <p class="product-price price-semi-joias">R$43,90</p>
                        <p class="product-description">Colares Diversos A Partir de 43,90</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
               
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar_Coracao_Prata_48,00.jpg" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Coracao Prata </h3>
                        <p class="product-price price-semi-joias">R$48,00</p>
                        <p class="product-description">Colar Coracao Prata</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

       

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar_Gota_68,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar ouro com pingente de gota </h3>
                        <p class="product-price price-semi-joias">R$ 68,00</p>
                        <p class="product-description">Colar banhado a ouro com pingente de gota </p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar_Longo_Masculino_73,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Prata Longo Masculino</h3>
                        <p class="product-price price-semi-joias">R$ 73,00</p>
                        <p class="product-description">Colar Prata Longo Masculino</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar_Longo_Masculino_Ouro_68,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Longo Masculino Ouro </h3>
                        <p class="product-price price-semi-joias">R$ 68,00</p>
                        <p class="product-description">Colar Longo Masculino Ouro</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar_Ouro_Coracao_50,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Ouro Coracao</h3>
                        <p class="product-price price-semi-joias">R$ 50,00</p>
                        <p class="product-description">Colar banhado a Ouro com pingente de Coracao</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/colar_pai_nosso_busto 58,00.jpeg" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar de ouro Religioso </h3>
                        <p class="product-price price-semi-joias">R$ 58,00</p>
                        <p class="product-description">Colar banhado a ouro com pingente escrito a oracao do pai nosso</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/passarinho.jpg" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar de Prata </h3>
                        <p class="product-price price-semi-joias">R$ 53,00</p>
                        <p class="product-description">Colar Pingente Passarinho</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar_Prata_53,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Prata </h3>
                        <p class="product-price price-semi-joias">R$ 53,00</p>
                        <p class="product-description">Colar Prata </p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/ColarPrataLongo_53,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Prata Longo</h3>
                        <p class="product-price price-semi-joias">R$53,00</p>
                        <p class="product-description">Colar de Prata Longo</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/colarPrataMasculino 63,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar de Prata Masculino </h3>
                        <p class="product-price price-semi-joias">R$ 63,00</p>
                        <p class="product-description">colar de Prata Masculino </p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/CoracaoPrataOrigame 48,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar Prata Com pingente de Coracao</h3>
                        <p class="product-price price-semi-joias">R$ 48,00</p>
                        <p class="product-description">Colar Prata Com pingente de Coracao</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Corrente_Prata_Masculina_53,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Corrente Prata Masculina</h3>
                        <p class="product-price price-semi-joias">R$53,00</p>
                        <p class="product-description">Corrente Prata Masculina</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/CorrenteOuro 58,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Corrente de Ouro  </h3>
                        <p class="product-price price-semi-joias">R$ 58,00</p>
                        <p class="product-description">Corrente de Ouro</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/CorrentinhaDeOuro38,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Correntinha De Ouro</h3>
                        <p class="product-price price-semi-joias">R$ 38,00</p>
                        <p class="product-description">Correntinha De Ouro</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/CorrtentePrataEstrela 53,00.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Corrtente De Prata com Pingente de Estrela </h3>
                        <p class="product-price price-semi-joias">R$ 53,00</p>
                        <p class="product-description">Corrtente De Prata com Pingente de Estrela </p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/choker.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Gargantilha Folha De Ouro </h3>
                        <p class="product-price price-semi-joias">R$ 55,00</p>
                        <p class="product-description">Gargantilha Folha De Ouro</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
   
                
                
      
                    
                                              
                <div class="product-card" data-category="colares">
                    <div class="product-badge semi-joias">Novo</div>
                    <div class="product-image">
                        <img src="ImagemJoias/ColaresIA/Colar de Prata com Coração.png" alt="Colar Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Colar de Prata </h3>
                        <p class="product-price price-semi-joias">R$ 63,00</p>
                        <p class="product-description">Colar Pingente Coracao</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <!-- Brincos -->
                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/brinco-lua-com-zirconias-coloridas-banhado-a-ouro-18k.webp" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco banhado a ouro</h3>
                        <p class="product-price price-semi-joias">R$ 43,20</p>
                        <p class="product-description">brinco lua com zirconias coloridas banhado a ouro 18k<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_48,60.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">brinco </h3>
                        <p class="product-price price-semi-joias">R$ 48,60</p>
                        <p class="product-description">Brinco <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Argola_Barras_Pararelas_81,80.webp" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">brinco argola </h3>
                        <p class="product-price price-semi-joias">R$ 81,80</p>
                        <p class="product-description">Brinco Argola Barras Pararelas<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Argola_Cravejado_81,00.webp" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">brinco argola </h3>
                        <p class="product-price price-semi-joias">R$ 81,00</p>
                        <p class="product-description">Brinco Argola Cravejado <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Argola_Folhada_Ouro.webp" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">brinco argola ouro</h3>
                        <p class="product-price price-semi-joias">R$ 81,00</p>
                        <p class="product-description">Brinco Argola Folhada Ouro<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Com_Diamante_37,80.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco</h3>
                        <p class="product-price price-semi-joias">R$ 37,80</p>
                        <p class="product-description">Brinco Com Diamante <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Coracao_37,80.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">brinco Coracao</h3>
                        <p class="product-price price-semi-joias">R$ 37,80</p>
                        <p class="product-description">Brinco Coracao <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Coracao_Cravejado 43,20.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">brinco Coracao</h3>
                        <p class="product-price price-semi-joias">R$ 43,20</p>
                        <p class="product-description">Brinco Coracao Cravejado <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Coracao_Pedras_70,20.jpg" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco Coracao </h3>
                        <p class="product-price price-semi-joias">R$ 70,20</p>
                        <p class="product-description">Brinco Coracao Pedras <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Coracao_Pedras_Coloridas_81.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco Coracao</h3>
                        <p class="product-price price-semi-joias">R$ 81,00</p>
                        <p class="product-description">Brinco Coracao Pedras Coloridas<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Masculino_Diamante_37,80.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco Masculino</h3>
                        <p class="product-price price-semi-joias">R$ 37,80</p>
                        <p class="product-description">Brinco Masculino Diamante<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Ouro_Com_Diamante_64,80.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">>Brinco Ouro Com Diamante</h3>
                        <p class="product-price price-semi-joias">R$64,80</p>
                        <p class="product-description">Brinco Ouro Com Diamante <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Pedras_18,90.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco Pedras</h3>
                        <p class="product-price price-semi-joias">R$ 18,90</p>
                        <p class="product-description">Brinco Pedras <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Prata_64,80.jpg" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco Prata</h3>
                        <p class="product-price price-semi-joias">R$ 64,80</p>
                        <p class="product-description">Brinco Prata<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Prata_Com_Pedras64,80.webp" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco Prata Pedras</h3>
                        <p class="product-price price-semi-joias">R$ 59,40</p>
                        <p class="product-description">Brinco Prata Pedras<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/Brinco_Ruby_32,40.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco Ruby</h3>
                        <p class="product-price price-semi-joias">R$ 32,40</p>
                        <p class="product-description">Brinco_Ruby <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="JoiasLeticia/BrincosIA/BrincoQuadrado.png" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brinco</h3>
                        <p class="product-price price-semi-joias">R$ 48,60</p>
                        <p class="product-description">Brinco <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>


                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="ImagemJoias/brincos/brinco_ouro_busto.jpeg" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">brinco argola ouro</h3>
                        <p class="product-price price-semi-joias">R$ 8,00</p>
                        <p class="product-description">Brincos a partir de R$8,00 <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>


                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="ImagemJoias/Brinco2/Brincos_A_Partir_De_8,00.jpg" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brincos</h3>
                        <p class="product-price price-semi-joias">R$ 8,00</p>
                        <p class="product-description">Brincos a partir de R$8,00 <ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="ImagemJoias/Brinco2/Brincos_A_Partir_De_8,02.jpg" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brincos</h3>
                        <p class="product-price price-semi-joias">R$ 8,00</p>
                        <p class="product-description">>Brincos a partir de R$8,00<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="ImagemJoias/Brinco2/Brincos_A_Partir_De_8,03.jpg" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brincos</h3>
                        <p class="product-price price-semi-joias">R$ 8,00</p>
                        <p class="product-description">Brincos a partir de R$8,00<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="brincos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="ImagemJoias/Brinco2/Brincos_a_Partir_De_8,01.jpg" alt="Brincos Prateados">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Brincos</h3>
                        <p class="product-price price-semi-joias">R$ 8,00</p>
                        <p class="product-description">Brincos a partir de R$8,00<ruby></ruby></p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                

  
        
                
       
                <!-- Anéis -->

                <div class="product-card" data-category="aneis">
                    <div class="product-image">
                        <img src="ImagemJoias/Anel2/Aneis_A_Partir_De_40,00.jpg" alt="Anel Zirconia">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Aneis Diversos</h3>
                        <p class="product-price price-semi-joias">R$ 40,00</p>
                        <p class="product-description">Diversos aneis apartir de 40,00</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="aneis">
                    <div class="product-image">
                        <img src="JoiasLeticia/Aneis/Aneis_A_Partir_De_39,00.jpg" alt="Anel Zirconia">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Aneis Diversos</h3>
                        <p class="product-price price-semi-joias">R$ 40,00</p>
                        <p class="product-description">Diversos aneis apartir de 40,00</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>


                <div class="product-card" data-category="aneis">
                    <div class="product-image">
                        <img src="ImagemJoias/Anel2/Aneis_A_Partir_De_40,01.jpg" alt="Anel Zirconia">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Aneis Diversos</h3>
                        <p class="product-price price-semi-joias">R$ 40,00</p>
                        <p class="product-description">Diversos aneis apartir de 40,00</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

       
                
                <!-- Pulseiras -->
                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/PulseirasIA/Pulseira de Pedras Coloridas_48,80.png" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseira com Pedras</h3>
                        <p class="product-price price-semi-joias">R$ 48,80</p>
                        <p class="product-description">Pulseira com Pedras Coloridas</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/PulseirasIA/Pulseira_Cravejada.png" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas</h3>
                        <p class="product-price price-semi-joias">R$ 43,00</p>
                        <p class="product-description">Pulseiras Diversas a partir de:R$ 43,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/PulseirasIA/Pulseira_Prata_Pedras_81,00.png" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseira Prata </h3>
                        <p class="product-price price-semi-joias">R$ 81,00</p>
                        <p class="product-description">Pulseira de Prata com Pedras Diversas</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/PulseirasIA/Pulseiras_Perolas_64,80.png" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Perolas</h3>
                        <p class="product-price price-semi-joias">R$ 64,80</p>
                        <p class="product-description">Pulseiras de Perolas.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/PulseirasIA/Pulsiera_97,20.png" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras </h3>
                        <p class="product-price price-semi-joias">R$ 97,20</p>
                        <p class="product-description">Pulseiras</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/PulseirasIA/Colar_Coracoes_81,00.png" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseira Coracao </h3>
                        <p class="product-price price-semi-joias">R$ 81,00</p>
                        <p class="product-description">Pulseiras</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/Pulseiras/Pulseiras_A_Partir_de_43,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas</h3>
                        <p class="product-price price-semi-joias">R$ 43,00</p>
                        <p class="product-description">Pulseiras Diversas a partir de:R$ 43,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="JoiasLeticia/Pulseiras/Pulseiras_A_Partir_de_44,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas</h3>
                        <p class="product-price price-semi-joias">R$ 43,00</p>
                        <p class="product-description">Pulseiras Diversas a partir de:R$ 43,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="ImagemJoias/Pulseira/Pulseiras_A_Partir_de_43,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas</h3>
                        <p class="product-price price-semi-joias">R$ 43,00</p>
                        <p class="product-description">Pulseiras Diversas a partir de:R$ 43,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="ImagemJoias/Pulseira/Pulseiras_Ouro_A_Partir_de_40,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas</h3>
                        <p class="product-price price-semi-joias">R$ 40,00</p>
                        <p class="product-description">Pulseiras Diversas a partir de:R$ 40,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="ImagemJoias/Pulseira/Pulseiras_Ouro_A_Partir_de_43,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas</h3>
                        <p class="product-price price-semi-joias">R$ 43,00</p>
                        <p class="product-description">Pulseiras Diversas a partir de:R$ 43,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="ImagemJoias/Pulseira/Pulseiras_Prata_A_Partir_De_48,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas:</h3>
                        <p class="product-price price-semi-joias">R$  48,00</p>
                        <p class="product-description">Pulseiras Diversas a partir de:R$ 48,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

 
                
                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="ImagemJoias/Pulseira/Tornozeleiras_E_Pulseiras_A_Partir_de_43,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Tornozeleiras e Pulseiras Infantil</h3>
                        <p class="product-price price-semi-joias">R$ 43,00</p>
                        <p class="product-description">Tornozeleiras e Pulseiras Infantil a partir de R43,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>


               
                <div class="product-card" data-category="pulseiras">
                    <div class="product-image">
                        <img src="ImagemJoias/Pulseira/Tornozeleiras_E_PulseirasInfantil_A_Partir_de_33,00.jpg" alt="Pulseira Dupla">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pulseiras Diversas a partir de:</h3>
                        <p class="product-price price-semi-joias">R$ 33,00</p>
                        <p class="product-description">Tornozeleiras e Pulseiras Infantil a partir de R$33,00.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                

                
                <!-- Berloques -->
     
    
                <div class="product-card" data-category="berloques">
                    <div class="product-image">
                        <img src="JoiasLeticia/BerloquesIA/Berloque_Baton.png"alt="Berloque Letra">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Berloque </h3>
                        <p class="product-price price-semi-joias">R$ 43,20</p>
                        <p class="product-description">Berloque pingente Batom.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="berloques">
                    <div class="product-image">
                        <img src="JoiasLeticia/BerloquesIA/Berloque_Coracao_Brilhante.png"alt="Berloque Letra">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Berloque </h3>
                        <p class="product-price price-semi-joias">R$ 43,20</p>
                        <p class="product-description">Berloque pingente Coracao.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="berloques">
                    <div class="product-image">
                        <img src="JoiasLeticia/BerloquesIA/Berloque_Pulseira.png"alt="Berloque Letra">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Berloque </h3>
                        <p class="product-price price-semi-joias">R$ 54,00</p>
                        <p class="product-description">Berloque pingente Estrela.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="berloques">
                    <div class="product-image">
                        <img src="JoiasLeticia/Berloques/Berloque_Marge_43,20.jpg"alt="Berloque Letra">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Berloque </h3>
                        <p class="product-price price-semi-joias">R$ 43,20</p>
                        <p class="product-description">Berloque pingente Marge.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="berloques">
                    <div class="product-image">
                        <img src="JoiasLeticia/BerloquesIA/Berloque_Pezinho.png"alt="Berloque Letra">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Berloque </h3>
                        <p class="product-price price-semi-joias">R$ 54,00</p>
                        <p class="product-description">Berloque pingente Pezinhos.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>

         

                <!-- Conjuntos -->
                <div class="product-card" data-category="conjuntos">
                    <div class="product-badge semi-joias">Promoção</div>
                    <div class="product-image">
                        <img src="ImagemJoias/IAS/ChatGPT Image 8 de abr. de 2025, 13_37_08.png" alt="Conjunto Dourado">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Dourado Complete</h3>
                        <p class="product-price price-semi-joias">
                            <span class="product-old-price">R$ 399,90</span>
                            R$ 299,90
                        </p>
                        <p class="product-description">Conjunto com colar, pulseira e brincos banhados a ouro.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-semi-joias btn-whatsapp">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-semi-joias">Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <button class="pagination-btn prev" disabled>Anterior</button>
                <span class="page-info">Página <span class="current-page">1</span> de <span class="total-pages">5</span></span>
                <button class="pagination-btn next">Próximo</button>
            </div>
        </div>
    </section>

    <!-- Página de Roupas -->
    <section id="roupas" class="page">
        <div class="hero-roupas">
            <div class="hero-roupas-content">
                <h1>Moda para Todos os Estilos</h1>
                <p>Descubra looks incríveis que combinam com sua personalidade</p>
            </div>
        </div>

        <div class="container">
            <h2 class="section-title title-roupas">Nossa Coleção de Roupas</h2>
            
            <div class="category-filters clothing-filters">
                <button class="category-btn active" data-category="todos">Todos</button>
                <button class="category-btn" data-category="mulher">Feminino</button>
                <button class="category-btn" data-category="homem">Masculino</button>
                <button class="category-btn" data-category="crianca">Infantil</button>
            </div>
            
            <!-- Página 1 -->
            <div class="products page-1 active">
                <!-- Roupas Femininas -->
                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/17,99 .jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 35,99</span>
                            R$ 17,99
                        </p>
                        <p class="product-description">Lingerie.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>


                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/TopNike49,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Top Nike</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 55,99</span>
                            R$ 49,99
                        </p>
                        <p class="product-description">Top Nike.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/top54,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Top</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 65,99</span>
                            R$ 54,99
                        </p>
                        <p class="product-description">Top.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/sutiãSemBojo32,99.jpg "alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sutiã Sem Bojo</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 45,99</span>
                            R$ 32,99
                        </p>
                        <p class="product-description">Sutiã Sem Bojo.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/Sutiã62,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sutiã</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 62,99
                        </p>
                        <p class="product-description">Sutiã.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/Pijamas69,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pijamas</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 69,99
                        </p>
                        <p class="product-description">Pijamas.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/PijamaBobEsponja 49,99.jpg "alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pijama BobEsponja</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 65,99</span>
                            R$ 49,99
                        </p>
                        <p class="product-description">Pijama BobEsponja.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/Pijama64,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pijama64</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 64,99
                        </p>
                        <p class="product-description">Pijama64.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoPijama69,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Pijama</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 69,99
                        </p>
                        <p class="product-description">Conjunto Pijama.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>


                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoPijama54,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Pijama</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 65,99</span>
                            R$ 54,99
                        </p>
                        <p class="product-description">Conjunto Pijama.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoPijama49,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Pijama</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 65,99</span>
                            R$ 49,99
                        </p>
                        <p class="product-description">Conjunto Pijama.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoPijama49,98.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Pijama</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 55,99</span>
                            R$  49,99
                        </p>
                        <p class="product-description">Conjunto Pijama.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoPijama49,97.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Pijama</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 55,99</span>
                            R$  49,99
                        </p>
                        <p class="product-description">Conjunto Pijama.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoPijama49,96.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Pijama</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 64,99
                        </p>
                        <p class="product-description">Conjunto Pijama.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoNikeAcademia.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Nike Academia</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 95,99</span>
                            R$ 89,99
                        </p>
                        <p class="product-description">Conjunto Nike Academia.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/ConjuntoCalvinKlein74,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">/Conjunto CalvinKlein</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 85,99</span>
                            R$ 74,99
                        </p>
                        <p class="product-description">/Conjunto Calvin-Klein.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/Conjunto79,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 85,99</span>
                            R$ 79,99
                        </p>
                        <p class="product-description">Conjunto.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/Conjunto79,98.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 85,99</span>
                            R$ 79,98
                        </p>
                        <p class="product-description">Conjunto.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/Conjunto69,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 69,99
                        </p>
                        <p class="product-description">Conjunto.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/conjunto64,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 64,99
                        </p>
                        <p class="product-description">conjunto.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/CojuntoSemBojoCalvinKlein44,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cojunto CalvinKlein</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 44,99
                        </p>
                        <p class="product-description">Cojunto Sem Bojo Calvin-Klein.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/BiquiniPP59,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Biquini</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 75,99</span>
                            R$ 59,99
                        </p>
                        <p class="product-description">Biquini-PP</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/BabyDoll79,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">BabyDoll</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 85,99</span>
                            R$79,99
                        </p>
                        <p class="product-description">BabyDoll.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/BabyDoll59,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">BabyDoll</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 65,99</span>
                            R$ 59,99
                        </p>
                        <p class="product-description">BabyDoll.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina3/BabtDoll59,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">BabyDoll</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 65,99</span>
                            R$ 59,99
                        </p>
                        <p class="product-description">BabyDoll.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>
               
                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/17,99 .jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 35,99</span>
                            R$ 17,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/18,00.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 27,99</span>
                            R$ 17,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/18,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 30,00</span>
                            R$ 18,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/21,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 30,00</span>
                            R$ 21,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/22,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 32,99</span>
                            R$ 22,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/23,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 33,99</span>
                            R$ 23,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinha 19,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 29,99</span>
                            R$ 19,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinha ck 16,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie calvin klein</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 26,99</span>
                            R$ 16,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinha emoji 19,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie Emojis</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 23,99</span>
                            R$ 19,99
                        </p>
                        <p class="product-description">Lingerie Emojis</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/CALCINHA17,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 19,99</span>
                            R$ 17,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinha17,99Fio dental.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie Fio Dental</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 21,99</span>
                            R$ 17,99
                        </p>
                        <p class="product-description">Lingerie Fio Denta.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/Calcinha18,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 21,99</span>
                            R$ 18,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinha21,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 24,99</span>
                            R$ 21,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinha22,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 32,99</span>
                            R$ 22,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinha24,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 27,99</span>
                            R$ 24,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/calcinhaplayboy 19,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha playboy</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 30,99</span>
                            R$ 19,99
                        </p>
                        <p class="product-description">Calcinha playboy.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/CK28,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie Calvin Klein</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 38,99</span>
                            R$ 28,99
                        </p>
                        <p class="product-description">Lingerie Calvin Klein.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/Conjunto 49,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$  59,99</span>
                            R$ 49,99
                        </p>
                        <p class="product-description">Conjunto</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/lg17,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lingerie</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 22,99</span>
                            R$ 17,99
                        </p>
                        <p class="product-description">Lingerie</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminina/TOP FItness 54,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Top Fitness</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 54,99
                        </p>
                        <p class="product-description">Top Fitness</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Ca21,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 21,99
                        </p>
                        <p class="product-description">Calcinha</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/cal17,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 17,99
                        </p>
                        <p class="product-description">Calcinha</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/calcinha15,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 15,99
                        </p>
                        <p class="product-description">Calcinha</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Calcinha16,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 16,99
                        </p>
                        <p class="product-description">Calcinha</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Calcinha19,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 19,99
                        </p>
                        <p class="product-description">Calcinha</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Calcinha25,00.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 25,00
                        </p>
                        <p class="product-description">Calcinha</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/calcinhavovo29,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 29,99
                        </p>
                        <p class="product-description">Calcinha</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/cinta suplex 29,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">cinta suplex</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 34,99</span>
                            R$ 29,99
                        </p>
                        <p class="product-description">cinta suplex</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/conjunto69,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">cinta suplex</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 74,99</span>
                            R$ 69,99
                        </p>
                        <p class="product-description">cinta suplex</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/conjunto74,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Feminino</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 84,99</span>
                            R$ 74,99
                        </p>
                        <p class="product-description">Conjunto Feminino.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/conjunto75,00.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Feminino</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 84,99</span>
                            R$ 75,00
                        </p>
                        <p class="product-description">Conjunto Feminino</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Conjunto79,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 84,99</span>
                            R$ 79,99
                        </p>
                        <p class="product-description">Conjunto</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Conjunto84,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 94,99</span>
                            R$ 84,99
                        </p>
                        <p class="product-description">Conjunto Feminino</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/ConjuntoJuveni 44,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Juvenil</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 54,99</span>
                            R$ 44,99
                        </p>
                        <p class="product-description">Conjunto Juvenil</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/ConjuntoJuvenilCalvinKlein44,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Conjunto Juvenil Calvin Klein</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 54,99</span>
                            R$ 44,99
                        </p>
                        <p class="product-description">Conjunto Juvenil Calvin Klein</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/meias 27,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Meias</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 44,99</span>
                            R$ 27,99
                        </p>
                        <p class="product-description">Meias</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/superior54,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Top</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 54,99
                        </p>
                        <p class="product-description">Top</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Superior69,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Top</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 84,99</span>
                            R$ 69,99
                        </p>
                        <p class="product-description">Top</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/sutia54,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sutiã</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 54,99
                        </p>
                        <p class="product-description">Sutiã</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Sutia59,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sutiã</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 59,99
                        </p>
                        <p class="product-description">Sutiã</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/Sutia60,00.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sutiã</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 60,00
                        </p>
                        <p class="product-description">Sutiã</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/sutian49,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sutiã</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 49,99
                        </p>
                        <p class="product-description">Sutiã</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/TOP54,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Top</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 64,99</span>
                            R$ 54,99
                        </p>
                        <p class="product-description">Top</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="mulher">
                    <div class="product-badge mulher">Feminino</div>
                    <div class="product-image">
                        <img src="Roupas/Feminia2/top69,99.jpg" alt="Vestido Floral">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Top</h3>
                        <p class="product-price price-roupas">
                            <span class="product-old-price">R$ 74,99</span>
                            R$ 69,99
                        </p>
                        <p class="product-description">Top</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-roupas">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline-roupas">Detalhes</a>
                        </div>
                    </div>
                </div>
                <!-- Roupas Masculinas -->
                <div class="product-card" data-category="homem">
                    <div class="product-badge homem">Masculino</div>
                    <div class="product-image">
                        <img src="Roupas/Masculina/CucasTommy27,99.jpg" alt="Camisa Social">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cueca Tommy Hilfiger</h3>
                        <p class="product-price price-tech">R$ 27,99</p>
                        <p class="product-description">Cueca replica perfeita Tommy Hilfiger.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-tech">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="homem">
                    <div class="product-badge homem">Masculino</div>
                    <div class="product-image">
                        <img src="Roupas/Masculina/Cuecas 28,99.jpg" alt="Camisa Social">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">CuecaS</h3>
                        <p class="product-price price-tech">R$ 28,99</p>
                        <p class="product-description">Cueca tecido confortavel e resistente.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-tech">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="homem">
                    <div class="product-badge homem">Masculino</div>
                    <div class="product-image">
                        <img src="Roupas/Masculina/SAMBA cancao 37,99.jpg"alt="Camisa Social">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Samba Cancao</h3>
                        <p class="product-price price-tech">R$ 37,99</p>
                        <p class="product-description">Samba cancao para otimo para dormir.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-tech">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="homem">
                    <div class="product-badge homem">Masculino</div>
                    <div class="product-image">
                        <img src="Roupas/Masculina/SM 37,99.jpg" alt="Camisa Social">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Samba Cancao</h3>
                        <p class="product-price price-tech">R$ 37,99</p>
                        <p class="product-description">Samba cancao para otimo para dormir</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-tech">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="homem">
                    <div class="product-badge homem">Masculino</div>
                    <div class="product-image">
                        <img src="Roupas/Masculina2/CuecaDiferente27,99.jpg" alt="Camisa Social">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cueca Masculina</h3>
                        <p class="product-price price-tech">R$ 27,99</p>
                        <p class="product-description">Cueca confortalve com otimo tecido</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-tech">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="homem">
                    <div class="product-badge homem">Masculino</div>
                    <div class="product-image">
                        <img src="Roupas/Masculina2/Meia10,99.jpg" alt="Camisa Social">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Meias</h3>
                        <p class="product-price price-tech">R$ 10,99</p>
                        <p class="product-description">Meias confortaveis e resistentes</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small btn-tech">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline">Detalhes</a>
                        </div>
                    </div>
                </div>
                <!-- Roupas Infantis -->
                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/infantil/14,99 calcinha .jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha Infantil </h3>
                        <p class="product-price" style="color: #00B894;">R$ 14,99</p>
                        <p class="product-description">Calcinha Infantil.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/Infantil2/Camisola49,99.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Camisola </h3>
                        <p class="product-price" style="color: #00B894;">R$ 49,99</p>
                        <p class="product-description">Camisola.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/infantil/14,99 calcinha.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha Infantil </h3>
                        <p class="product-price" style="color: #00B894;">R$ 14,99</p>
                        <p class="product-description">Calcinha Infantil.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/infantil/calcinha 21,99.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha Infantil </h3>
                        <p class="product-price" style="color: #00B894;">R$  21,99</p>
                        <p class="product-description">Calcinha Infantil.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/infantil/calcinha22,00.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Calcinha Infantil </h3>
                        <p class="product-price" style="color: #00B894;">R$ 22,00</p>
                        <p class="product-description">Calcinha Infantil.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/infantil/cueca Infantil16,99.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cueca Infantil </h3>
                        <p class="product-price" style="color: #00B894;">R$ 16,99</p>
                        <p class="product-description">Cueca Infantil.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/infantil/stich22,99.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Roupas Infantil  </h3>
                        <p class="product-price" style="color: #00B894;">R$ 22,99</p>
                        <p class="product-description">Cueca Infantil.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="crianca">
                    <div class="product-badge crianca">Infantil</div>
                    <div class="product-image">
                        <img src="Roupas/Infantil2/Desenhos11,99.jpg" alt="Conjunto Infantil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Roupas Infantil  </h3>
                        <p class="product-price" style="color: #00B894;">R$ 11,99</p>
                        <p class="product-description">Calcinha Infantil Desenhos.</p>
                        <div class="product-actions">
                            <a href="#" class="btn btn-small" style="background-color: #00B894;">Comprar</a>
                            <a href="#" class="btn btn-small btn-outline" style="border-color: #00B894; color: #00B894;">Detalhes</a>
                        </div>
                    </div>
                </div>
                </div>

                 

            
            <div class="pagination">
                <button class="pagination-btn prev" disabled>Anterior</button>
                <span class="page-info">Página <span class="current-page">1</span> de <span class="total-pages">2</span></span>
                <button class="pagination-btn next">Próximo</button>
            </div>
    </section>

    <!-- Página de Tecnologia -->
    <section id="tecnologia" class="page">
        <?php include('Scriptphp/produtos_consulta.php'); ?>
    </section>

    <!-- Página de Contato -->
    <section id="contato" class="page">
        <div class="container">
            <h2 class="section-title title-semi-joias">Entre em Contato</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 40px;">
                <div class="contact-card">
                    <div class="contact-icon icon-semi-joias">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>Instagram</h3>
                    <a href="https://www.instagram.com/brilho_elegante1/" target="_blank">@brilho_elegante1</a>
                    <p style="margin-top: 10px;">Siga-nos para novidades e promoções exclusivas!</p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon icon-semi-joias">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp</h3>
                    <a href="https://wa.me/+5514998053785" target="_blank">(14)99805-3785</a>
                    <p style="margin-top: 10px;">Atendimento personalizado e rápido pelo WhatsApp.</p>
                </div>

 
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Sobre Nós</h3>
                    <p>Brilho Elegante traz as melhores semi joias e moda com qualidade e design exclusivo para valorizar seu estilo.</p>
                </div>
                <div class="footer-column">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="#" data-page="home">Home</a></li>
                        <li><a href="#" data-page="tecnologia">Tecnologia</a></li>
                        <li><a href="#" data-page="roupas">Roupas</a></li>
                        <li><a href="#" data-page="semi-joias">Semi Joias</a></li>
                        <li><a href="#" data-page="contato">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contato</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i><a href="whatsapp://send?phone=5514998053785"> (14)99805-3785</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> Bauru - SP</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Redes Sociais</h3>
                    <div class="social-links">
                        <a href="https://www.instagram.com/brilho_elegante1/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/5514998053785" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Brilho Elegante. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>