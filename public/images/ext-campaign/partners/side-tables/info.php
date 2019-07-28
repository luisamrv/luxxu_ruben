<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$data = array(
	'products' => [
		array(
			"link" => "https://www.luxxu.net/furniture/beyond-side-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/side-tables/beyond-side-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "beyond",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "side-table",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/products/empire-side-table-small.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/side-tables/empire-small-side-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "empire-small",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "side-table",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/products/empire-side-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/side-tables/empire-big-side-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "empire",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "side-table",
		    "partner" => true,
		)
	]
);


echo json_encode($data);