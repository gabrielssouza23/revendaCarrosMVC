<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= url('/assets/web/scripts.js'); ?>" async></script>
    <link rel="stylesheet" href="<?= url('/assets/web/style.css');?>">
    <title>Document</title>
</head>
<body>

   
    
    <header>

		<div class="container">
			<div class="logo">
				<img src="imagens/logo180x75.png" />
			</div><!--logo-->

			<nav class="desktop">
				<ul>
					<li><a style="color:#255784;" href="<?=url('/'); ?>">Home<span class="span"></span></a></li>
					<li><a href="<?=url('/veiculos'); ?>">Veículos<span class="span"></span></a></li>
					<li><a href="<?=url('/sobre'); ?>">Sobre<span class="span"></span></a></li>
					<li id="contact">Contatos<span class="span-contact"></span></li>
				</ul>
			</nav><!--desktop-->

			<nav class="mobile">
				<ul>
					<li><a style="color:#3DE22C;" href="<?=url('/'); ?>">Home</a></li>
					<li><a href="<?=url('/veiculos'); ?>">Venda</a></li>
					<li><a href="<?=url('/sobre'); ?>">Sobre</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</nav><!--mobile-->

			<div class="clear"></div>
		</div><!--container-->
	</header>
    <section class="banner">
		<picture>
			<source media="(max-width: 380px)" srcset="imagens/bglim380x144.jpg" type="image/jpg">
			<source media="(max-width: 768px)" srcset="imagens/bglim768x292.jpg" type="image/jpg">
			<img src="imagens/bglim1280.jpg" alt="banner">
		</picture>
		<div class="container">
			<div class="efct">
				<div class="text-banner">
					<div class="text-banner-single">Consultoria</div>
					<div class="text-banner-single">Compra</div>
					<div class="text-banner-single">Venda</div>
					<div class="text-banner-single">e-mail@hotmail.com</div>
				</div><!--text-banner-->
			</div><!--efct-->
		</div><!--container-->
	</section><!--banner-->
	
    <?php
    echo $this->section("content");
    ?>
    	<div class="scroll-top">
		<div class="scroll-img">
			<img id="scroll-top-img" src="imagens/seta-para-cima-em-um-fundo-de-circulo-preto.png" alt="TOPO"
				title="Volte ao topo!">
		</div>

		<div class="scroll-top-date"></div>
		<div class="clear"></div>
	</div>
	<footer>
		<div class="container">
			<nav>
				<ul>
					<li><a style="color:#3DE22C;" href="<?=url('/'); ?>">Home</a></li>
					<li><a href="<?=url('/veiculos'); ?>">Venda</a></li>
					<li><a href="<?=url('/sobre'); ?>">Sobre</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</nav>
			<p>Todos os direitos reservados</p>
			<div class="clear"></div>
		</div>
		<!--container-->
	</footer>
</body>
</html>