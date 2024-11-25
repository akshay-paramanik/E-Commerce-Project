<?php 
require_once "../admin/pages/connect.php";
session_start();
if(isset($_SESSION['username'])){
  $userid=$_SESSION['username'];
  $sql = "select * from cart where userid = $userid";
  $res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cart</title>
    <link rel="stylesheet" href="cart.css" />
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
        <div class="orders">
          <img src="../../images/shopping-bag.png" alt="" /><br />
          Orders
        </div>
      </div>

      <div class="main">
        <div class="cart-container">
          <div class="heading-place">
            <h2>Cart items</h2>
            <span>Address</span>
          </div>
          <!-- Cart 1 -->
          <?php if(mysqli_num_rows($res)){
          while($pdata = mysqli_fetch_assoc($res)){
            $dbname = $pdata['dbname'];
            $productid = $pdata['productid'];
            $sql2 = "select * from $dbname where id = $productid";
            $res2 = mysqli_query($con,$sql2);
            if(mysqli_num_rows($res2)){
              while($product = mysqli_fetch_assoc($res2)){
                $discount = $product['price']*($product['discount']/100);
            ?>
          <div class="cart-box">
          <div class="box-item">
            <div class="image-container">
              <img src="../admin/<?php echo $product['imageone']; ?>" alt="" />
            </div>
            <div class="text-part">
              <div class="description">
              <a href="../cart-detail/<?php echo $dbname; ?>D.php?id=<?php echo $productid; ?>"> <?php echo $product['title']; ?></a>
              </div>
              <div class="seller"><?php echo $product['seller']; ?></div>
              <div class="price">
                <span class="initial-price">
                  <i class="fa-solid fa-indian-rupee-sign"></i
                  ><del><?php echo $product['price']; ?></del></span
                ><span class="final-price">
                <input type="hidden" class="discount-price" name="" value="<?php echo ceil($discount); ?>">
                  <i class="fa-solid fa-indian-rupee-sign "></i><span class="in-price"><?php echo ceil($product['price']-$discount);?></span></span
                >
                <span class="offer"><?php echo $product['discount']; ?>%off</span>
              </div>
              <div class="external-part">
                <div class="quantity">
                  <span class="decrement">-</span>
                  <input type="number" name="" id="" value="1" />
                  <span>+</span>
                </div>
                <span class="saved">Saved For Later</span>
                <span class="Remove"><a href="../admin/pages/action.php?Request=delete&id=<?php echo $pdata['id']; ?>">Remove</a></span>
              </div>
            </div>
          </div>
        </div>
        <?php         }}  }
           ?>
        
<!-- cart 2 -->
        
        <div class="order-request">
          <button type="button">Please Order</button>
        </div>
        <!-- save for later -->
        <div class="heading-place">
          <h2>Saved For Later</h2>
        </div>

        <div class="cart-box">
          <div class="box-item">
            <div class="image-container">
              <img src="../cart image/iphone_15-removebg-preview.png" alt="" />
            </div>
            <div class="text-part">
              <div class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. it,s
                your dream my dream
              </div>
              <div class="sub-description">32GB RAM 256GB ROM</div>
              <div class="price">
                <span class="initial-price">
                  <i class="fa-solid fa-indian-rupee-sign"></i
                  ><del>1,99,999</del></span
                ><span class="final-price">
                  <i class="fa-solid fa-indian-rupee-sign"></i> 1,69,999</span
                >
                <span class="offer">15% Off</span>
              </div>
              <div class="external-part">
                <div class="quantity">
                  <span class="decrement">-</span>
                  <input type="number" name="" id="" value="1" />
                  <span>+</span>
                </div>
                <span class="saved">Move to cart</span>
                <span class="Remove">Remove</span>
              </div>
            </div>
          </div>
        </div>
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
      <?php }else{?>
                  <div class="cart-box">
                    <a href="../index.php">add item</a>
                  </div>
                  <?php } ?>
    </div>
    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
    <script>
      let initial = document.getElementsByClassName("in-price");
      let discount = document.getElementsByClassName("discount-price");
      let printPrice = document.getElementById("price-print");
      let printDiscount = document.getElementById("discount-print");
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
      total = sum-dis+40+69;
      save = sum-total;
      printPrice.innerHTML = sum;
      printDiscount.innerHTML = dis;
      savePrint.innerHTML = save;
      totalPrint.innerHTML = total;
    </script>
  </body>
</html>
<?php }else{?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
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
        <div class="orders">
          <img src="../../images/shopping-bag.png" alt="" /><br />
          Orders
        </div>
      </div>
      <div class="main">
        <div class="cart-container">
          <h3><a href="../forms/login.php">Login first</a></h3>
        </div>
      </div>
    </div>
  </body>
  </html>

  <?php }?>