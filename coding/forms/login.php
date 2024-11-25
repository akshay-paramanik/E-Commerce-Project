<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <h1 class="logo">Logo</h1>
        <div class="search">
          <img src="../../images/magnifying-glass.png" alt="" />
          <input type="text" placeholder="Search your brand and products" />
        </div>
        <div class="account">
          <img src="../../images/user.png" alt="" /><br />
          You
        </div>
        <div class="cart">
          <img src="../../images/shopping-cart.png" alt="" /><br />
          Cart
        </div>
        <div class="orders">
          <img src="../../images/shopping-bag.png" alt="" /><br />
          Orders
        </div>
      </div>
      <!-- Login Landing Page -->
      <div class="main">
        <div class="outer-form">
        <div class="image-container">
          <img src="images/login use.png" alt="">
        </div>
        <div class="form-container">
          <h1>Login</h1>
          <form action="../admin/pages/action.php" method="post">
            <div class="user-box">
            <input type="email" name="email" placeholder="" id="email">
            <label for="email">Enter your email address</label>
          </div>
          <div class="user-box">
            <img src="images/eye.png" id="show" alt="">
            <img src="images/hidden.png" id="hidden" alt="">
            <span class="tooltip" id="showTooltip">show Password</span>
            <span class="tooltip" id="hideTooltip">hide Password</span>
            <input type="password" name="password" placeholder="" id="password">
            <label for="password">Enter your currect password</label>
          </div>
          <div class="external">
            <a href="login-new.php">
              Create new account
            </a>
          <input type="submit" value="Login" name="login">
          <a href="#" id="forget-password">Forget password?</a>
          
        </div>
          </form>
        </div>
      </div>
      </div>

      <script src="script.js"></script>
  </body>
</html>
