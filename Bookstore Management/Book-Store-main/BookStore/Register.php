<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/login.css">
<title> CSS Login Screen Tutorial </title>
</head>
<body>
  <body>
    <nav class="navbar">
        <div class="nav-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Register.php">Create Account</a></li>
        </div>
    </nav>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>REGISTER</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action="registerfun.php" method="post"> 
          <input type="text" name="name"  placeholder="username"/>
          <input type="password" name="password" placeholder="password"/> 
          <input type="email" name="email" placeholder="Email id">
          <input type="mobile" name="mobile" placeholder="Phone no">
          <input type="address" name="address" placeholder="address">          
          <button name="register">Register</button>
          <p class="message">Not registered? <a href="login.php">Login</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>