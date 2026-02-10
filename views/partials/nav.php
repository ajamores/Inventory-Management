    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <h1>Garland Inventory</h1>
        <nav class="navbar">
            <ul>
                <li class="<?= urlIs("/") ? 'active' : '' ?>">
                    <i class="fa-solid fa-house"></i>
                    <a href="/" aria-current="page" >Dashboard</a>
                </li>
                <li class="<?= urlIs("/products") ? 'active' : '' ?>">
                    <i class="fa-solid fa-cube"></i>
                    <a href="/products">Products</a>
                </li>
                <li class="<?= urlIs("/reports") ? 'active' : '' ?>">
                    <i class="fa-solid fa-chart-simple"></i>
                    <a href="#">Reports</a>
                </li>
            </ul>
        </nav>
    </aside>
