<?php
$products = json_decode(file_get_contents('file.json'), true);
$productTitles = [
    'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops',
    'Mens Casual Premium Slim Fit T-Shirts',
    'White Gold Plated Princess',
    "Lock and Love Women's Removable Hooded Faux Leather Moto Biker Jacket",
    "DANVOUY Womens T Shirt Casual Cotton Short",
    "Rain Jacket Women Windbreaker Striped Climbing Raincoats",
    "SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s",
    "Silicon Power 256GB SSD 3D NAND A55 SLC Cache Performance Boost SATA III 2.5",
    "WD 4TB Gaming Drive Works with Playstation 4 Portable External Hard Drive",
    "WD 2TB Elements Portable External Hard Drive - USB 3.0",
    "Solid Gold Petite Micropave",
    "Mens Cotton Jacket",
    "Mens Casual Slim Fit",
    "Solid Gold Petite Micropave",
    "Acer SB220Q bi 21.5 inches Full HD (1920 x 1080) IPS Ultra-Thin",
    "Opna Women's Short Sleeve Moisture"
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 2: Product Search Feature</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <section class="py-10 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">All Products</h2>
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <?php foreach ($products as $product):
                    $available = false;
                    if (in_array($product['title'], $productTitles)):
                        $available = true;
                    endif;
                    include "product-card.php";
                endforeach; ?>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
    <script>
        var addToCart = 0

        function handleAddToCart() {
            var addToCartEle = document.getElementById('addToCart');
            addToCart++
            addToCartEle.innerHTML = addToCart
        }
    </script>
</body>

</html>