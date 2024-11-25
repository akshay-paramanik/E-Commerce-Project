<?php session_start();
require_once "../admin/pages/connect.php";
if(isset($_SESSION['username'])){
if($_REQUEST['id']){
    $id = $_REQUEST['id'];
    $sql = "select * from user where id = $id";
    $res = mysqli_query($con,$sql);
    
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="website icon" type="png" href="icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Navbar -->
      <div class="navbar">
        <h1 class="logo">Logo</h1>
        <div class="search">
          <img src="../../images/magnifying-glass.png" alt="" />
          <input type="text" placeholder="Search your brand and products" />
        </div>
        <div class="account">
            <a href="../logout.php">
          <img src="../../images/logout.png" alt="" /><br />
          Logout
          </a>
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
      <!-- Text-navbar -->
      <div class="text-catagory">
        <div class="Men">Men's <span> </span></div>
        <div class="women">Woman's <span> </span></div>
        <div class="kids">Baby & Kid's <span></span></div>
        <div class="mobile">Mobiles</div>
        <div class="electronics">Electronics <span></span></div>
        <div class="furniture">Home & Furniture <span></span></div>
        <div class="grocery">Grocery</div>
      </div>
      <div class="main">
        <div class="sign-in">
            <?php $count = mysqli_num_rows($res);
            if($count){
                $new = mysqli_fetch_assoc($res); ?>
          <form action="">
                <h1>Personal Details</h1>
                <p><a href="../forms/login-new.php?id=<?php echo $id; ?>">edit</a></p>
                <label for="fname"><b>Full Name</b></label>
                <input type="text" placeholder="Enter full name" name="fullname" id="fname" value="<?php echo $new['name']; ?>" disabled>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo $new['email']; ?>" disabled>
                <label for="mobile"><b>Mobile</b></label>
                <input type="number" placeholder="Enter your mobile number" name="mobile" id="mobile" value="<?php echo $new['mobile']; ?>" disabled>
                <label for="address"><b>Add address</b></label>
                <input type="text" placeholder="" name="address" id="address" value="<?php echo $new['address']; ?>" disabled>
                
                <label for="state"><b>State</b></label>
                <input type="text" name="state" id="" value="<?php echo $new['state']; ?>" disabled>
                <label for="address"><b>District</b></label>
                <input type="text" placeholder="" name="district" id="district" value="<?php echo $new['district']; ?>" disabled>
                <label for="city"><b>City Name</b></label>
                <input type="text" placeholder="Enter Your city name" name="city" id="city" value="<?php echo $new['city']; ?>" disabled>
        </form>
        <?php }?>
        </div>
      </div>
    </div>
    
</body>

</html>
<?php }else{
    echo "error";
}}else{
  header("location: ../index.php");
} ?>