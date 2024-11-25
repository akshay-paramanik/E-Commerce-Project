<?php
session_start();
require_once "../admin/pages/connect.php";
if(isset($_REQUEST['req'])){
  $dbname = $_REQUEST['req'];
  $id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="order.css" />
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
          <img src="../../images/user.png" alt="" /><br />
          You
        </div>
        <div class="orders">
          <img src="../../images/shopping-bag.png" alt="" /><br />
          Orders
        </div>
      </div>

      <!-- body -->
      <div class="main">
        <?php 
                    $sql = "select * from $dbname where id=$id";
                    $res = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)){
                      $data = mysqli_fetch_assoc($res);
                      $discount = $data['price']*($data['discount']/100);
                    ?>
        <div class="order-part">
          <form action="../admin/pages/process.php">
            <input type="hidden" name="dbname" value="<?php echo $dbname; ?>">
          <div class="delivery-address">
            <div class="heading">
              <span>1</span>
              <h3>Delivery Address</h3>
            </div>
            <div class="address-note order-item">
              <div class="address-check">
                <div class="input-field">
                  <?php if(isset($_SESSION['username'])){
                    $uid = $_SESSION['username'];
                    $sql2 = "select * from user where id=$uid";
                    $res2 = mysqli_query($con,$sql2);
                    if($res2){
                      $udata = mysqli_fetch_assoc($res2);
                    
                    ?>

                  <label for="checking">
                    <input type="radio" name="checking" value="<?php echo $uid; ?>" id="checking" checked />
                    <h4><?php echo $udata['name']; ?></h4>
                    <p>
                    <?php echo $udata['address']; ?>
                    </p>
                    <p><?php echo $udata['city']." ".$udata['district']." ".$udata['state']." Pin code: ".$udata['pin']; ?></p>
                  </label>
                  <?php
                    }
                }else{ ?>
                    <a href="../forms/login.php">login</a>
                    <?php } ?>
                </div>
              </div>
              <div class="edit">
                <a href="../forms/login-new.php?id=<?php echo $uid; ?>">EDIT</a>
              </div>
            </div>
          </div>
          <div class="order-summery order-item">
            <input type="hidden" name="productid" value="<?php echo $data['id']; ?>">
            <div class="heading">
              <span>2</span>
              <h3>Order Summary</h3>
            </div>
            <div class="cart-container">
                    
              <div class="cart-box">
                <div class="box-item">
                  <div class="image-container">
                    <img
                      src="../admin/<?php echo $data['imageone']; ?>"
                      alt=""
                    />
                  </div>
                  <div class="text-part">
                    <div class="description">
                      <?php echo $data['title']; ?>
                    </div>
                    <div class="seller"><?php echo $data['seller']; ?></div>
                    <div class="price">
                      <span class="initial-price">
                        <i class="fa-solid fa-indian-rupee-sign"></i
                        ><del class="cal-price"><?php echo $data['price']; ?></del></span
                      ><span class="final-price">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <?php echo ceil($data['price']-$discount); ?></span
                      >
                      <span class="offer"><?php echo $data['discount']; ?>% Off</span>

                    </div>
                    <div class="external-part">
                      <div class="quantity">
                        <span class="decrement" id="dec">-</span>
                        <input type="number" name="quantity" id="display" value="1" />
                        <span id="inc">+</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="payment-part order-item">
            <div class="heading">
              <span>3</span>
              <h3>Payment Option</h3>
            </div>
            <div class="credit">
              <div class="credit-card">
                <input type="radio" name="payment" id="credit-option" value="credit/Debit/ATM card" />
                <label for="credit-option">credit/Debit/ATM card</label>
              </div>
              <li>Secure as per RBI</li>
            </div>
            <div class="banking">
              <div class="bank">
                <input type="radio" name="payment" id="bank-option" value="Net Banking" />
                <label for="bank-option">Net Banking</label>
              </div>
              <li>Simple payment</li>
            </div>
            <div class="emi">
              <div class="instalment">
                <input type="radio" name="payment" id="emi-option" value="EMI" />
                <label for="emi-option">EMI</label>
              </div>
              <li>With best offer</li>
            </div>
            <div class="upi">
              <div class="upi-pay">
                <input type="radio" name="payment" id="upi-option" value="UPI" />
                <label for="upi-option">UPI</label>
              </div>
              <li>any upi app</li>
            </div>
            <div class="cod">
              <div class="cash">
                <input type="radio" name="payment" id="cod-option" value="COD(cash on delivery)" />
                <label for="cod-option">COD(cash on delivery)</label>
              </div>
              <li>pay after delivery</li>
            </div>
            <div class="gift-card"></div>
            <input type="hidden" name="total" id="backtotal" value="">
            <input type="submit" name="order" id="order" value="PLACE ORDER">
          </div>
          </form>
        </div>
        <div class="caculation">
          <h2>Price details</h2>
          <hr />
          <div class="price">
            <span>Price</span>
            <span> <i class="fa-solid fa-indian-rupee-sign"></i><span id="price-print"></span></span>
          </div>
          <div class="discount">
            <span>Discount</span>
            <span>-<i class="fa-solid fa-indian-rupee-sign"></i><span id="discount-print"></span></span>
          </div>
          <input type="hidden" class="dis-price" value="<?php echo ceil($discount); ?>" name="">
          <div class="delivary">
            <span>Delivary charges</span>
            <span><i class="fa-solid fa-indian-rupee-sign"></i>40</span>
          </div>
          <div class="package">
            <span>Secured packaging fee</span>
            <span><i class="fa-solid fa-indian-rupee-sign"></i>69</span>
          </div>
          <hr />
          <div class="total">
            <span>Total amount</span>
            <span><i class="fa-solid fa-indian-rupee-sign"></i><span id="total"></span></span>
            
          </div>
          <hr />
          <p>
            You will saved <i class="fa-solid fa-indian-rupee-sign"></i><span id="save"></span>
          </p>
        </div>
      </div>
      </div>
      <?php } ?>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
    <script>
      var inputV =document.getElementById("display");
      var increment =document.getElementById("inc");
      var decrement =document.getElementById("dec");
      var count = 1;

      let initial = document.getElementsByClassName("cal-price");
      let discount = document.getElementsByClassName("dis-price");
      let printPrice = document.getElementById("price-print");
      let printDiscount = document.getElementById("discount-print");
      let backTotal =document.getElementById("backtotal");
      let totalPrint = document.getElementById("total");
      let savePrint = document.getElementById("save");
      let save;
      let total;
      var sum=0;
      var dis =0;
      for(i=0; i<initial.length; i++){
        var array =[initial[i].innerHTML];
        var newa =array.map(Number);
        for(j=0; j<newa.length; j++){
          sum = sum+ newa[j];
        }
      }
      for(i=0; i<discount.length; i++){
        var disArray = [discount[i].value];
        var number =disArray.map(Number);
        for(j=0; j<number.length; j++){
          dis+=number[j];
          console.log(dis);
        }
      }
      increment.addEventListener("click",()=>{
        inputV.value = ++count;
      })
      decrement.addEventListener("click",()=>{
        inputV.value = --count;
      })
      
      total = sum-dis+40+69;
      save = sum-total;
      printPrice.innerHTML = sum;
      printDiscount.innerHTML = dis;
      savePrint.innerHTML = save;
      totalPrint.innerHTML = total;
      backTotal.value= total;
    </script>
  </body>
</html>
<?php }else{
  echo "not";
} ?>