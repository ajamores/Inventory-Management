<div class="product-stats">

    <div class="stat">
        <div class="stat-info">
            <p>Total Products</p>
            <h2><?= htmlspecialchars($length) ?></h2>
        </div>
        <i class="fa-solid fa-cube"></i>
    </div>
    
    <div class="stat">
        <div class="stat-info">
            <p>Low Stock</p>
            <h2><?= htmlspecialchars($lowStock) ?></h2>
        </div>
        <i class="fa-solid fa-triangle-exclamation" style="color: #fd5656;"></i>
    </div>

    <div class="stat">
        <div class="stat-info">
            <p>Categories</p>
            <h2><?= htmlspecialchars($totalCategories) ?></h2>
        </div>
        <i class="fa-solid fa-tag" style="color: #ff933b;"></i>
    </div>

    <div class="stat">
        <div class="stat-info">
            <p>Suppliers</p>
            <h2>10</h2>
        </div>
        <i class="fa-solid fa-people-group"></i>
    </div>

</div>