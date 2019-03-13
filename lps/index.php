<?php require ('functions.php'); ?>
<?php require ('header.php'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom">
    <div class="container">
		
		<a class="navbar-brand text trans-primary font-weight-bold" href="index.php">LPS</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
			    <li class="nav-item active">
			        <a class="nav-link" href="#about">Sobre</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#products">Produtos</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#models">Modelos</a>
			    </li>
		    </ul>
	    </div>
	
	</div>
</nav>

<header class="bg-dark py-5">
	<div class="container my-5 py-5">
		<div class="row">
			<div class="col-md-7">
				<h1 class="text-white font-weight-bold mt-5">Linha de Produto de Software</h1>
				<p class="text-light">Mussum Ipsum, cacilds vidis litro abertis. Cevadis im ampola pa arma uma pindureta. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.</p>
				<a href="#about" class="btn btn-danger">Sobre</a>
			</div>
		</div>
	</div>
</header>

<section id="about" class="py-5">
	<div class="container">
		<h2 class="font-weight-bold">Sobre</h2>
		
		<p>Mussum Ipsum, cacilds vidis litro abertis. Viva Forevis aptent taciti sociosqu ad litora torquent. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet.</p>
		
		<p>Sed non consequat odio. Sapien in monti palavris qui num significa nadis i pareci latim. Quem num gosta di mim que vai caçá sua turmis!</p>

		<p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Quem num gosta di mé, boa gentis num é.</p>

		<p>Leite de capivaris, leite de mula manquis sem cabeça. Manduma pindureta quium dia nois paga.</p>

		<a href="#models" class="btn btn-danger">Modelos</a>
	</div>
</section>

<section id="products" class="bg-light py-5">
	<div class="container">
		<h2 class="font-weight-bold">Produtos</h2>
		
		<div class="row">
			<?php $products = getProducts(); ?>
			<?php foreach ($products as $key => $product) : ?>
				<div class="col-md-8 my-3">
					<div class="bg-danger border rounded">
						<div class="d-md-flex justify-content-start align-items-center">
							<div class="text-center py-3 py-md-0 px-md-4 px-lg-5">
								<i class="display-2 text-white icon ion-md-<?= $product['icon']; ?>"></i>
							</div>
							<div class="card-body text-center text-md-left bg-white">
								<h3 class="card-title"><?= $product['name']; ?></h3>
								<p class="card-text"><?= $product['description']; ?></p>
								<a href="<?= $product['page_link']; ?>" class="btn btn-danger">Ver Produto</a>
								<a href="#<?= $product['id']; ?>" class="btn btn-secondary">Ver Modelo</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<a href="#products" class="btn btn-danger">Produtos</a>

	</div>
</section>

<section id="models" class="bg-danger py-5">
	<div class="container">
		<h2 class="text-white font-weight-bold mb-4">Modelos</h2>

		<?php $models = getProducts(); ?>
		<?php foreach ($models as $key => $model) : ?>

			<h4	id="<?= $model['id']; ?>" class="text-light mt-5"><u><?= $model['name']; ?></u></h4>
			<div class="row mb-3">
				<?php foreach ($model['pdfs'] as $key => $pdf) : ?>
					<div class="col-6 col-md-2">
						<a target="_blank" href="<?= $pdf['link']; ?>">
							<div class="position-relative">
								<div class="mask-document position-absolute w-100 h-100"></div>
								<img class="img-fluid" src="<?= $pdf['img']; ?>">
							</div>
						</a>
						<h4 class="h6 text-white mt-2">Caso de Uso - <?= $pdf['user']; ?> - <?= $pdf['plataform']; ?></h4>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>

	</div>
</section>



<?php require ('footer.php'); ?>