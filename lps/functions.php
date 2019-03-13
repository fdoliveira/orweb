<?php 

function get_sheets($sheets, $page = 'default')
{
	if ($sheets === 'css') {

		$sheets = [
			
			"bootstrap" => "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css",
			"poppins"   => "https://fonts.googleapis.com/css?family=Poppins:300,400,700",
			"ionicons"  => "https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css",
			"template"  => "assets/css/template.css"

		];

	}

	if ($sheets === 'js') {

		$sheets = [

			"jquery"    => "https://code.jquery.com/jquery-3.3.1.slim.min.js",
			"popper"    => "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js",
			"bootstrap" => "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js",
			"template"  => "assets/js/template.js"

		];

	} 

	return $sheets;

}

function getModels() 
{

	$models = [

		[
			'name' => 'Loja Móvel', 
			'pdfs' => [
				[
					'link' => 'pdf/loja-movel/loja-movel-1.pdf', 
					'img' => 'pdf/loja-movel/loja-movel-1.jpg'
				],
				[
					'link' => 'pdf/loja-movel/loja-movel-2.pdf', 
					'img' => 'pdf/loja-movel/loja-movel-2.jpg'
				]
			]
		],

		[
			'name' => 'Loja Fácil', 
			'pdfs' => [
				[
					'link' => 'pdf/loja-facil/loja-facil-1.pdf', 
					'img' => 'pdf/loja-facil/loja-facil-1.jpg'
				],
				[
					'link' => 'pdf/loja-facil/loja-facil-2.pdf', 
					'img' => 'pdf/loja-facil/loja-facil-2.jpg'
				],
				[
					'link' => 'pdf/loja-facil/loja-facil-3.pdf', 
					'img' => 'pdf/loja-facil/loja-facil-3.jpg'
				]
			]
		],

		[
			'name' => 'Venda Fácil', 
			'pdfs' => [
				[
					'link' => 'pdf/venda-facil/venda-facil-1.pdf', 
					'img' => 'pdf/venda-facil/venda-facil-1.jpg'
				],
				[
					'link' => 'pdf/venda-facil/venda-facil-2.pdf', 
					'img' => 'pdf/venda-facil/venda-facil-2.jpg'
				]
			]
		],

		[
			'name' => 'Caixa Fácil', 
			'pdfs' => [
				[
					'link' => 'pdf/caixa-facil/caixa-facil-1.pdf', 
					'img' => 'pdf/caixa-facil/caixa-facil-1.jpg'
				],
				[
					'link' => 'pdf/caixa-facil/caixa-facil-2.pdf', 
					'img' => 'pdf/caixa-facil/caixa-facil-2.jpg'
				]
			]
		]

	];

	return $models;

}

function getProducts()
{

	$products = [

		[
			'name'        => 'Loja Móvel', 
			'icon'		  => 'card',
			'description' => 'Sistema utilizado por vendedores externos, por lojas móveis ou de pequeno porte, em que o mesmo ator que realiza a venda é o mesmo que fatura, emiti a NF, e recebe o dinheiro.',
			'link'        => '#'
		],

		[
			'name'        => 'Loja Fácil', 
			'icon'		  => 'cash', 
			'description' => 'Sistema utilizado em lojas de pequeno porte, onde o vendedor realiza a venda e um caixa fatura e recebe o pagamento.', 
			'link'        => '#'
		],

		[
			'name'        => 'Venda Fácil', 
			'icon'		  => 'basket',  
			'description' => 'Sistema onde o vendedor apenas realiza a venda.',
			'link'        => '#'
		],

		[
			'name'        => 'Caixa Fácil', 
			'icon'		  => 'cart', 
			'description' => 'Sistema em que o cliente escolhe os produtos e passa os produtos no caixa. Não temos um vendedor, temos um Caixa que recebe os produtos que o cliente escolheu, fatura e recebe o pagamento.',
			'link'        => '#'
		]

	];

	return $products;

}

 ?>