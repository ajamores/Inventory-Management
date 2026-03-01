    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="side-icon">
            <i class="fa-solid fa-warehouse"></i>
            <h1 class="logo-full">Garland Inventory</h1>
        </div>
        <nav class="navbar">
            <ul>
                <li class="<?= urlIs("/") ? 'active' : '' ?>">
                    <a href="/" aria-current="page">
                        <i class="fa-solid fa-house"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="<?= urlIs("/products") ? 'active' : '' ?>">
                    <a href="/products">
                        <i class="fa-solid fa-cube"></i>
                        <span class="nav-text">Products</span>
                    </a>
                </li>

                <li class="<?= urlIs("/reports") ? 'active' : '' ?>">
                    <a href="/reports">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Reports</span>
                    </a>
                </li>

                <li class="<?= urlIs("/register") ? 'active' : '' ?>">
                    <a href="/register">
                        <i class="fa-solid fa-people-group"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>

                <li>
                    <form action="/session" method="POST" class="nav-form">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="nav-button">
                            <i class="fa-solid fa-door-open"></i>
                            <span class="nav-text">Logout</span>
                        </button>
                    </form>
                </li>

                <li>
                    <button class="nav-button" id="nav-last">
                        <i class="fa-solid fa-angles-right"></i>
                        <span class="nav-text">Collapse</span>
                    </button>
                </li>

            </ul>
        </nav>
    </aside>

    <script>
        const resizeBtn = document.getElementById('nav-last');
        const sidebar = document.querySelector('.sidebar');

        // Restore state before render
        if(localStorage.getItem('sidebar') !== 'collapsed'){
            sidebar.classList.add('sb-expanded');
        }

        resizeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            sidebar.classList.toggle('sb-expanded');

            if(sidebar.classList.contains('sb-expanded')){
                localStorage.setItem('sidebar', 'expanded');
            } else {
                localStorage.setItem('sidebar', 'collapsed');
            }
        });
    </script>