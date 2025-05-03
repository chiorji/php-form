<?php
$page_css = ['login.css'];
include_once __DIR__ . '/../components/header.php';
?>
<div class="main-content">
    <?php if (isset($error)): ?>
        <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <div class="login-container">
        <div class="decoration top"></div>
        <div class="decoration bottom floating"></div>
        <div class="decoration middle"></div>

        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Login to access your account</p>
        </div>

        <form class="login-form" id="loginForm" action="../handlers/login-handler.php" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>

            <div class="form-group">
                <button type="submit" class="btn">Login</button>
            </div>

            <div class="signup-prompt">
                <p>Don't have an account? <a href= "signup.php">Sign up now</a></p>
            </div>
        </form>
    </div>
</div>

<script>
    // Add animation to form elements
    const formControls = document.querySelectorAll('.form-control');
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.classList.add('active');
        });

        control.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('active');
            }
        });
    });
</script>