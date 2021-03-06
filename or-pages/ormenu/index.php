<?php require_once ("header.php"); ?>

<style type="text/css">
	.header-top {
		background-size: auto 100%;
		background-repeat: no-repeat;
		background-position: center center;
		background-image: url('assets/img/header-ormenu.jpg');
	}
	.header-top .title {
		font-size: 1.7em;
	}
	.header-top .subtitle {
		font-size: 1em;
	}
	.header-top .form-get-email .input-email {
		text-align: center;
		border-top-right-radius: 6px;
		border-top-left-radius: 6px;
	}
	.header-top .form-get-email .input-submit {
		border-bottom-right-radius: 6px;
		border-bottom-left-radius: 6px;
	}
	.header-top .form-get-email .input-email,
	.header-top .form-get-email .input-submit {
		width: 100%;
	}
	@media (min-width: 768px) {
		.header-top .form-get-email .input-email {
			text-align: left;
			border-top-right-radius: 0;
			border-top-left-radius: 6px;
			border-bottom-left-radius: 6px;
		}
		.header-top .form-get-email .input-submit {
			border-top-right-radius: 6px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 6px;
		}
		.header-top .form-get-email .input-email {
			width: 65%;
		}
		.header-top .form-get-email .input-submit {
			width: 35%;
		}
	}
	@media (min-width: 992px) {
		.header-top {
			background-size: 100% auto;
		}
		.header-top .title {
			font-size: 2.4em;
		}
		.header-top .subtitle {
			font-size: 1.2em;
		}
	}
</style>

<header class="header-top py-5">
	<div class="container py-md-3 py-lg-5 my-3">
		<div class="row align-items-center">
			<div class="col-md-10 col-lg-7">
				<div class="text-white text-center text-md-left">

					<h1 class="title">Controle seu restaurante, lanchonete ou bar sem complicação</h1>
					<h2 class="subtitle font-weight-light">Sistema para Controle de Comandas e Mesas. Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Começe agora:</h2>

					<form class="form-get-email d-md-flex align-items-center mt-4 mt-lg-5" method="post">
						<input class="input-email border-0 p-3" type="email" name="email" placeholder="Informe seu e-mail" size="34">
						<button class="input-submit bg-success text-white border-0 p-3" type="submit">Experimente Grátis!</button>
					</form>
		
				</div>	
			</div>
		</div>
	</div>
</header>

<section class="py-5">
	<div class="container my-5">
		<h3 class="text-center text-md-left font-weight-bold mb-5"><u>Benefícios</u></h3>
		<div class="row justify-content-center">

			<?php for($i = 1; $i <= 4; $i++) : ?>

			<div class="col-md-3">
				
				<div class="card bg-light mb-3 py-4">
	  				<div class="card-body text-center text-md-left">
	    				<h5 class="card-title text-info h4 font-weight-bold">Benefício <?= $i; ?></h5>
	    				<p class="card-text text-muted font-weight-light">Atirei o pau no gatis, per gatis num morreus. Manduma pindureta quium dia nois paga.</p>
					</div>
				</div>

			</div>

			<?php endfor; ?>

			<a class="btn btn-lg btn-info mt-4" href="">Agregar Valor ao Produto</a>

		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 bg-info" style="height: 540px;">
				<div class="h-100 d-flex align-items-center justify-content-center">
					<p class="h3 font-weight-bold text-white"><u>Image or Icon</u></p>
				</div>
			</div>
			<div class="col-md-6" style="height: 540px;">
				<div class="h-100 d-flex align-items-center justify-content-center">
					<div class="w-100 text-center text-md-left mx-md-5 ">
						<h3 class="font-weight-bold"><u>Agregar Valor ao Produto</u></h3>
						<p class="h5 text-muted font-weight-light">Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss deixa as pessoas mais interessantis. Sapien in monti palavris qui num significa nadis i pareci latim.</p>
						<a class="btn btn-lg btn-info mt-4" href="">Depoimentos Clientes</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container my-5">
		<h3 class="text-center text-md-left font-weight-bold mb-5"><u>Depoimentos Clientes</u></h3>
    	<div class="row justify-content-center">

			<?php for($a = 1; $a <= 3; $a++) : ?>

			<div class="col-md-4 px-4">
				
				<div class="card bg-light mb-3">
					<div class="card-header py-5">
	    				<p class="card-text text-center text-dark"><b>Mussum Ipsum</b>, cacilds vidis litro abertis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Per aumento de cachacis, eu reclamis. Copo furadis é disculpa de bebadis, arcu quam euismod magna.</p>
						<div class="text-center pt-1">
		    				<i class="fas fa-star text-warning"></i>
		    				<i class="fas fa-star text-warning"></i>
		    				<i class="fas fa-star text-warning"></i>
		    				<i class="fas fa-star text-warning"></i>
		    				<i class="fas fa-star text-warning"></i>
		    			</div>
					</div>
	  				<div class="card-body py-4">
	  					<div class="d-flex justify-content-center align-items-center">
			    			<figure class="mb-0">
								<img class="rounded-circle border border-info" src="http://articlebio.com/uploads/bio/2016/08/05/taylor-marie-hill.jpg" height="85" width="85">
			    			</figure>
			    			<div class="ml-2">
			    				<h5 class="h6 text-uppercase text-info font-weight-bold mb-1">Fulano de Tal</h5>
			    				<h6 class="text-muted font-weight-light mb-0">Profissão</h6>
			    			</div>
			    		</div>


					</div>
				</div>

			</div>

			<?php endfor; ?>

			<a class="btn btn-lg btn-info mt-4" href="">Planos</a>

	</div>
</section>

<section class="bg-info py-5">
	<div class="container my-5">
		<h3 class="text-center text-md-left text-white font-weight-bold mb-5"><u>Planos</u></h3>
		<div class="row justify-content-center">

			<div class="col-md-4 px-4">

				<div class="card-deck text-center mt-2">
				    <div class="card">
				    	<div class="card-header">
				        	<h4 class="my-0 text-uppercase">Grátis</h4>
				    	</div>
				    	<div class="card-body">
				        	<h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mês</small></h1>
					        <ul class="list-unstyled mt-4 mb-5">
					        	<li>1 user included</li>
					        	<li>2 GB of storage</li>
					        	<li>Email support</li>
					        	<li>Help center access</li>
					        </ul>
				        	<button type="button" class="btn btn-lg btn-block btn-outline-info">Assine Grátis</button>
				    	</div>
					</div>
				</div>

			</div>

			<div class="col-md-4 px-4">

				<div class="card-deck text-center">
				    <div class="card">
				    	<div class="card-header py-3">
				        	<h4 class="h3 my-0 text-uppercase text-info">Padrão</h4>
				    	</div>
				    	<div class="card-body py-4">
				        	<h1 class="card-title pricing-card-title">$57 <small class="text-muted">/ mês</small></h1>
					        <ul class="list-unstyled mt-4 mb-5">
					        	<li>5 users included</li>
					        	<li>10 GB of storage</li>
					        	<li>Email support</li>
					        	<li>Help center access</li>
					        </ul>
				        	<button type="button" class="btn btn-lg btn-block btn-warning">Assine Agora</button>
				    	</div>
					</div>
				</div>

			</div>

			<div class="col-md-4 px-4">

				<div class="card-deck text-center mt-2">
				    <div class="card">
				    	<div class="card-header">
				        	<h4 class="my-0 text-uppercase">Profissional</h4>
				    	</div>
				    	<div class="card-body">
				        	<h1 class="card-title pricing-card-title">$87 <small class="text-muted">/ mês</small></h1>
					        <ul class="list-unstyled mt-4 mb-5">
					        	<li>5 users included</li>
					        	<li>10 GB of storage</li>
					        	<li>Email support</li>
					        	<li>Help center access</li>
					        </ul>
				        	<button type="button" class="btn btn-lg btn-block btn-info">Assine Agora</button>
				    	</div>
					</div>
				</div>

			</div>
	</div>
</section>

<?php require_once ("footer.php"); ?>