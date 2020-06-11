<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Keith-Personal Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/swiper.min.css">
    </head>
    <body>
        <div class="page-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top pt-3" style="display:none; background:white;">
                <a href="#" class="navbar-brand">Keith Winfield</a>
                <button id="button" class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a href="#" class="nav-link text-uppercase">home</a>
                    </li>
                    <li class="nav-item">
                    <a href="#services" class="nav-link text-uppercase">services</a>
                    </li>
                    <li class="nav-item">
                    <a href="#resume" class="nav-link text-uppercase">resume</a>
                    </li>
                    <li class="nav-item">
                    <a href="#work" class="nav-link text-uppercase">work</a>
                    </li>
                    <li class="nav-item">
                    <a href="#blog" class="nav-link text-uppercase">blog</a>
                    </li>
                </ul>
                </div>
            </nav>
            <div>
                @include('sections.home')
                @include('sections.about')
                @include('sections.services')
                @include('sections.resume')
                @include('sections.work')
                @include('sections.testimonial')

                
            </div>
            
        </div>
        <footer class="footer section section-light">
			<div class="container">
                <ul class="about-desc-social mt-4 mb-2 text-center">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-git"></i></a></li>
                </ul>
				<p class="copyright text-center mb-0">© Keith Winfield 2020 | All Right Reserved</p>
			</div>
		</footer>
    </body>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    
    <script src="/js/jquer.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/app.js"></script>
    

    <!-- Swiper JS -->
    <script src="/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    });
    </script>
</html>