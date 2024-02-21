<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Task Management System</title>
  <link rel="stylesheet" href="../css/loginpage.css" />
</head>

<body>
  <div class="login-container">
    <h2 id="welcome-back">Welcome Back!</h2>
    <p id="welcome-message">Enter your email and password to access your account</p>
    <form method="POST" action="../action/login_user_action.php" onsubmit="return validateLogin()" id="login-form"
      name="login-form">
      <div>
        <input type="text" id="email" name="email" placeholder="Email address" required />
        <input type="password" id="password" name="password" placeholder="Password" required />
        <p class="error-msg" id="error-msg"> Incorrect email or password. Try again</p>
      </div>
      <!-- <div id="forgot-password">
        <a href="#">Forgot password?</a>
      </div> -->
      <button type="submit" name="sign-in" id="sign-in" onclick="validateLogin()">Sign In</button>
    </form>
    <!-- <div class="social-buttons">
      <button class="social-button" id="google-button"><img class="logo" id="google-logo"
          src="../images/google-logo.png" alt="Google logo">Continue with Google</button>
      <button class="social-button" id="apple-button"><img class="logo" id="apple-logo" src="../images/apple-logo.png"
          alt="Apple Logo">
        Continue with Apple
      </button> -->
    <p id="no-account">Don't have an account yet? <a href="../login/register_view.php">Register</a></p>
  </div>

  </div>
  <script src="../js/loginpage.js"></script>
</body>

</html>