<?php
$page = new T('cphdot');
$r = '';

$interface = new Display();

$cphdot = 
array(
	'home'=>array(
		'title'=>'Private label and store brands for Denmark and Scandinavia | CPH DOT',
		'description'=>'Based in Copenhagen, with a wide network of manufacturers and suppliers in China, we can give you the best deal for your private label products.',
		'template'=>'tpl/front.html'),
	
	'about'=>array(
		'title'=>'The right partner for your store brands and private label | CPH DOT',
		'description'=>'Connecting retail chains with manufacturers for private label and store brands. CPH DOT helps develop and source products for a number of retail chains and innovative start-ups.',
		'template'=>'tpl/about.html'),
	
	'products'=>array(
		'title'=>'Private label and store brand expert for Scandinavian retailers | CPH DOT',
		'description'=>'CPH DOT makes sourcing and product development in China easy. Everything from electronics, games, toys, interior, gadgets and D.I.Y. to gardening, tools, pet accessories, stationary and household items.',
		'template'=>'tpl/products.html'),
	
	'partners'=>array(
		'title'=>'Private label and store brand expert in Denmark and Scandinavia',
		'description'=>'We can make sure you get the best partners for your private label products. Feel free to contact us with any Product development or Private label request.',
		'template'=>'tpl/partners.html'),
);


//die(json_encode($cphdot));

//Default title
T::title('CPH DOT - Your production partner for China');

if(IS_AJAX){
	$page->main($interface->res($html));
	echo $page->content();
}
else{
	T::$page['tpl'][] = RELPATH.'tpl/front.html';
	T::$page['tpl'][] = RELPATH.'tpl/voltcase.html';
	T::$page['tpl'][] = RELPATH.'tpl/about.html';
	T::$page['tpl'][] = RELPATH.'tpl/products.html';
	T::$page['tpl'][] = RELPATH.'tpl/partners.html';
	
	T::$page['js'][] = RELPATH.'js/router.js';
	T::$page['js'][] = RELPATH.'js/frontview.js';
	T::$page['js'][] = RELPATH.'js/aboutview.js';
	T::$page['js'][] = RELPATH.'js/voltcase.js';
	T::$page['js'][] = RELPATH.'js/productsview.js';
	T::$page['js'][] = RELPATH.'js/partnersview.js';
	
	T::$page['css'][] = RELPATH.'style.css';
	
	T::$page['icon'] = RELPATH.'img/cphdot.ico';
	
	
	echo $interface->show();
}
?>