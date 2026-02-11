<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<div class="main-layout">

    <div class="main-content">
        <h1 class="add-h1">Add a Product</h1>
        
        <form method="POST" action="/products" class="product-form">

            <div class="form-section">
                <div class="form-layout">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
                    <?php if(isset($errors['name'])): ?>
                        <p class="error"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-layout">
                    <label for="sku">SKU:</label>
                    <input type="text" name="sku" id="sku" value="<?= htmlspecialchars($_POST['sku'] ?? '') ?>" required>
                    <?php if(isset($errors['sku'])): ?>
                        <p class="error"><?= $errors['sku'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-section">
                <div class="form-layout">
                    <label for="category">Category:</label>
                    <input type="text" name="category" id="category" value="<?= htmlspecialchars($_POST['category'] ?? '') ?>" required>
                    <?php if(isset($errors['category'])): ?>
                        <p class="error"><?= $errors['category'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-layout">
                    <label for="type">Type:</label>
                    <input type="text" name="type" id="type" value="<?= htmlspecialchars($_POST['type'] ?? '') ?>" required>
                    <?php if(isset($errors['type'])): ?>
                        <p class="error"><?= $errors['type'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-section">
                <div class="form-layout">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="<?= htmlspecialchars($_POST['quantity'] ?? '') ?>" required>
                    <?php if(isset($errors['quantity'])): ?>
                        <p class="error"><?= $errors['quantity'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-layout">
                    <label for="image_url">Image URL:</label>
                    <input type="text" name="image_url" id="image_url" value="<?= htmlspecialchars($_POST['image_url'] ?? '') ?>" required>
                    <?php if(isset($errors['image_url'])): ?>
                        <p class="error"><?= $errors['image_url'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-btns">
                <a href="/products" class="cancel-btn">Cancel</a>
                <button type="submit" class="submit-btn">Save</button>
            </div>
        </form>
        
    </div>
</div>

<?php require base_path('views/partials/footer.php') ?>