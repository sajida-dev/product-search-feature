<div class="bg-white p-4 rounded-lg shadow-lg w-64">
    <img src="<?php echo $product['image'] ?>" alt="Product" class="w-full h-48 object-cover rounded-lg">
    <div class="flex justify-end mt-3">
        <?php if ($available): ?>
            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm  border border-green-400 ">Stock</span>
        <?php else: ?>
            <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm  border border-red-300">Out of Stock</span>
        <?php endif; ?>
    </div>
    <h3 class="text-lg font-semibold mt-3"><?php echo $product['title'] ?></h3>
    <div class="flex justify-between items-center mt-3">
        <span class="text-lg font-bold text-blue-600"><?php echo '$' . $product['price'] ?></span>
        <button class="bg-blue-600 text-white px-3 py-1 rounded-md hover:bg-blue-700 <?php if (!$available) echo 'opacity-50 cursor-not-allowed' ?>" onclick="handleAddToCart()" <?php if (!$available) echo 'disabled' ?>>
            Add to Cart
        </button>
        <!--  -->
    </div>
</div>