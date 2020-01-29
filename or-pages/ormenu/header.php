<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    <meta name="robots" content="noindex">
	<!-- Bootstrap 4  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- Font Poppins -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="inc/css/coreNavigation-1.1.3.min.css">
	<!-- My Styles -->
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
</head>
<body>

<style type="text/css">
	nav {
		min-height: 60px;
		border-bottom: solid 1px #dfdfdf;
	}
	nav .wrap-core-nav-list {
		background: #fff;
	}
	nav .nav-header {
		background: #fff;
		border-bottom: solid 1px #dfdfdf;
	}
	nav .brand {
		width: 170px;
		display: block;
		padding: 16px 0;
		position: relative;
	}
	nav .brand img {
		width: 100%;
	}
	nav .menu li a {
		display: block;
		color: #3a3a3a;
		padding: 20px 25px;
		text-decoration: none;
		border-left: solid 1px #dfdfdf;
	}
	nav .menu li a:hover {
		color: #e74c3c;
	}
	nav .menu li:last-child a {
		border-right: solid 1px #dfdfdf;
	}
	.content-header {
		padding: 13px 0;
		background: #fff;
	}
	.content-header .phone-number {
		font-weight: 600;
	}

	@media (max-width: 992px) {
		nav .nav-header {
			min-height: 60px;
			border-bottom: solid 1px #dfdfdf;
		}
		nav .nav-header .brand {
			top: 14px;
			padding: 0;
			float: none;
			margin: 0 50px;
			position: relative;
		}
		nav .nav-header .toggle-bar {
			top: 17px;
			left: 15px;
			font-size: 18px;
			position: absolute;
		}
		nav .menu li a {
			border: 0;
			padding: 10px 15px;
			border-bottom: solid 1px #dfdfdf;
		}
		nav .menu li:last-child a {
			border: 0;
			border-bottom: none;
		}

		.core-nav .wrap-core-nav-list .core-nav-list {
			width: 100%;
			display: inline-grid;
		}
		.core-nav.open-responsive .wrap-core-nav-list {
			z-index: -5;
		}

		.content-header{
			background: #fff;
			text-align: center;
			padding: 10px 15px;
			border-bottom: solid 1px #efefef;
		}
	}

	@media (max-width: 767px) {
		nav .nav-header .toggle-bar {
			left: 15px;
		}
	}
	@media (min-width: 992px) {
		nav .menu li a {
			justify-content: center;
		}
		nav .menu li a,
		.core-nav .wrap-core-nav-list .core-nav-list,
		.core-nav .wrap-core-nav-list .core-nav-list li {
			width: 100%;
			align-items: center;
		}
		nav .menu li a,
		.core-nav .wrap-core-nav-list .core-nav-list {
			display: flex;
		}
		.core-nav .wrap-core-nav-list .core-nav-list {
			justify-content: space-between;
		}
	}
</style>

<nav hidden>
    <div class="content-header d-flex justify-content-center align-items-center">
        <span class="font-weight-light mr-md-3">
        	Fale Conosco <span class="phone-number">84 9 8152-0971</span>
        </span>
        <a href="#" class="btn btn-success d-none d-md-inline-block">Experimente Grátis</a>
        <a href="#" class="btn btn-link d-none d-md-inline-block">Entrar</a>
    </div>
    <div class="nav-header">
        <a href="#" class="brand">
            <h1 class="h3 font-weight-light mb-0">ORMENU</h1>
        </a>
        <button class="toggle-bar">
            <span class="fa fa-bars"></span>
        </button>	
    </div>								
    <ul class="menu">
        <li class="order-1"><a href="#">Funcionalidades</a></li>
        <li class="order-2"><a href="#">Link 2</a></li>
        <li class="order-3"><a href="#">Planos e Preços</a></li>
        <li class="order-5 d-md-none bg-success"><a href="#" class="text-white">Experimente Grátis</a></li>
        <li class="order-6 d-md-none bg-light"><a href="#" class="text-primary">Entrar</a></li>
        <li class="order-4"><a href="#">Sobre Nós</a></li>
    </ul>
</nav>
