<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<div class="main-layout">

    <?php require base_path('views/partials/topbar.php') ?>

    <div class="login-page" id="login-page" style="background-color: whitesmoke;">
        
        <div class="login-content">
            <h2 class="login-title" >
                <span class="h2-span">Register</span>
            </h2>

            <form action="/register" method="POST" class="auth-form">

                <div class="email">
                    <i class="fa-regular fa-user"></i>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email Address" 
                        id="email-input"
                        required>
                </div>

                <div class="password">
                    <i class="fa-solid fa-key"></i>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        id="password-input"
                        required>
                </div>

                <button type="submit" style="background-color: slateblue; color:whitesmoke">
                    Register
                </button>

            </form>
        </div>

    </div>

</div>

<?php require base_path('views/partials/footer.php') ?>
