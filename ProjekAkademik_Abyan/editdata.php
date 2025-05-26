<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengguna</title>
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
            max-width: 500px;
            text-align: center;
        }

        h3 {
            color: #ff5733;
            margin-bottom: 15px;
        }

       
        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            background: #ff5733;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #e64a19;
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
    <h3>Edit Data Pengguna</h3>
    <a href="data_pengguna.php" class="btn-home">Lihat Semua Data</a>
    <br><br>

    <?php
    session_start();
    include "koneksi.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM pengguna WHERE id_pengguna='$id'";
    $result2 = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result2)) { 
    ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>ID Pengguna</td>
                    <td>
                        <input type="hidden" name="id_pengguna" value="<?= htmlspecialchars($row['id_pengguna']) ?>">
                        <strong><?= htmlspecialchars($row['id_pengguna']) ?></strong>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?= htmlspecialchars($row['username']) ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="<?= htmlspecialchars($row['password']) ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php 
    } 
    ?>
</div>

</body>
</html>
