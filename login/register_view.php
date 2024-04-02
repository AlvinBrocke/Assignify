<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignify.- Sign Up</title>
  <link rel="stylesheet" href="../css/register.css">
</head>

<body>
  <div class="container">
    <div class="content">
      <div>
        <h1>Sign Up</h1>
        <h2 id="create-account">Create Your Account</h2>
      </div>
      <div id="have-account">
        <p>
          Have an account already?
          <a id="login-link" href="../login/login_view.php">Login Here</a>
        </p>
      </div>
      <form method="post" action="../action/register_user_action.php" onsubmit="return validateRegister()"
        id="register-form" name="register-form">
        <div class="input-field">
          <label for="firstName">First Name:</label><br>
          <input placeholder="Enter your first name" type="text" id="firstName" name="firstName" required>
          <p class="error-msg" id="fname-error-msg">Invalid first name</p>
        </div>
        <div class="input-field">
          <label for="lastName">Last Name:</label><br>
          <input placeholder="Enter your last name" type="text" id="lastName" name="lastName" required>
          <p class="error-msg" id="lname-error-msg">Invalid last name</p>
        </div>
        <div class="input-field" id="gender-field">
          <label>Gender:</label>
          <input type="radio" id="male" name="gender" value=0 required>
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value=1 required>
          <label for="female">Female</label>
        </div>
        <div class="input-field">
          <label for="dob">Date of Birth:</label><br>
          <input type="date" id="dob" name="dob" placeholder="Select your date of birth" required>
        </div>
        <div class="input-field">
          <label for="family-role">Family Role:</label><br>
          <?php include '../functions/select_role_fxn.php'; ?>
          <br>
        </div>
        <div class="input-field">
          <label for="phoneNumber">Phone Number:</label><br>
          <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
          <p class="error-msg" id="phone-error-msg">Invalid phone number</p>
        </div>
        <label for="email">Email:</label>
        <input placeholder="Enter your email" type="email" id="email" name="email" required>
        <p class="error-msg" id="email-error-msg">Invalid email address</p>
        <label for="password">Password:</label>
        <input type="password" placeholder="Enter your password" id="password" name="password" required>
        <p class="error-msg" id="password-error-msg">Invalid password</p>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password"
          required>
        <p class="error-msg" id="confirmpassword-error-msg">
          Your passwords do not match
        </p>
        <div class="button">
          <button type="submit" name="register" id="register">
            Register
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="../js/register.js"></script>
</body>

</html>