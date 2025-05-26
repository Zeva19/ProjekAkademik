<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ff1a1a, #ff6600);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            color: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #ff5733;
            margin-bottom: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            text-align: left;
            width: 100%;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button[type="submit"] {
            background: #ff5733;
            color: white;
        }

        button[type="submit"]:hover {
            background: #e64a19;
        }

        button[type="reset"] {
            background: #e74c3c;
            color: white;
        }

        button[type="reset"]:hover {
            background: #c0392b;
        }

        .btn-home {
            display: inline-block;
            margin-top: 10px;
            padding: 10px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-home:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Pengguna</h2>

    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?= htmlspecialchars($_GET['error']); ?></p>
    <?php } ?>

    <form action="proses_tambah.php" method="post">
        <label>ID Pengguna</label>
        <input type="text" name="id_pengguna" placeholder="Id Pengguna (user0x)" required>

        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Tambah</button>
        <button type="reset">Reset</button>
    </form>

    <a href="data_pengguna.php" class="btn-home">Lihat Semua Data</a>
</div>

</body>
</html>
