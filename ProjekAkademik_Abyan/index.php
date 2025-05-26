<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }


        body {
            background: linear-gradient(135deg, #ff1a1a, #ff6600);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }


        /* Efek Gelombang */
        body::before {
            content: "";
            position: absolute;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 10%, transparent 70%);
            top: -100%;
            left: -100%;
            animation: wave 10s infinite linear;
        }


        @keyframes wave {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }


        .container {
            display: flex;
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            width: 350px;
            flex-direction: column;
            align-items: center;
            animation: fadeIn 1s ease-in-out;
            position: relative;
            z-index: 1;
        }


        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .login-box h3 {
            color: white;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }


        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
            transition: 0.3s;
            outline: none;
        }


        .login-box input::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }


        .login-box input:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }


        .login-box button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #ff1a1a, #ff6600);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
        }


        .login-box button::before {
            content: "";
            position: absolute;
            width: 0%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            top: 0;
            left: 0;
            transition: 0.4s;
        }


        .login-box button:hover::before {
            width: 100%;
        }


        .login-box button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
        }


        .login-box p {
            color: white;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }



        .login-box p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>


<div class="container">
    <div class="login-box">
        <h3>Login</h3>
        <form action="login.php" method="post">
            <input type="text" name="uname" placeholder="Masukkan username" required>
            <input type="password" name="password" placeholder="Masukkan password" required>
            <button type="submit">LOGIN</button>
        </form>
        
    </div>
</div>


</body>
</html>



