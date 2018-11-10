<footer>
	<div class="container py-5">
		<div class="row">

			<?php for($f = 1; $f <= 4; $f++) : ?>

			<div class="px-2 col-md-3 text-center my-3">
				<h6 class="h6 text-dark text-uppercase font-weight-bold mb-3">Menu Nº <?= $f; ?></h6>
				<ul class="list-unstyled">
					<li class="my-2"><a href="">Link do Menu 1</a></li>
					<li class="my-2"><a href="">Link do Menu 2</a></li>
					<li class="my-2"><a href="">Link do Menu 3</a></li>
				</ul>
			</div>
			
			<?php endfor; ?>

		</div>
	</div>
	<div class="bg-light py-5">
		<div class="text-center text-capitalize text-secondary">
	    	&copy; <script>document.write(new Date().getFullYear())</script> ORCOMM - Todos os direitos reservados. Design pela equipe do ORCOMM.
	    </div>
	</div>	
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>