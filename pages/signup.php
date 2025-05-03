<?php
$page_css = ['signup.css'];
include_once __DIR__ . '/../components/header.php';
?>
<div class="main-content">
    <div class="signup-container">
        <div class="decoration top"></div>
        <div class="decoration bottom floating"></div>
        <div class="decoration middle"></div>

        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
        <div class="signup-header">
            <h1>Create Your Account</h1>
            <p>Join our community today!</p>
        </div>

        <form class="signup-form" id="signupForm" action="../handlers/signup-handler.php" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter your first name" required>
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter your last name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Create a strong password" required>
            </div>

            <div class="form-group">
                <label for="securityQuestion">Security Question</label>
                <select id="securityQuestion" name="securityQuestion" class="form-control" required>
                    <option value="" disabled selected>Choose a security question</option>
                    <option value="pet">What was the name of your first pet?</option>
                    <option value="street">What street did you grow up on?</option>
                    <option value="mother">What is your mother's maiden name?</option>
                    <option value="school">What was the name of your first school?</option>
                    <option value="car">What was your first car?</option>
                </select>
            </div>

            <div class="form-group">
                <label for="securityAnswer">Security Answer</label>
                <textarea id="securityAnswer" name="securityAnswer" class="form-control" placeholder="Enter your answer here" required></textarea>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn">Sign Up Now</button>
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

