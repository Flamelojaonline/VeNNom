<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeNNom Academy - O Futuro é Agora</title>
    <meta name="description" content="Loja de produtos digitais com tema cyberpunk. Cursos, e-books e assets virtuais.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/">
    <meta property="og:title" content="VeNNom Academy - O Futuro é Agora">
    <meta property="og:description" content="Loja de produtos digitais com tema cyberpunk. Cursos, e-books e assets virtuais.">
    <meta property="og:image" content="https://picsum.photos/seed/cyberpunk-hero/1200/630">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://example.com/">
    <meta property="twitter:title" content="VeNNom Academy - O Futuro é Agora">
    <meta property="twitter:description" content="Loja de produtos digitais com tema cyberpunk. Cursos, e-books e assets virtuais.">
    <meta property="twitter:image" content="https://picsum.photos/seed/cyberpunk-hero/1200/630">

    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>⚡</text></svg>">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">VeNNom Academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#products">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero text-center text-white">
            <div class="container">
                <h1 class="display-3">O Futuro é Digital</h1>
                <p class="lead">Explore nossa coleção de produtos virtuais, e-books e cursos para a nova era.</p>
                <a href="#products" class="btn btn-primary btn-lg mt-3">Ver Produtos</a>
            </div>
        </section>

        <!-- Featured Products Section -->
        <section id="products" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Produtos em Destaque</h2>
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="https://picsum.photos/seed/product1/600/600" class="card-img-top" alt="Capa de um livro digital de ficção científica.">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">E-book: Crônicas de Neo-Kyoto</h5>
                                <p class="card-text flex-grow-1">Uma jornada imersiva pelas ruas de uma metrópole do futuro.</p>
                                <p class="price">R$ 29,90</p>
                                <button class="btn btn-secondary mt-auto">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="https://picsum.photos/seed/product2/600/600" class="card-img-top" alt="Arte de um curso online sobre desenvolvimento de jogos.">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Curso: Design Cyberpunk</h5>
                                <p class="card-text flex-grow-1">Aprenda a criar visuais futuristas e interfaces neon.</p>
                                <p class="price">R$ 199,90</p>
                                <button class="btn btn-secondary mt-auto">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="https://picsum.photos/seed/product3/600/600" class="card-img-top" alt="Ícone de um pacote de assets virtuais.">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Pack: Assets 3D Sci-Fi</h5>
                                <p class="card-text flex-grow-1">Modelos 3D de alta qualidade para seus projetos de jogos ou animação.</p>
                                <p class="price">R$ 99,90</p>
                                <button class="btn btn-secondary mt-auto">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="https://picsum.photos/seed/product4/600/600" class="card-img-top" alt="Imagem representativa de um e-book sobre programação.">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">E-book: Código Quântico</h5>
                                <p class="card-text flex-grow-1">Desvende os segredos da programação da próxima geração.</p>
                                <p class="price">R$ 34,90</p>
                                <button class="btn btn-secondary mt-auto">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> VeNNom Academy. Todos os direitos reservados.</p>
            <p>
                <a href="#">Política de Privacidade</a> | <a href="#">Termos de Uso</a>
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>