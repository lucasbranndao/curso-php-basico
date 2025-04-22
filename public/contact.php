<?php

declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../resources/helpers.php';

// use App\Models\Product;

// $products = Product::all();
// $filteredProducts = array_filter($products,  static fn($product) => $product['is_available']);

$title = 'My WebStore';
$heading = 'Contact';


require __DIR__ . '/../resources/views/contact.php';
