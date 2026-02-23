<?php require base_path('views/partials/head.php') ?>

<div class="login-page" id="login-page">

    <div class="login-content">
        <h2 class="login-title" id="login-title">
            Inventory Management <span class="h2-span">System</span>
        </h2>
        <form action="/session" method="POST" class="auth-form">
            <div class="email" id="email">
                <i class="fa-regular fa-user"></i>
                <input type="text" 
                name="email", 
                type="email" 
                placeholder="Email Address"
                id="email"
                required>
            </div>

            <div class="password" id="password">
                <i class="fa-solid fa-key"></i>
                <input type="text" 
                name="password", 
                type="password" 
                placeholder="Password"
                id="email"
                required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</div>

<?php require base_path('views/partials/footer.php') ?>