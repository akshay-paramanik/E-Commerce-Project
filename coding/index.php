<?php session_start();
require_once 'admin/pages/connect.php';
$sql = "select * from mobile order by added_at desc limit 6";
$res = mysqli_query($con, $sql);
$sql2 = "select * from laptop order by added_at desc limit 6";
$res2 = mysqli_query($con, $sql2);
$sql3 = "select * from cloth order by added_at desc limit 6";
$res3 = mysqli_query($con, $sql3);
// $result = mysqli_query($con,$sql);
// $sql="select * from user where id=$id";
// $res=mysqli_query($con,$sql);
// if(mysqli_num_rows($result)>0){
//     $table=mysqli_fetch_assoc($result);
//     print_r($table);
//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>home page</title>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div id="notslide">
      <div class="navbar">
        <h1 class="logo">Logo</h1>
        <div class="search">
          <form action="search/search-feild.php" method="post">
            <img src="../images/magnifying-glass.png" alt="" />
            <input type="text" name="search" placeholder="Search your brand and products" />
          </form>
        </div>
        <div class="account">
          <?php if (isset($_SESSION['username'])) {
            $newid = $_SESSION['username'];
            $sqlf = "select * from user where id = $newid";
            $resf = mysqli_query($con, $sqlf); ?>
            <img src="../images/user.png" alt="" /><br />
            <?php $counting = mysqli_num_rows($resf);
            if ($counting) {
              $newn = mysqli_fetch_assoc($resf);
              echo $newn['name'];
            }  ?>
            <div class="rang-list" id="rang-list">
              <div class="list" id="list">
                <div onclick='window.location.href="profile/profile.php?id=<?php echo $_SESSION[`username`]; ?>"' class="item">Profile</div>
                <div onclick='window.location.href="logout.php"' class="item">logout</div>
              </div>
            </div>

          <?php } else { ?>
            <div onclick='window.location.href="forms/login.php"'
              style="text-decoration: none; color: black">
              <img src="../images/user.png" alt="" /><br />
              Login
            </div>
          <?php } ?>
        </div>
        <div class="cart">
          <a href="cart/cart.php" style="text-decoration: none; color: black">
            <img src="../images/shopping-cart.png" alt="" /><br />
            Cart
          </a>
        </div>
        <div class="orders">
          <div onclick='window.location.href="order/orderview.php"'>
            <img src="../images/shopping-bag.png" alt="" /><br />
            Orders
          </div>
        </div>
        <div class="gift-card">
          <img src="../images/gift-card.png" alt="" /><br />
          Gift Card
        </div>
        <div class="help">
          <img src="../images/help-web-button.png" alt="" /><br />
          help
        </div>
      </div>
    </div>
    <div class="slidebar">
      <div class="navbar">
        <h1 class="logo">Logo</h1>
        <div class="search">
          <form action="search/search-feild.php" method="post">
            <img src="../images/magnifying-glass.png" alt="" />
            <input type="text" name="search" placeholder="Search your brand and products" />
          </form>
        </div>
        <div class="account">
          <?php if (isset($_SESSION['username'])) {
            $newid = $_SESSION['username'];
            $sqlf = "select * from user where id = $newid";
            $resf = mysqli_query($con, $sqlf); ?>
            <img src="../images/user.png" alt="" /><br />
            <?php $counting = mysqli_num_rows($resf);
            if ($counting) {
              $newn = mysqli_fetch_assoc($resf);
              echo $newn['name'];
            }  ?>
            <div class="rang-list" id="rang-list">
              <div class="list" id="list">
                <a href="profile/profile.php?id=<?php echo $_SESSION['username']; ?>" class="item">Profile</a>
                <a href="logout.php" class="item">logout</a>
              </div>
            </div>

          <?php } else { ?>
            <a
              href="forms/login.php"
              style="text-decoration: none; color: black">
              <img src="../images/user.png" alt="" /><br />
              Login
            </a>
          <?php } ?>
        </div>
        <div class="cart">
          <a href="cart/cart.php" style="text-decoration: none; color: black">
            <img src="../images/shopping-cart.png" alt="" /><br />
            Cart
          </a>
        </div>
        <i id="menu" class="ri-menu-3-fill"></i>
        <div id="slide" class="notdisplay">
          <div class="orders">
            <a href="order/orderview.php">
              <img src="../images/shopping-bag.png" alt="" /><br />
              Orders
            </a>
          </div>
          <div class="gift-card">
            <img src="../images/gift-card.png" alt="" /><br />
            Gift Card
          </div>
          <div class="help">
            <img src="../images/help-web-button.png" alt="" /><br />
            help
          </div>
        </div>
      </div>
    </div>
    <div class="catagory">
      <div class="fashion">
        <a href="search/search-feild.php?search=cloth">
          <img
            src="../images/fashion-removebg-preview.png"
            alt="" /><br />Fashion
        </a>
      </div>
      <div class="grocery">
        <img
          src="../images/gorcery-removebg-preview.png"
          alt="" /><br />Grocery Items
      </div>
      <div class="kids">
        <a href="search/search-feild.php?search=kidsware">
          <img
            src="../images/kids_wear-removebg-preview.png"
            alt="" /><br />Kid's Wear
        </a>
      </div>
      <div class="mobile">
        <a href="search/search-feild.php?search=mobile">
          <img src="../images/mobile-removebg-preview.png" alt="" /><br />Mobile
        </a>
      </div>
      <div class="electronic">
        <a href="search/search-feild.php?search=laptop">
          <img
            src="../images/electronics-removebg-preview.png"
            alt="" /><br />Electronics
        </a>
      </div>
      <div class="furniture">
        <img
          src="../images/furniture-removebg-preview.png"
          alt="" /><br />Home & Furniture
      </div>
    </div>
    <div class="carousel">
      <!-- <button id="Prev" onclick="Prev()"></button>
          <button id="Next" onclick="Next()"></button> -->
      <div class="" id="Prev" onclick="Prev()"></div>
      <div id="Next" onclick="Next()"></div>
      <?php
      $sql5 = "select * from `carosel` where status=1";
      $res5 = mysqli_query($con, $sql5);
      if (mysqli_num_rows($res5)) {
        while ($caro = mysqli_fetch_assoc($res5)) {

      ?>
          <img class="caro-item" src="admin/<?php echo $caro['path']; ?>" alt="" />
      <?php
        }
      }
      ?>
    </div>
    <div class="card">
      <h1>New Mobiles</h1>
      <div class="main-cart">
        <?php while ($data = mysqli_fetch_assoc($res)) {
          $id = $data['id'];
          $modis = $data['price'] * ($data['discount'] / 100); ?>
          <div class="cart-item">
            <a href="cart-detail/mobileD.php?id=<?php echo $id ?>">
              <img src="admin/<?php echo $data['imageone']; ?>" alt="" />
              <h3><?php echo $data['pname']; ?></h3>
              <p><i class="fa-solid fa-indian-rupee-sign"></i><?php echo ceil($data['price'] - $modis); ?>"</p>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="card">
      <h1>New laptop with budget</h1>
      <div class="main-cart">
        <?php while ($laptop = mysqli_fetch_assoc($res2)) {
          $id = $laptop['id'];
          $lapdis = $laptop['price'] * ($laptop['discount'] / 100);
        ?>
          <div class="cart-item">
            <a href="cart-detail/laptopD.php?id=<?php echo $id ?>">
              <img src="admin/<?php echo $laptop['imageone']; ?>" alt="" />
              <h3><?php echo $laptop['pname']; ?>"</h3>
              <p><i class="fa-solid fa-indian-rupee-sign"></i><?php echo ceil($laptop['price'] - $lapdis); ?>"</p>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="card">
      <h1>Best for you</h1>
      <div class="main-cart">
        <?php while ($cloth = mysqli_fetch_assoc($res3)) {
          $id = $cloth['id'];
          $discount = $cloth['price'] * ($cloth['discount'] / 100);
        ?>
          <div class="cart-item">
            <a href="cart-detail/clothD.php?id=<?php echo $id ?>">
              <img src="admin/<?php echo $cloth['imageone']; ?>" alt="" />
              <h3><?php echo $cloth['pname'] . " " . $cloth['size']; ?></h3>
              <p><i class="fa-solid fa-indian-rupee-sign"></i><?php echo ceil($cloth['price'] - $discount); ?></p>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="footer">@madeBy-Akshay Paramanik <a href="admin/pages/login.php">admin</a></div>
  </div>
  <script
    src="https://kit.fontawesome.com/27f8f9f2f9.js"
    crossorigin="anonymous"></script>
  <script>
    let slide = 0;
    let imgs = document.getElementsByClassName("caro-item");

    // function 1
    function slideShow() {
      imgs[slide].style.visibility = "visible";
      imgs[slide].style.opacity = "1";
      imgs[slide].style.transform = "scale(1)";
    }

    function inFor() {
      imgs[i].style.visibility = "hidden";
      imgs[i].style.opacity = "0";
      imgs[i].style.transform = "scale(0)";
    }
    //    function 2
    function EachFor() {
      for (i = 0; i < imgs.length; i++) {
        inFor();
      }

      slideShow();
    }
    // function 3
    slideShow();

    function Prev() {
      if (slide == 0) {
        slide = imgs.length - 1;
      } else {
        slide--;
      }
      EachFor();
    }

    let autoCaro;

    function autoRun() {
      autoCaro = setInterval(() => {
        Next();
      }, 2000);
    }
    autoRun();

    function Next() {
      if (slide == imgs.length - 1) {
        slide = 0;
      } else {
        slide++;
      }
      EachFor();
    }
  </script>
</body>

</html>
