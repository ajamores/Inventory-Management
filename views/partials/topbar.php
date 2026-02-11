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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.querySelector('input[name="search"]');
            const products = document.querySelectorAll('.product');

            searchInput.addEventListener('input', () => {
                const query = searchInput.value.toLowerCase();

                products.forEach(product => {
                    const name = product.querySelector('h2').textContent.toLowerCase();
                    const sku = product.querySelector('h3').textContent.toLowerCase();
                    const category = product.querySelectorAll('h3')[1].textContent.toLowerCase(); // adjust index if needed

                    if(name.includes(query) || sku.includes(query) || category.includes(query)){
                        product.style.display = 'flex';
                    } else {
                        product.style.display = 'none';
                    }
                });
            });
        });
    </script>


</header>