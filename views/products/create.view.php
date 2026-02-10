<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>


    <div class="main-layout">
        
        <?php require base_path('views/partials/topbar.php') ?>

        <div class="main-content">

            <h1 class="add-h1">Add a Product</h1>
            <form action="POST" method="/products" class="product-form">

                <div class="form-layout">
                    <label for="name">Name:</label>
                    <input type="text", name="name" required>
                </div>

                
                <div class="form-layout">
                    <label for="sku">SKU:</label>
                    <input type="text", name="sku" required>
                </div>

                
                <div class="form-layout">
                    <label for="category">Category:</label>
                    <input type="text", name="category" required>
                </div>

                
                <div class="form-layout">
                    <label for="type">Type:</label>
                    <input type="text", name="type" required>
                </div>

                
                <div class="form-layout">
                    <label for="quantity">Name:</label>
                    <input type="number", name="quantity" required>
                </div>

                <div class="form-layout">
                    <label for="image_url">Image_URL:</label>
                    <input type="text", name="image_url" required>
                </div>



            </form>
            <a href="/products" class="cancel-btn">Cancel</a>
        </div>
        
    </div>

<?php require base_path('views/partials/footer.php') ?>