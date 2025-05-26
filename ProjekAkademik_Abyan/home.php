<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #ff1a1a, #ff6600);
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            width: 320px;
        }
        h1 {
            color: #FF512F;
            font-size: 22px;
            margin-bottom: 15px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            transition: 0.3s;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .btn:first-child { background: #ff1a1a; color: white; }
        .btn:nth-child(2) { background: #ff6600; color: white; }
        .btn.logout { background: #ff1a1a; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <div class="links">
                <a href="data_pengguna.php" class="btn">Data Pengguna</a>
                <a href="tambah_pengguna.php" class="btn">Tambah Pengguna</a>
                <a href="logout.php" class="btn logout">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
