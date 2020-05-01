<?php
	if (isset($_GET['sucesso'])) {
?>
	<script type="text/javascript">
		alert("Mensagem enviada com sucesso.");
	</script>
<?php
	}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<link rel="icon" href="img/favicon.ico">

	<title>Pintura Eletrostática em Londrina - Eletropinturas</title>

	<link rel="stylesheet" href="css/puzzle.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">

	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Prosto+One' rel='stylesheet' type='text/css'>
</head>

<body id="home">
	<nav class="navbar navbar-fixed-top fixed">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#home">Eletropintura</a>
			</div><!-- end navbar-header -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right" id="top-menu">
					<li><a href="#home">Home</a></li>
					<li><a href="#quemsomos">O que é</a></li>
					<li><a href="#vantagens">Vantagens</a></li>
					<li><a href="#sobre">Sobre a Empresa</a></li>
					<li><a href="#contato">Contato</a></li>
					<li><a href="blog.php">Blog</a></li>
				</ul>
			</div><!-- end collapse navbar-collapse -->
		</div><!-- end container-fluid -->
	</nav>


	<header>
		<div class="container">
			<h1>Pintura Eletrostática</h1>
			<h2>Dentre todos os tipos de pintura, é a que tem melhor durabilidade<br>
			além de ser maleável e não descascar.</h2>
		</div>
	</header>


	<section class="o_que_e" id="quemsomos">
		<div class="container">
			<h2>O que é</h2>

			<p>A pintura eletrostática realizada pela <b>Eletropintura</b> é um processo de pintura que tem como finalidade o revestimento de ferro, alumínio ou outros metais com uma película de polímero termo-endurecível (pó de poliéster). Existem inúmeras cores e texturas que podem ser utilizadas.</p>

			<p>Este processo de pintura garante a flexibilidade da peça sem descascar ou deformar a pintura. Quando uma peça é pintada, a tinta recebe uma carga elétrica oposta à peça, fazendo com que ela se fixe na mesma.</p>

			<p>Após tal procedimento, a peça é levada a uma estufa, que aquece a tinta que é curada e é fixada na peça.</p>

			<img class="wow bounceInUp" src="img/o-que-e-1.jpg">
			<img class="wow bounceInUp" src="img/o-que-e-2.jpg">
		</div>
	</section>


	<section class="vantagens" id="vantagens">
		<div class="container">
			<h2>Vantagens</h2>

			<ul>
				<li>Amplo espectro de aplicações.</li>
				<li>Ausência de solventes orgânicos.</li>
				<li>Mínima agressão ao meio ambiente.</li>
				<li>Elevada resistência química e mecânica.</li>
				<li>Acabamento final atraente e de alto nível.</li>
			</ul>

			<img class="wow slideInLeft" src="img/fotos.jpg">
		</div>
	</section>


	<section class="sobre" id="sobre">
		<div class="container">
			<h2>Sobre a Empresa</h2>

			<p>A <b>Eletropintura</b> é uma jovem empresa especializada em pintura eletrostática em geral. Fundada no início de 2013, temos conquistado cada vez mais clientes e expandido nossas instalações com base em um serviço que se destaca pela alta qualidade e pelo rigoroso cumprimento dos prazos de entrega.</p>
		</div>
	</section>


	<section class="contato" id="contato">
		<div class="container">
			<h2>Contato</h2>

			<div class="row">
				<div class="col-md-4 col-lg-4">
					<p>Envie sua mensagem, ou entre em contato pelo telefone abaixo.</p>

					<address>
						(43) 3341 4531<br/>
						rua Condor, 175<br/>
						Parque das Indústrias<br/>
						Londrina - PR<br/><br/>
						atendimento:<br/>
						seg - sex,<br/>
						07:30 - 11:45 e 13:00 - 17:30<br/><br/>
						eletropinturaslondrina@gmail.com
					</address>
				</div><!-- end col-lg-4 -->

				<div class="col-md-8 col-lg-8">
					<form action="envia-contato.php" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="nome" class="col-md-2 col-lg-2 control-label">Nome</label>

							<div class="col-md-10 col-lg-10">
								<input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
							</div><!-- end col-lg-10 -->
						</div><!-- end form-group -->
					
						<div class="form-group">
							<label for="email" class="col-md-2 col-lg-2 control-label">Email</label>

							<div class="col-md-10 col-lg-10">
								<input type="email" class="form-control" name="email" placeholder="Digite seu email">
							</div><!-- end col-lg-10 -->
						</div><!-- end form-group -->

						<div class="form-group">
							<label for="assunto" class="col-md-2 col-lg-2 control-label">Assunto</label>

							<div class="col-md-10 col-lg-10">
								<input type="text" class="form-control" name="assunto" placeholder="Digite o assunto">
							</div><!-- end col --> 
						</div><!-- end form-group -->

						<div class="form-group">
							<label for="mensagem" class="col-md-2 col-lg-2 control-label">Mensagem</label>

							<div class="col-md-10 col-lg-10">
								<textarea name="mensagem" name="mensagem" class="form-control" cols="20" rows="10" placeholder="Digite sua mensagem"></textarea>
							</div><!-- end col -->
						</div><!-- end form-control -->

						<div class="form-group">
							<div class="col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2">
								<button type="submit" class="btn btn-primary wow bounceInUp">Enviar</button>
							</div><!-- end col -->
						</div><!-- end form-group -->
					</form>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>


	<footer>
		<div class="container">
			<p>&copy; Eletropintura | Todos os direitos reservados</p>
			<p class="desenvolvido">Desenvolvido por  - <a href="http://www.regisyamamoto.com.br" target="_blank">Regis Yamamoto</a></p>
		</div><!-- end container -->
	</footer>

	<script src="js/jquery.min.js"></script>
	<script src="js/puzzle.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.scroll.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/wow.min.js"></script>

	<script>
        new WOW().init();
    </script>
</body>

</html>