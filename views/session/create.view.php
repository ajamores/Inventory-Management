<?php require base_path('views/partials/head.php') ?>

<div class="login-page" id="login-page">

    <div class="login-content">
        <h2 class="login-title" id="login-title">
            Inventory Management <span class="h2-span">System</span>
        </h2>
        <form action="/session" method="POST" class="auth-form">
            <div class="email" id="email">
                <i class="fa-regular fa-user"></i>
                <input 
                name="email"
                type="email" 
                placeholder="Email Address"
                id="email-input"
                required>
            </div>

            <?php if(isset($errors['email'])): ?>
            <p class=style="color: red;"> <?= $errors['email'] ?> </p>
            <?php endif; ?>

            <div class="password" id="password">
                <i class="fa-solid fa-key"></i>
                <input type="password" 
                name="password"
                placeholder="Password"
                id="password-input"
                required>
            </div>

            <?php if(isset($errors['password'])): ?>
                    <p style="color: red;"> <?= $errors['password'] ?> </p> 
            <?php endif; ?>

            <button type="submit">Login</button>
    
            <?php if(isset($errors['auth'])): ?>
            <p style="color: red;"> <?= $errors['auth'] ?> </p>
            <?php endif; ?>
        </form>
    </div>
</div>

<?php require base_path('views/partials/footer.php') ?>