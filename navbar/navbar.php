<?php
session_start();

// Example login simulation
if (isset($_GET['login'])) {
    $_SESSION['user'] = 'John Doe';
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Official Navbar</title>
    <
</head>
<body>

<nav class="navbar">
    <div class="logo">MyCompany</div>
    <ul class="nav-links" id="navLinks">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown">
            <a href="#">Services ▾</a>
            <ul class="dropdown-menu">
                <li><a href="#">Design</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Marketing</a></li>
            </ul>
        </li>
        <li><a href="#">Contact</a></li>
        <li>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="?logout=true">Logout (<?= htmlspecialchars($_SESSION['user']) ?>)</a>
            <?php else: ?>
                <a href="?login=true">Login</a>
            <?php endif; ?>
        </li>
    </ul>
    <div class="menu-toggle" id="menuToggle">☰</div>
</nav>


</body>
</html>
