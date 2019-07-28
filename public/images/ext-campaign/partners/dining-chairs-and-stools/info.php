<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$data = array(
	'products' => [
	 	array(
			"link" => "https://www.luxxu.net/furniture/prisma-stool.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/dining-chairs-and-stools/prisma-stool-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "prisma",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "stool",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/furniture/noir-stool.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/dining-chairs-and-stools/noir-stool-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "noir",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "stool",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/furniture/armour-stool.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/dining-chairs-and-stools/armour-stool-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "armour",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "stool",
		    "partner" => true,
		)
	]
);


echo json_encode($data);