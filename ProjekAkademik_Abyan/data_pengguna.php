<?php
session_start();
include "koneksi.php";

$sql = "SELECT * FROM pengguna";
$result2 = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
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
            padding: 20px;
        }

        .container {
            background: white;
            color: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            text-align: center;
            overflow-x: auto;
        }

        h2 {
            margin-bottom: 15px;
            color: #ff5733;
        }

        
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            min-width: 600px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 14px;
        }

        th {
            background: #ff5733;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #ffcccb;
        }

        
        .btn {
            padding: 8px 12px;
            margin: 5px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-edit {
            background: #ff9800;
            color: white;
        }

        .btn-edit:hover {
            background: #e68900;
        }

        .btn-delete {
            background: #e74c3c;
            color: white;
        }

        .btn-delete:hover {
            background: #c0392b;
        }

        .btn-home {
            background: #3498db;
            color: white;
            padding: 10px 15px;
            display: inline-block;
            margin-top: 10px;
        }

        .btn-home:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pengguna</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID Pengguna</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result2)) { 
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id_pengguna']) . "</td>";
    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
    echo "<td>" . htmlspecialchars($row['password']) . "</td>";
    echo "<td>";
    echo "<a href='editdata.php?id=" . urlencode($row['id_pengguna']) . "' class='btn btn-edit'>Edit</a> ";
    echo "<a href='hapusdata.php?id=" . urlencode($row['id_pengguna']) . "' class='btn btn-delete'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}  ?>
                </tbody>
            </table>
        </div>
        <a href="home.php" class="btn btn-home">Back Home</a>
    </div>
</body>
</html>
