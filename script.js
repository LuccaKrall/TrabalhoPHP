
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('DOMContentLoaded', function () {
const slides = document.querySelectorAll('.carousel-slide');
const prevButton = document.querySelector('.carousel-prev');
const nextButton = document.querySelector('.carousel-next');
let currentSlide = 0;

function showSlide(index) {
slides.forEach((slide, i) => {
    slide.classList.remove('active');
    if (i === index) {
        slide.classList.add('active');
    }
});
}

function nextSlide() {
currentSlide = (currentSlide + 1) % slides.length;
showSlide(currentSlide);
}

function prevSlide() {
currentSlide = (currentSlide - 1 + slides.length) % slides.length;
showSlide(currentSlide);
}

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

// Navegar para a seção correspondente ao clicar no botão
document.querySelectorAll('.carousel-slide .btn').forEach(button => {
button.addEventListener('click', function (e) {
    e.preventDefault();
    const pageId = this.getAttribute('data-page');
    document.body.setAttribute('data-page', pageId);

    // Esconder todas as páginas
    document.querySelectorAll('.page').forEach(page => {
        page.classList.remove('active');
    });

    // Mostrar a página correspondente
    const targetPage = document.getElementById(pageId);
    if (targetPage) {
        targetPage.classList.add('active');
        window.scrollTo({
            top: targetPage.offsetTop,
            behavior: 'smooth'
        });
    }
});
});

// Iniciar o carrossel automaticamente
setInterval(nextSlide, 5000); // Troca de slide a cada 5 segundos
});
            document.getElementById('catalogo-btn').addEventListener('click', function(e) {
    e.preventDefault();
    showPage('semi-joias');
            
            // Scroll suave para o topo da seção
    window.scrollTo({
            top: document.getElementById('semi-joias').offsetTop,
    behavior: 'smooth'
      });
    }       );

    // Elementos do menu mobile
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu');
    const navLinks = document.querySelectorAll('nav a[data-page], footer a[data-page]');
    
    // Função para fechar o menu mobile
    function closeMobileMenu() {
        hamburger.classList.remove('active');
        menu.classList.remove('active');
        const overlay = document.querySelector('.menu-overlay');
        if(overlay) overlay.remove();
    }
    
    // Abrir/fechar menu hamburguer
    if(hamburger && menu) {
        hamburger.addEventListener('click', function(e) {
            e.stopPropagation();
            this.classList.toggle('active');
            menu.classList.toggle('active');
            
            // Criar ou remover overlay
            let overlay = document.querySelector('.menu-overlay');
            if(!overlay) {
                overlay = document.createElement('div');
                overlay.className = 'menu-overlay';
                document.body.appendChild(overlay);
                
                overlay.addEventListener('click', closeMobileMenu);
            } else {
                overlay.remove();
            }
        });
    }
    
    // Navegação entre páginas
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            closeMobileMenu();
            
            const pageId = this.getAttribute('data-page');
            showPage(pageId);
        });
    });
    
    // Função para mostrar a página selecionada
    function showPage(pageId) {
        // Atualizar atributo no body
        document.body.setAttribute('data-page', pageId);
        
        // Esconder todas as páginas
        document.querySelectorAll('.page').forEach(page => {
            page.classList.remove('active');
        });
        
        // Mostrar página selecionada
        const targetPage = document.getElementById(pageId);
        if(targetPage) {
            targetPage.classList.add('active');
            
            // Scroll suave para o topo
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        
        // Atualizar link ativo no menu
        menuLinks.forEach(link => {
            link.classList.remove('active');
            if(link.getAttribute('data-page') === pageId) {
                link.classList.add('active');
            }
        });
    }
    
    // Configuração do WhatsApp
    const whatsappNumber = '5514998053785';
const defaultMessage = "Olá, gostaria de comprar este produto do Brilho Elegante:";

document.querySelectorAll('.btn-semi-joias,.btn-roupas').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const productCard = this.closest('.product-card');
        if(productCard) {
            const productName = productCard.querySelector('.product-title').textContent;
            const productPrice = productCard.querySelector('.product-price').textContent;
            const productImage = productCard.querySelector('.product-image img');
            const imageUrl = productImage ? productImage.src : '';
            
            let message = `${defaultMessage}%0A%0A*${encodeURIComponent(productName)}*%0A`;
            message += `*Preço:* ${encodeURIComponent(productPrice)}%0A`;
            message += `*Imagem do produto:* ${encodeURIComponent(imageUrl)}%0A%0A`;
            message += "Por favor, me informe as formas de pagamento e prazo de entrega.";
            
            window.open(`https://wa.me/${whatsappNumber}?text=${message}`, '_blank');
        }
    });
});
    
    // Filtros de categoria para semi joias
    const semiJoiasFilters = document.querySelectorAll('#semi-joias .category-btn');
    const semiJoiasProducts = document.querySelectorAll('#semi-joias .product-card');
    
    if(semiJoiasFilters.length > 0) {
        semiJoiasFilters.forEach(btn => {
            btn.addEventListener('click', function() {
                semiJoiasFilters.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-category');
                
                semiJoiasProducts.forEach(product => {
                    product.style.display = (filter === 'todos' || product.getAttribute('data-category') === filter) 
                        ? 'block' 
                        : 'none';
                });
                
                // Verificar se há resultados
                const visibleProducts = document.querySelectorAll('#semi-joias .product-card[style="display: block;"]');
                const noResults = document.querySelector('#semi-joias .no-results');
                
                if(visibleProducts.length === 0 && !noResults) {
                    const container = document.querySelector('#semi-joias .products');
                    const message = document.createElement('div');
                    message.className = 'no-results';
                    message.textContent = 'Nenhum produto encontrado nesta categoria.';
                    container.appendChild(message);
                } else if(noResults && visibleProducts.length > 0) {
                    noResults.remove();
                }
            });
        });
    }
    
    // Paginação e filtros para roupas
    const clothingFilters = document.querySelectorAll('#roupas .category-btn');
    const clothingProducts = document.querySelectorAll('#roupas .product-card');
    const productsPerPage = 12;
    let currentFilter = 'todos';
    let currentPage = 1;
    
    if(clothingFilters.length > 0) {
        // Função para atualizar a exibição dos produtos
        function updateClothingDisplay() {
            // Filtrar produtos
            const filtered = Array.from(clothingProducts).filter(product => {
                return currentFilter === 'todos' || product.getAttribute('data-category') === currentFilter;
            });
            
            // Calcular páginas
            const totalPages = Math.ceil(filtered.length / productsPerPage);
            document.querySelector('#roupas .total-pages').textContent = totalPages;
            
            // Esconder todos os produtos
            clothingProducts.forEach(p => p.style.display = 'none');
            
            // Mostrar produtos da página atual
            const start = (currentPage - 1) * productsPerPage;
            const end = start + productsPerPage;
            
            filtered.slice(start, end).forEach(product => {
                product.style.display = 'block';
            });
            
            // Atualizar controles de paginação
            document.querySelector('#roupas .current-page').textContent = currentPage;
            document.querySelector('#roupas .prev').disabled = currentPage === 1;
            document.querySelector('#roupas .next').disabled = currentPage >= totalPages;
            
            // Verificar se há resultados
            const visible = document.querySelectorAll('#roupas .product-card[style="display: block;"]');
            const noResults = document.querySelector('#roupas .no-results');
            
            if(visible.length === 0 && !noResults) {
                const container = document.querySelector('#roupas .products');
                const message = document.createElement('div');
                message.className = 'no-results';
                message.textContent = 'Nenhum produto encontrado.';
                container.appendChild(message);
            } else if(noResults && visible.length > 0) {
                noResults.remove();
            }
        }
        
        // Eventos dos filtros
        clothingFilters.forEach(btn => {
            btn.addEventListener('click', function() {
                clothingFilters.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentFilter = this.getAttribute('data-category');
                currentPage = 1;
                updateClothingDisplay();
            });
        });
        
        // Eventos da paginação
        document.querySelector('#roupas .prev').addEventListener('click', function() {
            if(currentPage > 1) {
                currentPage--;
                updateClothingDisplay();
            }
        });
        
        document.querySelector('#roupas .next').addEventListener('click', function() {
            const totalPages = Math.ceil(
                Array.from(clothingProducts).filter(p => 
                    currentFilter === 'todos' || p.getAttribute('data-category') === currentFilter
                ).length / productsPerPage
            );
            
            if(currentPage < totalPages) {
                currentPage++;
                updateClothingDisplay();
            }
        });
        
        // Inicializar
        updateClothingDisplay();
    }
    
    // Inicializar página correta
    const initialPage = document.body.getAttribute('data-page') || 'home';
    showPage(initialPage);
});
        document.querySelector('.btn-semi-joias').addEventListener('click', function(e) {
    e.preventDefault();
    console.log('Botão clicado, página:', this.getAttribute('data-page'));
    showPage(this.getAttribute('data-page'));
});
    