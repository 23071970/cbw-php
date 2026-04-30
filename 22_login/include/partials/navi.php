<a href="index.php">Home</a> |
<a href="geheim.php">Geheim</a> |
<a href="topfsecret.php">Topfsecret</a> |



<?php if (isLoggedIn()) : ?>
    <a href="logout.php">Logout</a>
<?php else: ?>
    <a href="register.php">Register</a> |
    <a href="login.php">Login</a> |
<?php endif ?>