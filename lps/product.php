<?php require ('functions.php'); ?>
<?php require ('header.php'); ?>

<div class="d-flex">
	
	<div class="sidenav position-fixed h-100-vh bg-light border-right py-5" style="width: 280px;">
		<div id="accordion">

			<div class="">
				<div class="p-3 border-bottom" id="headingOne">
					<h5 class=" mb-0">
						<a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<i class="h3 icon ion-md-heart"></i><span class="font-weight-bold"> Seção #1</span>
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

					<a class="w-100 d-block px-4 py-2 text-left border-bottom" href="#primary">Subitem</a>
					<a class="w-100 d-block px-4 py-2 text-left border-bottom" href="#danger">Subitem</a>
					<a class="w-100 d-block px-4 py-2 text-left border-bottom" href="#warning">Subitem</a>

				</div>
			</div>

			<div class="border-bottom">
				<div class="p-3" id="headingOne">
					<h5 class=" mb-0">
						<a class="text-dark" href="#">
							<span class="font-weight-bold">Seção #2</span>
						</a>
					</h5>
				</div>
			</div>

		</div>
	</div>

	<div class="w-100">
		
		<div id="success" class="h-100-vh py-5 px-3 bg-success"></div>
		<div id="primary" class="h-100-vh py-5 px-3 bg-primary"></div>
		<div id="danger" class="h-100-vh py-5 px-3 bg-danger"></div>
		<div id="warning" class="h-100-vh py-5 px-3 bg-warning"></div>

	</div>
</div>
<?php require ('footer.php'); ?>