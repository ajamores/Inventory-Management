<header class="topbar">

    <?php if(urlIs('/products')): ?>
        
        <div class="search-container">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" name="search" placeholder="Search products...">
        </div>

        <div class="add-product">
                <i class="fa-solid fa-plus"></i>
                <a href="/products/create">Add Product</a>
        </div>

    <?php else: ?>

    <!--Omitting search bar to pther pages besides products page and cause spacing looks off without hiding it -->
        <div class="search-container-hidden">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" name="search" placeholder="Search products...">
        </div>

    <?php endif; ?>

</header>