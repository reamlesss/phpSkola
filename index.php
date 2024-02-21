<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Login</title>
</head>

<body>

  <?php include './assets/navbar.php' ?>

  <div class="button-container" id="button-container">
    <div>
      <button onclick="showLoginForm()">Login</button>
      <button onclick="showRegisterForm()">Register</button>
    </div>
  </div>



  <div class="form-container" id="login-form">
    <div>
      <form action="login.php" method="post">

        <input type="text" name="username" required placeholder="username" class="animFirst">


        <input type="password" name="password" required placeholder="password" class="animSecond">

        <div class="center-button">
          <input type="submit" value="Login" id="button">
          <button id="button" class="return-button" onclick="goToMenu('login-form')">Menu</button>
        </div>
      </form>`
    </div>
  </div>

  <div class="form-container" id="register-form">
    <div>
      <form action="register.php" method="post">

        <input type="text" name="username" required class="animFirst" placeholder="username">


        <input type="password" name="password" required class="animSecond" placeholder="password">


        <input type="password" name="confirm-password" required class="animThird" placeholder="confirm password">

        <div class="center-button">
          <input type="submit" value="Register" id="button">
          <button id="button" class="return-button" onclick="goToMenu('register-form')">Menu</button>
        </div>
      </form>
    </div>
  </div>




  <script>
    function showLoginForm() {
      document.getElementById('login-form').style.display = 'flex';
      document.getElementById('button-container').style.display = 'none';
    }
    function showRegisterForm() {
      document.getElementById('register-form').style.display = 'flex';
      document.getElementById('button-container').style.display = 'none';
    }
    function goToMenu(current) {
      document.getElementById(current).style.display = 'none';
      document.getElementById('button-container').style.display = 'flex';
    }
  </script>

</body>

</html>