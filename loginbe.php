<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url("img/1st-section.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      .login-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.8);
        padding: 100px;
        border-radius: 8px;
        text-align: center;
      }

      .login-container h2 {
        margin-bottom: 20px;
      }

      .input-group {
        margin-bottom: 15px;
      }

      .input-group label {
        display: block;
        margin-bottom: 5px;
      }

      .input-group input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      button {
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button:hover {
        background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="login-container">
      <h2>Silahkan Login!</h2>
      <form action="loginbe_p.php" method="post">
        <div class="input-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="input-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  </body>
</html>
