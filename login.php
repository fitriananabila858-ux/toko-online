<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-box {
      background: pink;
      padding: 30px;
      width: 320px;
      border-radius: 15px;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #222;
    }

    input {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
    }

    button {
      width: 95%;
      padding: 10px;
      margin-top: 15px;
      background: #ff4d6d;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #e63950;
    }

    .text-kecil {
      margin-top: 15px;
      font-size: 12px;
      color: gray;
    }
  </style>
</head>

<body>

  <div class="login-box">
    <h2>Login Admin</h2>

    <form action="proses_login.php" method="POST">
      <input type="text" name="username" placeholder="Masukkan Username" required>
      <input type="password" name="password" placeholder="Masukkan Password" required>
      <button type="submit">Login</button>
    </form>

    <p class="text-kecil">Toko Tas Online © 2026</p>
  </div>

</body>
</html>