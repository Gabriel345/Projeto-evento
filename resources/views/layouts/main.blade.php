<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>@yield('title') </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">


                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create">Criar Eventos</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Meus Eventos</a>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Cadastrar</a>
                        </li>
                        @endguest
                </div>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget({
                rootPah: '/app',
                personalization: 'https://vlibras.gov.br/config/default_logo.json',
                opacity: 0.5,
                position: 'R',
                avatar: 'random',
            });
        </script>
    </main>
    <footer class="footer">
        <div class="footer-top">
            <div class="cont-footer">
                <div class="footer-brand">
                    <!-- <a href="#" class="logo">
                        <img src="./assets/img/logo(4)svg.svg" width="150" height="73" loading="lazy"
                        alt="Unigine logo">
                        </a> -->

                        <p class="footer-text">
                            Este é o nosso site do projeto integrador III se tudo der certo não repetiremos de ano.
                            Deus seja conosco, amém.
                        </p>
                        
                        <ul class="social-list">
                            
                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/fatectq" target=_blank class="social-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-youtube"></ion-icon>
                                </a>
                            </li>
                            
                        </ul>
                        
                    </div>

                    <div class="footer-list">

                        <p class="title footer-list-title has-after"> Link Usuário </p>
                        
                        <ul>
                            
                            <li>
                                <a href="#" class="footer-link"> Termos do Usuário </a>
                            </li>
                           
                            <li>
                                <a href="#" class="footer-link"> sei la  </a>
                            </li>
                            
                            <li>
                                <a href="#" class="footer-link"> sei la  </a>
                            </li>
                            
                            <li>
                                <a href="#" class="footer-link"> Contate-nos </a>
                            </li>
                            
                        </ul>
                        
                    </div>

                    <div class="footer-list">

                        <p class="title footer-list-title has-after"> Contato </p>
                        
                        <div class="contact-item">
                            <span class="span">Localização:</span>
                            
                            <address class="contact-link">
                                Av. Dr. Flávio Henrique Lemos, 585 Portal Itamaracá,
                                Taquaritinga/SP
                            </address>
                        </div>
                        
                        <div class="contact-item">
                            <span class="span"> Fale conosco: </span>
                            
                            <a href="mailto:Info@gamehive.com" class="contact-link"> Info@EB-events.com </a>
                        </div>

                        <div class="contact-item">
                            <span class="span"> Telefone: </span>
                            
                            <a href="tel:+12345678910" class="contact-link"> </a> (16) 4002-8922 </a>
                        </div>

                    </div>

                    
                </div>
            </div>

            <div class="footer-bottom">
            <div class="container-bottom">
                
                <p class="copyright">
                    &copy; 2023 EB events só gente boa.
                </p>
                
            </div>
        </div>

    </footer>
</body>

</html>