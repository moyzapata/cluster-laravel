<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cluster</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
	<header class="navbar">
        <a class="nose" href="{{ url('/') }}">
            <img src="../assets/images/logo.png" style="width: 120px; height: 50px;" />
        </a>
		<nav>
        @if (Route::has('login'))
			<ul class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="btn btn-outline-light">Home</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-outline-light">Iniciar sesión</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-light">Registrarse</a>
            @endif
            @endauth
			</ul>
        @endif
		</nav>
	</header>

	<div class="contenido-header">
		<div class="fondo" id="fondo">
			<h1 class="texto">Cluster</h1>
		</div>
	</div>
    <br>
	<main class="container">
		

		<div class="row productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>Ques es integrador</span></h2>
				<p class="titulo">qUE ES INTEGRADOR?</p>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
			</article>

			</div>
		</div>
	</main>

	<div class="separador text-center text-white">
		<p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eligendi</q></p>
	</div>

	<div class="container">
		<div class="row acerca-de justify-content-around">
			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="assets/images/icon-services.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">quienes somos</strong>
							<div class="w-100"></div>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem totam dolorem error.
						</p>
					</figcaption>
				</figure>
			</article>

			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="assets/images/icon-services.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">Una historia de servicio</strong>
							<div class="w-100"></div>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem totam dolorem error.
						</p>
					</figcaption>
				</figure>
			</article>
		</div>
	</div>

	<div class="container-fluid px-0 galeria">
		<div class="row justify-content-center mx-0 px-0">
			<div class="col-6 px-0 mx-0">
				<img src="assets/images/wel3.jpg" alt="">
			</div>
			<div class="col-6 px-0 mx-0">
				<img src="assets/images/wel4.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<section class="contacto row justify-content-center">
			<div class="col-12 col-md-9 text-center">
				<h2 class="subtitulo"><span>Contactanos</span></h2>
			</div>

			<iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12656.165754243311!2d-99.16636547458687!3d19.425338392172087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35f5bd1563%3A0x6c366f0e2de02ff7!2sEl%20%C3%81ngel%20de%20la%20Independencia!5e0!3m2!1ses-419!2smx!4v1568329227255!5m2!1ses-419!2smx" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="assets/images/icon-cellphone.png" alt="">Tel: 1 23 45 67
				</p>
			</div>
		</section>

		<footer class="row justify-content-center redes-sociales">
			<div class="col-auto">
				<a href="#"><img src="assets/images/facebook.png" alt=""></a>
				<a href="#"><img src="assets/images/twitter.png" alt=""></a>
				<a href="#"><img src="assets/images/instagram-new.png" alt=""></a>
			</div>
		</footer>
	</div>

	<script src="assets/js/main.js"></script>
</body>
</html>