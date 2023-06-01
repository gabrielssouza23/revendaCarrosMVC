<!DOCTYPE html>
<html>
<head>
	<title>Projeto 05</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="<?= url('/assets/web/style.css');?>" rel="stylesheet">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>
<body>

<?php 
	$this->layout("_theme");
?>

<section class="venda-single">

  
	<div class="line-titulo">
		<div class="ln1"></div>
		<h2>Veículo para Venda</h2>
	</div>
	

	<div class="container">

	<div class="info-veiculo">
		<div class="info-bread"><a href="">HOME</a><span>></span>
		<a href="">VENDA</a><span>></span>
		<a href="">VEÍCULO DE TESTE</a></div>
		<div style="background-image:url('imagens/carro1.jpg');" class="foto-destaque"></div>
		<div class="nav-galeria-parent">
		<div class="arrow-left-nav"></div>
		<div class="arrow-right-nav"></div>
		<div class="nav-galeria">
			<div class="nav-galeria-wraper">
				<div style="background-color:rgb(210,210,210);" class="mini-img-wraper"><div style="background-image:url('imagens/carro1.jpg');" class="mini-img"></div></div>
				<div class="mini-img-wraper"><div style="background-image:url('imagens/carro1.jpg');" class="mini-img"></div></div>
				<div class="mini-img-wraper"><div style="background-image:url('imagens/carro1.jpg');" class="mini-img"></div></div>
				<div class="mini-img-wraper"><div style="background-image:url('imagens/carro1.jpg');" class="mini-img"></div></div>
				<div class="mini-img-wraper"><div style="background-image:url('imagens/carro1.jpg');" class="mini-img"></div></div>
				<div class="mini-img-wraper"><div style="background-image:url('imagens/carro1.jpg');" class="mini-img"></div></div>
			</div><!--nav-galeria-wraper-->

		</div><!--nav-galeria-->
		</div><!--nav-galeria-parent-->
	</div><!--info-->

	<div class="descricao-veiculo">
		<h2>R$20.000,00</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae dolor elementum, aliquet diam non, placerat risus. Suspendisse fringilla sollicitudin velit sed elementum</p>
		<a class="btn1" href="">Entre em contato</a>
	</div><!--descricao-veiculo-->
	<div class="clear"></div>
</div><!--container-->

</section><!--venda-single-->




<section class="contato">
	<div class="line-titulo">
		<div class="ln1"></div>
		<h2>Contato</h2>
	</div><!--line-titulo-->

	<form>
		<div class="input-wraper w100">
			<input placeholder="Nome*" type="text" required />
		</div><!--input-wraper-->

		<div class="input-wraper w50">
			<input placeholder="E-mail*" type="text" required />
		</div><!--input-wraper-->

		<div class="input-wraper w50">
			<input placeholder="Telefone*" type="text" required />
		</div><!--input-wraper-->

		<div class="input-wraper w100">
			<textarea placeholder="Mensagem*" required></textarea>
		</div><!--input-wraper-->

		<div class="input-wraper w100">
			<input class="btn1" type="submit" value="Enviar" />
		</div><!--input-wraper-->

		<div class="clear"></div><!--clear-->

	</form>

</section><!--contato-->


<section class="veiculos-destaque">
	<div class="line-titulo">
		<div class="ln1"></div>
		<h2>Veículos em destaque</h2>
	</div><!--line-titulo-->
	<div class="container">
	<div class="vitrine-destaque">
		<div style="background-image:url('imagens/carro1.jpg');" class="carro-img"></div><!--carro-img-->
		<div class="info-carro">
			<h2>Volkswagen Karmann-ghia</h2>
			<p>1.6 8v, Gasolina, 2P, Manual1969</p>
			<a class="btn1" href="">Mais Detalhes</a>
		</div><!--info-carro-->
	</div><!--vitrine-destaque-->

	<div class="vitrine-destaque">
		<div style="background-image:url('imagens/carro1.jpg');" class="carro-img"></div><!--carro-img-->
		<div class="info-carro">
			<h2>Volkswagen Karmann-ghia</h2>
			<p>1.6 8v, Gasolina, 2P, Manual1969</p>
			<a class="btn1" href="">Mais Detalhes</a>
		</div><!--info-carro-->
	</div><!--vitrine-destaque-->

	<div class="vitrine-destaque">
		<div style="background-image:url('imagens/carro1.jpg');" class="carro-img"></div><!--carro-img-->
		<div class="info-carro">
			<h2>Volkswagen Karmann-ghia</h2>
			<p>1.6 8v, Gasolina, 2P, Manual1969</p>
			<a class="btn1" href="">Mais Detalhes</a>
		</div><!--info-carro-->
	</div><!--vitrine-destaque-->
	<div class="clear"></div>
	</div><!--container-->
</section><!--veiculos-destaque-->


</body>
</html>