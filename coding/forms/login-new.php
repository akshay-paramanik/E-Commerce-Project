<?php
require_once "../admin/pages/connect.php";
session_start();
$isEdit=false;
$name=$email=$mobile=$address=$state=$district=$city=$pin='';

if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && !empty($_REQUEST['id'])){

    $id=$_REQUEST['id'];
    $sql="select * from user where id=$id";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
       $data=mysqli_fetch_assoc($res);
       $name=$data['name'];
       $email = $data['email'];
       $mobile = $data['mobile'];
       $address = $data['address'];
       $state = $data['state'];
       $district = $data['district'];
       $city = $data['city'];
       $pin = $data['pin'];
       $isEdit = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login page</title>
    <link rel="stylesheet" href="login-new.css" />
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
      <div class="text-catagory">
        <div class="Men">Men's <span>

        </span></div>
        <div class="women">Woman's <span>
        </span></div>
        <div class="kids">Baby & Kid's <span></span></div>
        <div class="mobile">Mobiles</div>
        <div class="electronics">Electronics <span></span></div>
        <div class="furniture">Home & Furniture <span></span></div>
        <div class="grocery">Grocery</div>
      </div>

      <!-- Login Landing Page -->
      <div class="main">
        <div class="sign-in">
        <?php if($isEdit==true){ ?>
        <form action="../admin/pages/action.php" method="post">
                <h1>Update</h1>
                <p>Edit your profile.</p>
                <label for="fname"><b>Full Name</b></label>
                <input type="text" placeholder="Enter full name" name="fullname" value="<?php echo $name; ?>" id="fname" required>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" id="email" required>
                <label for="mobile"><b>Mobile</b></label>
                <input type="number" placeholder="Enter your mobile number" value="<?php echo $mobile; ?>" name="mobile" id="mobile" required>
                <label for="address"><b>Add address</b></label>
                <input type="text" placeholder="Enter your home address" name="address" value="<?php echo $address; ?>" id="address" required>
                <label for="state"><b>State</b></label>
                <select name="state" id="state" value="<?php echo $state; ?>">
                    <option value="AndhraPradesh">Andhra Pradesh</option>
                    <option value="ArunachalPradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="HimachalPradesh">Himachal Pradesh</option>
                    <option value="JammuKashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="MadhyaPradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="TamilNadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="UttarPradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="WestBengal">West Bengal</option>
                </select>

                <label for="district"><b>District</b></label>
                <input type="text" placeholder="Enter Your district name" name="district" value="<?php echo $district; ?>" id="district" required>

                <label for="city"><b>City Name</b></label>
                <input type="text" placeholder="Enter Your city name" name="city" value="<?php echo $city; ?>" id="city" required>
  
                <input type="hidden" name="request" value="edit">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <label for="pin"><b>Pin code</b></label>
                <input type="number" placeholder="Enter Your pin code" name="pin" value="<?php echo $pin; ?>" id="pin" required>
    
                <input type="submit" class="registerbtn" value="Update" name="Update">
                <?php $_SESSION['update']=$id ?>
        </form>
        <?php }else{ ?>

          <form action="../admin/pages/process.php" method="post">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <label for="fname"><b>Full Name</b></label>
                <input type="text" placeholder="Enter full name" name="fullname" id="fname" required>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>
                <label for="mobile"><b>Mobile</b></label>
                <input type="number" placeholder="Enter your mobile number" name="mobile" id="mobile" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                <input type="checkbox" name="showpassword" onclick="ckeck()" id="show"><span>show password</span><br>
                <label for="address"><b>Add address</b></label>
                <input type="text" placeholder="Enter your home address" name="address" id="address" required>
                <label for="state"><b>State</b></label>
                <select name="state" id="state">
                    <option value="AndhraPradesh">Andhra Pradesh</option>
                    <option value="ArunachalPradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="HimachalPradesh">Himachal Pradesh</option>
                    <option value="JammuKashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="MadhyaPradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="TamilNadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="UttarPradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="WestBengal">West Bengal</option>
                </select>

                <label for="district"><b>District</b></label>
                <input type="text" placeholder="Enter Your district name" name="district" id="district" required>

                <label for="city"><b>City Name</b></label>
                <input type="text" placeholder="Enter Your city name" name="city" id="city" required>
  

                <label for="pin"><b>Pin code</b></label>
                <input type="number" placeholder="Enter Your pin code" name="pin" id="pin" required>
    
                <input type="submit" class="registerbtn" value="Register" name="register">
    
            <div class="signin">
                <p>Already have an account? <a href="#">LogIn</a>.</p>
            </div>
        </form>
        <?php }?>
        </div>
      </div>
    </div>
      <script>
        let show = document.getElementById("show");
        function ckeck(){
        var password = document.getElementById("psw");
        var rePassword = document.getElementById("psw-repeat");
          if(password.type == "password"){
            password.type = "text";
          }else {
            password.type = "password";
          }
          if(rePassword.type == "password"){
            rePassword.type = "text";
          }else{
            rePassword.type = "password";
          }
        }
      </script>
  </body>
</html>
