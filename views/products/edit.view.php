<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<div class="main-layout">

    <div class="main-content">
        <h1 class="add-h1"><?= $heading ?></h1>
        
        <form method="POST" action="/products"  class="product-form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <div class="form-section">
                <div class="form-layout">
                    <label for="name">Name:</label>
                    <!--MUST DO EVERYWHERE you echo user data into HTM -->
                    <input type="text" name="name" id="name" value="<?= htmlspecialchars($product['name']) ?>" required>
                    <?php if(isset($errors['name'])): ?>
                        <p class="error"><?= htmlspecialchars($errors['name']) ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-layout">
                    <label for="sku">SKU:</label>
                    <input type="text" name="sku" id="sku" value="<?= htmlspecialchars($product['sku']) ?>" required>
                    <?php if(isset($errors['sku'])): ?>
                        <p class="error"><?= htmlspecialchars($errors['sku']) ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-section">
                <div class="form-layout">
                    <label for="category">Category:</label>
                    <input type="text" name="category" id="category" value="<?= htmlspecialchars($product['category']) ?>" required>
                    <?php if(isset($errors['category'])): ?>
                        <p class="error"><?= htmlspecialchars($errors['category']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-layout">
                    <label for="type">Type:</label>
                    <input type="text" name="type" id="type" value="<?= htmlspecialchars($product['type']) ?>" required>
                    <?php if(isset($errors['type'])): ?>
                        <p class="error"><?= $errors['type'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-section">
                <div class="form-layout">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="<?= htmlspecialchars($product['quantity']) ?>" required>
                    <?php if(isset($errors['quantity'])): ?>
                        <p class="error"><?= $errors['quantity'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-layout">
                    <label for="image_url">Image URL:</label>
                    <input type="text" name="image_url" id="image_url" value="<?= htmlspecialchars($product['image_url']) ?>" required>
                    <?php if(isset($errors['image_url'])): ?>
                        <p class="error"><?= $errors['image_url'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-btns">
                <a href="/products" class="cancel-btn">Cancel</a>
                <button type="submit" class="submit-btn">Save</button>
            </div>

            <!-- Separate delete form -->
            <form method="POST" action="/products">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>
        </form>
        
    </div>
</div>

<?php require base_path('views/partials/footer.php') ?>