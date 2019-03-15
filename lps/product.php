<?php require ('functions.php'); ?>
<?php require ('header.php'); ?>

<style type="text/css">
body {
	font-size: .875rem;
}

.feather {
	width: 16px;
	height: 16px;
	vertical-align: text-bottom;
}
.sidebar {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	z-index: 100; /* Behind the navbar */
	padding: 0;
	box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
	position: -webkit-sticky;
	position: sticky;
	top: 48px; /* Height of navbar */
	height: calc(100vh - 48px);
	padding-top: .5rem;
	overflow-x: hidden;
	overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
	font-weight: 500;
	color: #333;
}

.sidebar .nav-link .feather {
	margin-right: 4px;
	color: #999;
}

.sidebar .nav-link.active {
	color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
	color: inherit;
}

.sidebar-heading {
	font-size: .75rem;
	text-transform: uppercase;
}
.navbar-brand {
	padding-top: .75rem;
	padding-bottom: .75rem;
	font-size: 1rem;
	background-color: rgba(0, 0, 0, .25);
	box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

</style>

<?php 

$product = 'undefined';

if ($_GET['product']) {

	$product = getProduct($_GET['product']);

}

$product = getProduct($product);

?>

<nav class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?= $product['name']; ?></a>
</nav>

<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky">

				<ul class="nav flex-column">
					<?php foreach ($product['sections'] as $key => $section) : ?>
						<li class="nav-item">
							<a class="nav-link" href="#<?= $key?>">
								<span data-feather="<?= $section['icon']; ?>"></span>
								<?= $section['name']; ?> <span class="sr-only">(current)</span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>

			</div>
		</nav>

		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			<?php foreach ($product['sections'] as $key => $section) : ?>
				<div id="<?= $key; ?>" class="mb-5">
				
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
						<h1 class="h2 font-weight-bold"><?= $section['name']; ?></h1>
					</div>

					<?php foreach ($section['contents'] as $key => $content) : ?>

						<<?= $content['tag']; ?>><?= $content['value']; ?></<?= $content['tag']; ?>>

					<?php endforeach; ?>

				</div>
			<?php endforeach; ?>
		</main>
	</div>
</div>


<?php require ('footer.php'); ?>