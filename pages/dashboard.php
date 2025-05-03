<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']){
    $_SESSION['login_redirect'] = true;
    header("Location: ../pages/login.php");
    exit();
}
?>

<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
<div class="dashboard-container">
    <p>Your user ID: <?php echo $_SESSION['user_id']; ?></p>
    <a href="../pages/logout.php" class="btn">Logout</a>
</div>

