<?php
session_start();
require_once "../admin/pages/connect.php";
if(isset($_SESSION['username'])){
  $uid = $_SESSION['username'];
  $sql = "select * from `order` where userid = $uid";
  $res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="orderview.css" />
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
      <div class="navbar">
        <h1 class="logo">Logo</h1>
        <div class="search">
          <form action="../search/search-feild.php" method="post">
          <img src="../../images/magnifying-glass.png" alt="" />
          <input type="text" name="search" placeholder="Search your brand and products" />
          </form>
        </div>
        <div class="account">
          <?php if(isset($_SESSION['username'])){?>
            <a href="../profile/profile.php?id=<?php echo $_SESSION['username']; ?>">
            <img src="../../images/user.png" alt="" /><br />
            profile
            </a>

        <?php  }else{ ?>
          <a href="../forms/login.php">
            <img src="../../images/user.png" alt="" /><br />
            Login
            </a>
          <?php } ?>
        </div>
        <div class="cart">
          <a href="../cart/cart.php" style="text-decoration: none; color: black">
            <img src="../../images/shopping-cart.png" alt="" /><br />
            Cart
          </a>
        </div>
      </div>

      <!-- body -->
      <div class="main">
        <div class="order-part">
          <form action="../admin/pages/process.php">
          <div class="order-summery order-item">
            <div class="heading">
              <h3>Your Orders</h3>
            </div>
            <div class="cart-container">
              <div class="cart-box">
              <?php
              if(mysqli_num_rows($res)>0){
                while($order=mysqli_fetch_assoc($res)){
                  $pid = $order['productid'];
                  $dbname = $order['dbname'];
                  $sql2 = "select * from $dbname where id = $pid";
                  $res2 = mysqli_query($con,$sql2);
                  if($res2){
                    $pdata = mysqli_fetch_assoc($res2);
                    $discount = $pdata['price']*($pdata['discount']/100);
                    if($order['status']==1){
                      $action = "Shipped";
                    }else if($order['status']==2){
                      $action = "Delivered";
                    }

              ?>
                <div class="box-item">
                  <div class="image-container">
                    <img
                      src="../admin/<?php echo $pdata['imageone']; ?>"
                      alt=""
                    />
                  </div>
                  <div class="text-part">
                    <div class="description">
                      <a href="../cart-detail/<?php echo $dbname."D.php?id=".$pid; ?>">
                      <?php echo $pdata['title']; ?>
                      </a>
                    </div>
                    <div class="seller"><?php echo $pdata['seller']; ?></div>
                    <div class="price">
                      <span class="initial-price">
                        <i class="fa-solid fa-indian-rupee-sign"></i
                        ><del><?php echo $pdata['price']; ?></del></span
                      ><span class="final-price">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <?php echo ceil($pdata['price']-$discount); ?></span
                      >
                      <span class="offer"><?php echo $pdata['discount']; ?>% Off</span>

                    </div>

                  </div>
                  <div class="status">
                    <h4 class="ship">Status</h4>
                    <p><?php echo $action; ?></p>
                  </div>
                </div>
              <?php
                   } }
                            }
              ?>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php }else{
  header("location:../forms/login.php");
} ?>