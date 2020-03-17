<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fast Pizza</title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<header>
	<div class="container">
			<img id="logotipo" src="img/logotipo.PNG" alt="Logotipo">	
			</div>
	<div class="container">
				<div class="row">
					<nav id="menu" class="pull-right">
						<ul> 
							<li><a href="index.html">Home</a></li>
							<li><a href="cardapio.html">Cardápio</a></li>
							<li><a href="#">Bebidas</a></li>
							<li><a href="#">Cadastrar</a></li>
							<li><a href="pedidos.html">Pedidos</a></li>
							<li><a href="#">Contato</a></li>

			<li class="search">
				<div class="input-group">
				<input type="search" placeholder="search">
				<span class="input-group-btn">
				<button type="button"><i class="fa fa-search"></i></button>
							</span> 
							</div>
							</li>
							</ul>
						</nav>
					</div>
				</div>


</header>		

<section>
			<div id="banner">
				<h1>Dinheiro não compra felicidade<small>Mas compra pizza que é a mesma coisa</small></h1>
			</div>

			<div id="Info" class="container">
			<div class="row text-center">
				</div>


				<div class="row thumbnails">
					<div class="col-md-3">
					<img src="img/teleentrega.jpg">
					<h5>A pizzaria presta um serviço com rapidez e eficiencia</h5>
						<time>16Dezembro</time>
				</div>
				<div class="col-md-3">
					<img src="img/toda-quinta.jpg">
					<h5>Promoção Familía</h5>
					<time>Novembro e Dezembro 2019</time>
				</div>
				<div class="col-md-3">
					<img src="img/pizza23.jpg">
					<h5>Promoção pizza sexta-feira vegetariana</h5>
					<time>Mês de Dezembro 2019</time>
				</div>
				<div class="col-md-3">
					<img src="img/pizza-rodizio.jpg">
					<h5>Promoção Sabado compra três e ganha mais uma</h5>
					<time>Validade Mês de Natal</time>
				</div>
			</div> 
		</div>
	</section>

			<footer>
				<div class="row row-vermelho">
				<div class="container">
				<div class="row">
				<div class="col-md-2 text-center">
				<img class="massa-pizza" src="img/massa-pizza.PNG" alt="massa-pizza">
	 		</div>

				<div class="col-md-10"><!-- col-md-10 siguinifica (ciluna ,Media de 10)-->
		<div class="row row-cols"><!--O row row-cols serve para locar as 3 colunas , col-md-4  col-popular-post ,col-md-4  col-links e col-md-4  col-get-in-touch . Assim fica um grid de 12 distribuido em 100% com 3x de col-md-4. -->
		<div class="col-md-4 col-popular-post">

			<h4>HORÁRIO DE PEDIDOS</h4>
			<ul class="list-unstyled">
			<li>
			<h5>HORÁRIO DE ENTREGAS</h5>
			<time>19:00 AS 23:30 HS</time>
			</li>
		<li>
		<h5>E-mail: fastpizza@gmail.com</h5>
		</li>
		</ul>
		</div>	<!-- Essa div fecha col-popular-post. -->


							
			<div class="col-md-4 col-get-in-touch">
			<h4>FAST PIZZA</h4>
			<address><!--A tag address serve para agrupar elementos embutidos en elementos em um documento, Ela não fornece nenhuma alteração visual ela fornece uma maneira de um gancho numa parte de um texto ou parte de um documento -->
				<i class="fa fa-map-marker"></i> <samp>PORTO ALEGRE R/S</samp>
			</address>
				<p><a href="tel:(51)3038 6575"><i class="fa fa-phone"></i>O51 3330 6575</a></p>
				<ul class="list-unstyled list-socials">
					<li>
						<a href="#" target="_blank"><i class="fa fa-facebook"></i></a><!-- -->						
					</li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>											
					</li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a>						
					</li>
										
					</ul>
					</dir>
		 	</div>
		
			</div>

			</div>

			</div>

			</div>
			<div class="row row-cinza-escuro">
		<div class="container">
		<p class="pull-left">Todos os Direitos Reservados @FastPizza.</p>
		<p class="pull-right text-roxo">Creat Arnaldo-Ericson-Paula </p>
		</div>
		</div>
			</footer>


		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function(){
				$("#logotipo").on("mouseover",function(){
					$("#banner h1").addClass("efeito");
				}).on("mouseout",function(){
					$("#banner h1").removeClass("efeito");
				});	
				$("#input-search").on("focus",function(){
					$("li.search").addClass("ativo");
				}).on("blur",function(){
					$("li.search").removeClass("ativo");
				}); 
				$(".thumbnails").owlCarousel({
					item : 4
				});		
			});
		</script>
</body>
</html>