<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$data = array(
	'products' => [
		array(
			"link" => "https://www.luxxu.net/furniture/prisma-side-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/tables-and-desks/prisma-side-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "prisma",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "side-table",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/furniture/beyond-side-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/tables-and-desks/beyond-side-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "beyond",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "side-table",
		    "partner" => true,
		), 
	 	array(
			"link" => "https://www.luxxu.net/furniture/beyond-dining-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/tables-and-desks/beyond-dining-table-luxxu.jpg",
		   	"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "beyond",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "dining-table",
		    "partner" => true,
		), 
	 	array(
			"link" => "https://www.luxxu.net/furniture/littus-dining-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/tables-and-desks/littus-dining-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "littus",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "dining-table",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/products/empire-center-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/tables-and-desks/empire-center-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "empire",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "center-table",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/products/empire-side-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/tables-and-desks/empire-big-side-table-luxxu.jpg",
		   	"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "empire",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "side-table",
		    "partner" => true,
		), 
		array(
			"link" => "https://www.luxxu.net/products/empire-small-side-table.php",
			"image"=> "https://www.luxxu.net/images/ext-campaign/partners/tables-and-desks/empire-small-side-table-luxxu.jpg",
			"brand" => "luxxu",
		    "brand_link" => "https://www.luxxu.net/",
		    "name" => "empire small",
		    "category_link" => "https://www.luxxu.net/lighting/",
		    "category" => "side-table",
		    "partner" => true,
		)   
	]
);


echo json_encode($data);