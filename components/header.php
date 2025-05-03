<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current_file = basename($_SERVER['PHP_SELF']);
$is_in_pages = strpos($_SERVER['REQUEST_URI'], '/pages/') !== false;
$base_path = $is_in_pages ? '../' : '';

$page_css = isset($page_css) ? $page_css : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | School Project</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/header.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/main.css">
    <?php foreach ($page_css as $css_file): ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>css/<?php echo $css_file; ?>">
    <?php endforeach; ?>
</head>

<header class="header">
    <div class="nav-container">
        <a href="<?php echo $base_path; ?>index.php" class="logo">
            <span class="logo-icon">✦</span>
            <span class="logo-text">COS471</span>
        </a>

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="<?php echo $base_path; ?>index.php" class="nav-link <?php echo $current_file === 'index.php' ? 'active' : ''; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $base_path; ?>pages/login.php" class="nav-link <?php echo $current_file === 'login.php' ? 'active' : ''; ?>">Login</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $base_path; ?>pages/signup.php" class="nav-link <?php echo $current_file === 'signup.php' ? 'active' : ''; ?>">Sign Up</a>
            </li>
        </ul>

        <div class="menu-toggle">☰</div>
    </div>
</header>

<script>
    // Mobile menu toggle
    document.querySelector('.menu-toggle')?.addEventListener('click', function() {
        document.querySelector('.nav-menu')?.classList.toggle('active');
    });
</script>