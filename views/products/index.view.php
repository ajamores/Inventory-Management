<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>


    <div class="main-layout">
        
        <?php require base_path('views/partials/topbar.php') ?>

        <div class="main-content">


            <div class="products">
                <?php foreach($products as $product): ?>
                    <div class="product">
                        <img src="<?= $product['image_url'] ?>" alt="<?= $product['name'] ?>">
                        <h2><?= $product['name'] ?></h2>
                        <h3><?= $product['category'] ?></h3>
                        <h3><?= $product['type'] ?></h3>
                        <h2 class="qty">Quantity: <?= $product['quantity'] ?></h2>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        
    </div>

<?php require base_path('views/partials/footer.php') ?>