<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$data = array(
	'products' => [
	 	array(
			"link" => "https://www.luxxu.net/furniture/crown-mirror.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/mirrors/crown-mirror-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "crown",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "mirror",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/furniture/majestic-xl-wall-light-mirror.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/mirrors/majestic-xl-wall-light-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "majestic xl",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "mirror",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/furniture/darian-gold-mirror.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/mirrors/darian-gold-mirror-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "darian gold",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "mirror",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/furniture/darian-black-mirror.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/mirrors/darian-black-mirror-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "darian black",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "mirror",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/furniture/empire-mirror.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/mirrors/empire-mirror-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "empire",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "mirror",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/products/majestic-wall-light-mirror.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/mirrors/majestic-mirror-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "majestic",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "mirror",
		    "partner" => true,
		),
	 	array(
			"link" => "https://www.luxxu.net/furniture/mcqueen-wall-light-mirror.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/mirrors/mcqueen-wall-mirror-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "mcqueen",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "mirror",
		    "partner" => true,
		)
	]
);


echo json_encode($data);