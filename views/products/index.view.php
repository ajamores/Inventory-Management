
<?php require base_path('views/partials/head.php') ?>


<?php require base_path('views/partials/nav.php') ?>

<!-- Main Content Area -->
<div class="flex-1 flex flex-col overflow-hidden">
    
    <?php require base_path('views/partials/searchbar.php') ?>

    <!-- Dashboard Content -->
    <main class="flex-1 flex overflow-auto p-2">

        <?php foreach($products as $product): ?>
            <div class="container max-w-sm h-96 rounded  shadow-lg hover:bg-gray-50 transition duration-150 hover:-translate-y-2 hover:shadow-xl">
                <img class="w-full" src="<?= $product['image_url'] ?>" alt="<?= $product['name'] ?>">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><?= $product['name'] ?></div>
                    <p class="text-gray-700 text-base">
                        <?= $product['category']?>
                    </p>
                    <p class="text-gray-500 text-base">
                        <?= $product['type']?>
                    </p>
                    <p class="text-gray-500 text-base">
                        Quantity: <?= $product['quantity']?>
                    </p>
                    
                </div>
            </div>
        <?php  endforeach ?>

    </main>

</div>
