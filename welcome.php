<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-color: #f5f5dc;
            
        }
    </style>
</head>
<body>
    <?php echo "<h1>Welcome " . htmlspecialchars($_SESSION['username']) . "</h1>"; ?>
    <h1>Selamat kamu berhasil Login</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
