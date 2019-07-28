<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$data = array(
	'products' => [
	 	array(
			"link" => "https://www.luxxu.net/furniture/vertigo-console.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/consoles-and-sideboards/vertigo-console-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "vertigo",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "console",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/furniture/beyond-console.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/consoles-and-sideboards/beyond-console-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "beyond",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "console",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/furniture/tenor-sideboard.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/consoles-and-sideboards/tenor-sideboard-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "tenor",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "sideboard",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/furniture/darian-sideboard.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/consoles-and-sideboards/darian-sideboard-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "darian",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "sideboard",
		    "partner" => true,
		) 
	]
);


echo json_encode($data);