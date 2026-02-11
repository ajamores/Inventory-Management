    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <h1>Garland Inventory</h1>
        <nav class="navbar">
            <ul>
                <li class="<?= urlIs("/") ? 'active' : '' ?>">
                    <a href="/" aria-current="page">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>
                </li>

                <li class="<?= urlIs("/products") ? 'active' : '' ?>">
                    <a href="/products">
                        <i class="fa-solid fa-cube"></i>
                        Products
                    </a>
                </li>

                <li class="<?= urlIs("/reports") ? 'active' : '' ?>">
                    <a href="/reports">
                        <i class="fa-solid fa-chart-simple"></i>
                        Reports
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
