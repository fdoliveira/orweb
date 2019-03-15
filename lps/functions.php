<?php 

function get_sheets($sheets, $page = 'default')
{
	if ($sheets === 'css') {

		$sheets = array(
			
			"bootstrap" => "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css",
			"poppins"   => "https://fonts.googleapis.com/css?family=Poppins:300,400,700",
			"ionicons"  => "https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css",
			"template"  => "assets/css/template.css"

		);

	}

	if ($sheets === 'js') {

		$sheets = array(

			"jquery"        => "https://code.jquery.com/jquery-3.3.1.slim.min.js",
			"popper"        => "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js",
			"bootstrap"     => "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js",
			"feather-icons" => "https://unpkg.com/feather-icons/dist/feather.min.js",
			"template"      => "assets/js/template.js"

		);
   
	} 

	return $sheets;

}

function getProduct($product) 
{

	$products = getProducts();

	foreach ($products as $key => $value) {
		if ($key === $product) {
			$product = $value;
		} 
	}

	return $product;

}

function getProducts() 
{

	$products = array(

		'lojamovel' => array(
			'name' 		  => 'Loja Móvel',
			'icon'		  => 'credit-card',
			'description' => 'O sistema Loja Móvel possui dois aplicativos, um Mobile para uso do Vendedor e outro Web para uso do Gerente. A aplicação utilizada pelo Gerente é apenas para parametrizar o sistema e realizar cadastros que serão utilizados pelo Vendedor. O Vendedor é o usuário que realiza as vendas, recebe os pagamentos e emiti os documentos fiscais, em um estabelecimento móvel ou físico que precise desse tipo de aplicação.', 
			'pdfs'        => array(
				array(
					'user'      => 'Vendedor',
					'plataform' => 'Mobile',
					'link'      => 'pdf/loja-movel/loja-movel-1.pdf', 
					'img'       => 'pdf/loja-movel/loja-movel-1.jpg'
				),
				array(
					'user'      => 'Gerente',
					'plataform' => 'Web',
					'link'      => 'pdf/loja-movel/loja-movel-2.pdf', 
					'img'       => 'pdf/loja-movel/loja-movel-2.jpg'
				)
			)
		),

		'lojafacil' => array(
			'name' 		  => 'Loja Fácil', 
			'icon'		  => 'dollar-sign', 
			'description' => 'O sistema Loja Fácil possui três aplicativos, um Mobile para uso do Vendedor, um Desktop ou Mobile para uso do Caixa e outro Web para uso do Gerente. Nesse sistema o Vendedor apenas realiza a venda, ele é um facilitador ou atendente que ajuda o cliente a escolher o produto. Depois da venda realizada o cliente se dirige ao Caixa que receberá o pagamento e emitirá os documentos fiscais necessários. A aplicação utilizada pelo Gerente é apenas para parametrizar o sistema e realizar cadastros que serão utilizados pelo Vendedor e Caixa.',
			'pdfs'        => array(
				array(
					'user'      => 'Vendedor',
					'plataform' => 'Mobile',
					'link'      => 'pdf/loja-facil/loja-facil-1.pdf', 
					'img'       => 'pdf/loja-facil/loja-facil-1.jpg'
				),
				array(
					'user'      => 'Caixa',
					'plataform' => 'Desktop/Mobile',
					'link'      => 'pdf/loja-facil/loja-facil-2.pdf', 
					'img'       => 'pdf/loja-facil/loja-facil-2.jpg'
				),
				array(
					'user'      => 'Gerente',
					'plataform' => 'Web',
					'link'      => 'pdf/loja-facil/loja-facil-3.pdf', 
					'img'       => 'pdf/loja-facil/loja-facil-3.jpg'
				)
			)
		),

		'caixafacil' => array(
			'name' 		  => 'Caixa Fácil',
			'icon'		  => 'shopping-cart', 
			'description' => 'O sistema Caixa Fácil possui dois aplicativos, um Desktop para uso do Caixa e outro Web para uso do Gerente. Nesse sistema o cliente a escolhe os produtos que deseja e se dirige ao Caixa que receberá o pagamento e emitirá os documentos fiscais necessários. A aplicação utilizada pelo Gerente é apenas para parametrizar o sistema e realizar cadastros que serão utilizados pelo Caixa.',
			'pdfs'        => array(
				array(
					'user'      => 'Caixa',
					'plataform' => 'Desktop',
					'link'      => 'pdf/caixa-facil/caixa-facil-1.pdf', 
					'img'       => 'pdf/caixa-facil/caixa-facil-1.jpg'
				),
				array(
					'user'      => 'Gerente',
					'plataform' => 'Web',
					'link'      => 'pdf/caixa-facil/caixa-facil-2.pdf', 
					'img'       => 'pdf/caixa-facil/caixa-facil-2.jpg'
				)
			),
			'sections' => array(
				'info' => array(
				 	'name' => 'Informações',
				 	'icon' => 'info',
				 	'contents' => array(
						array(
							'tag'   => 'h4',
							'value' => 'Informações'
						),
						array(
							'tag'   => 'p',
							'value' => '1 Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Diuretics paradis num copo é motivis de denguis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem num gosta di mim que vai caçá sua turmis!'
						),
						array(
							'tag'   => 'p',
							'value' => '2 Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Diuretics paradis num copo é motivis de denguis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem num gosta di mim que vai caçá sua turmis!'
						)
				 	),
				),
				'description' => array(

				 	'name' => 'Descrição',
				 	'icon' => 'heart',
				 	'contents' => array(
						array(
							'tag'   => 'h4',
							'value' => '1 Informações'
						),
						array(
							'tag'   => 'p',
							'value' => '1 Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Diuretics paradis num copo é motivis de denguis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem num gosta di mim que vai caçá sua turmis!'
						),
						array(
							'tag'   => 'p',
							'value' => '2 Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Diuretics paradis num copo é motivis de denguis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem num gosta di mim que vai caçá sua turmis!'
						)
				 	)
				),
				'outher' => array(

				 	'name' => 'Outros',
				 	'icon' => 'shopping-cart',
				 	'contents' => array(
						array(
							'tag'   => 'h4',
							'value' => 'Outros'
						),
						array(
							'tag'   => 'p',
							'value' => '1 Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Diuretics paradis num copo é motivis de denguis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem num gosta di mim que vai caçá sua turmis!'
						),
						array(
							'tag'   => 'p',
							'value' => '2 Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Diuretics paradis num copo é motivis de denguis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem num gosta di mim que vai caçá sua turmis!'
						)
				 	)
				 	
				)

			)

		),
		'vendafacil' => array(
			'name' 		  => 'Venda Fácil',
			'icon'		  => 'shopping-bag',  
			'description' => 'O sistema Venda Fácil possui dois aplicativos, um Mobile para uso do Vendedor e outro Web para uso do Gerente.  A aplicação utilizada pelo Gerente é apenas para parametrizar o sistema e realizar cadastros que serão utilizados pelo Vendedor. O Vendedor é o usuário que realiza as vendas, recebe os pagamentos. Muitas vezes ambos os papéis podem ser exercidos pela mesma pessoa.',
			'pdfs'        => array(
				array(
					'user'      => 'Vendedor',
					'plataform' => 'Mobile',
					'link'      => 'pdf/venda-facil/venda-facil-1.pdf', 
					'img'       => 'pdf/venda-facil/venda-facil-1.jpg'
				),
				array(
					'user'      => 'Gerente',
					'plataform' => 'Web',
					'link'      => 'pdf/venda-facil/venda-facil-2.pdf', 
					'img'       => 'pdf/venda-facil/venda-facil-2.jpg'
				)
			)
		)

	);

	return $products;

}


 ?>