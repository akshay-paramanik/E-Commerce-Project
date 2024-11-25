<?php
require_once "../admin/pages/connect.php";
if($_REQUEST['search']){
  $item = $_REQUEST['search'];
  $sql = "select * from `mobile` where `pname` like '%$item%' or `price` like '%$item%' or `color` like '%$item%' or `resolution` like '%$item%' or `display_type` like '%$item%' or `processor_type` like '%$item%' or `processor_brand` like '%$item%' or `core` like '%$item%' or `primarycamera` like '%$item%' or `frontcamera` like '%$item%' or `system` like '%$item%' or `display_size` like '%$item%' or `storage` like '%$item%' or `ram` like '%$item%' or `seller` like '%$item%' or `title` like '%$item%' or `product` like '%$item'";
  $res = mysqli_query($con,$sql);
  $sql2 = "select * from `laptop` where `pname` like '%$item%' or `price` like '%$item%' or `color` like '%$item%' or `resolution` like '%$item%' or `stype` like '%$item%' or `ptype` like '%$item%' or `pbrand` like '%$item%' or `pcore` like '%$item%' or `ssd_cap` like '%$item%' or `ram_type` like '%$item%' or `system` like '%$item%' or `ssize` like '%$item%' or `type` like '%$item%' or `ram` like '%$item%' or `seller` like '%$item%' or `title` like '%$item%' or `ssd_cap` like '%$item%' or `battery_backup` like '%$item%' or `pgeneration` like '%$item%' or `product` like '%$item'";
  $res2 = mysqli_query($con,$sql2);
  $sql3 = "select * from `cloth` where `title` like '%$item%' or `price` like '%$item%' or `pname` like '%$item%' or `offerone` like '%$item%' or `offertwo` like '%$item%' or `offerthree` like '%$item%' or `color` like '%$item%' or `brand` like '%$item%' or `product_type` like '%$item%' or `size` like '%$item%' or `matterial` like '%$item%' or `model_name` like '%$item%' or `ideal_for` like '%$item%' or `pack_of` like '%$item%' or `ocassion` like '%$item%' or `pattern` like '%$item%' or `seller` like '%$item%' or `ps` like '%$item%' or `ps_two` like '%$item%' or `pcl` like '%$item%'";
  $res3 = mysqli_query($con,$sql3);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="search-feild.css" />
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
      <div class="navbar">
        <h1 class="logo">Logo</h1>
        <div class="search">
        <form action="" method="post">
          <img src="../../images/magnifying-glass.png" alt="" />
          <input type="text" name="search" placeholder="Search your brand and products" value="<?php echo $item; ?>" />
          </form>
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
      <!-- main field -->
      <div class="main-field">
        <div class="left-part">
          <div class="filter-part">
            <h3>Filter</h3>
            <div class="catagory">
              <div class="heading">
                <h4>CATAGORIES</h4>
              </div>
              <div class="item">
                <p>Mobiles</p>
              </div>
            </div>
            <div class="rang">
              <h4>Price</h4>
              <div class="max-min">
                <div class="min dropdwon" id="min">
                  <input type="text" name="" disabled value="Min" id="" />
                  <span class="trangle"></span>
                  <div class="rang-list" id="rang-list">
                    <div class="item-list" id="item-list">
                      <a href="" class="rang-item">min</a
                      ><a href="" class="rang-item">10000</a
                      ><a href="" class="rang-item">20000</a>
                    </div>
                  </div>
                </div>
                <div class="max dropdwon">
                  <input type="text" disabled name="" value="Max" id="" /><span
                    class="trangle"
                  ></span>
                  <div class="rang-list" id="rang-list">
                    <div class="item-list" id="item-list">
                      <a href="" class="rang-item">max</a
                      ><a href="" class="rang-item">300000</a
                      ><a href="" class="rang-item">500000</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="brand">
              <h4>Brand</h4>
              <div class="brand-list">
                <div class="brand-name">
                  <input type="checkbox" name="brand" id="" />
                  <label for="">Apple</label>
                </div>
                <div class="brand-name">
                  <input type="checkbox" name="brand" id="" />
                  <label for="">Apple</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="right-part">
          <!-- Product 1 -->
        <?php  if(mysqli_num_rows($res)>0){
    while($data = mysqli_fetch_assoc($res)){
      $discount = $data['price']*($data['discount']/100);
      $d = strtotime("+7 days");
      $date = date("d M",$d);
  ?>
          <div class="product-container">
            <div class="image-container">
              <div class="image1">
                <img
                  src="../admin/<?php echo $data['imageone']; ?>"
                  alt=""
                />
              </div>
              <div class="wishlist">
                <button onclick="toggleLike(this)" class="like-button">
                  <i class="fa-solid fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="declaration">
              <p class="heading"><a href="../cart-detail/mobileD.php?id=<?php echo $data['id']; ?>"><?php echo $data['title']; ?></a></p>
              <div class="rating">
                <span>4.5 <i class="fa-solid fa-star"></i></span>
                <span>459 rating and 49 reviews</span>
              </div>
              <div class="sub-declaration">
                <li class="sub-list"><?php echo $data['ram']." RAM ".$data['storage']." ROM"; ?></li>
                <li class="sub-list">
                <?php echo $data['display_size']." ".$data['display_type']; ?>
                </li>
                <li class="sub-list"><?php echo $data['primarycamera']." || ".$data['frontcamera']." Front camera"; ?></li>
                <li class="sub-list"><?php echo $data['processor_type']." ".$data['processor_brand']." ".$data['core']." processor"; ?></li>
              </div>
            </div>
            <div class="pricing-detail">
              <div class="main-price">
                <i class="fa-solid fa-indian-rupee-sign"></i><?php echo ceil($data['price']-$discount); ?>
              </div>
              <div class="initial-price">
                <del>
                  <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $data['price']; ?>
                </del>
              </div>
              <div class="delivery"><i class="fa-solid fa-indian-rupee-sign"></i>40 delivery charge delivered by <b><?php echo $date; ?></b></div>
            </div>
          </div>

          <?php }
  }else ?>
<?php  if(mysqli_num_rows($res3)>0){
    while($cloth = mysqli_fetch_assoc($res3)){
      $discount = $cloth['price']*($cloth['discount']/100);
      $d = strtotime("+7 days");
      $date = date("d M",$d);
  ?>
<div class="product-container">
            <div class="image-container">
              <div class="image1">
                <img
                  src="../admin/<?php echo $cloth['imageone']; ?>"
                  alt=""
                />
              </div>
              <div class="wishlist">
                <button onclick="toggleLike(this)" class="like-button">
                  <i class="fa-solid fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="declaration">
              <p class="heading"><a href="../cart-detail/clothD.php?id=<?php echo $cloth['id']; ?>"><?php echo $cloth['title']; ?></a></p>
              <div class="rating">
                <span>4.5 <i class="fa-solid fa-star"></i></span>
                <span>459 rating and 49 reviews</span>
              </div>
              <div class="sub-declaration">
                <li class="sub-list"><?php echo $cloth['brand']." ".$cloth['product_type']; ?></li>
                <li class="sub-list">
                <?php echo $cloth['ideal_for']; ?>
                </li>
                <li class="sub-list"><?php echo $cloth['matterial']; ?></li>
                <li class="sub-list">Size: <?php echo $cloth['size']; ?></li>
                <li class="sub-list"><?php echo $cloth['ocassion']; ?></li>
                <li class="sub-list">Seller: <?php echo $cloth['seller']; ?></li>
              </div>
            </div>
            <div class="pricing-detail">
              <div class="main-price">
                <i class="fa-solid fa-indian-rupee-sign"></i><?php echo ceil($cloth['price']-$discount); ?>
              </div>
              <div class="initial-price">
                <del>
                  <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $cloth['price']; ?>
                </del>
              </div>
              <div class="delivery"><i class="fa-solid fa-indian-rupee-sign"></i>40 delivery charge delivered by <b><?php echo $date; ?></b></div>
            </div>
          </div>
          <?php }
          }else ?>


<?php  if(mysqli_num_rows($res2)>0){
    while($laptop = mysqli_fetch_assoc($res2)){
      $discount = $laptop['price']*($laptop['discount']/100);
      $d = strtotime("+7 days");
      $date = date("d M",$d);
  ?>
          <div class="product-container">
            <div class="image-container">
              <div class="image1">
                <img
                  src="../admin/<?php echo $laptop['imageone']; ?>"
                  alt=""
                />
              </div>
              <div class="wishlist">
                <button onclick="toggleLike(this)" class="like-button">
                  <i class="fa-solid fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="declaration">
              <p class="heading"><?php echo $laptop['pname']; ?></p>
              <div class="rating">
                <span>4.5 <i class="fa-solid fa-star"></i></span>
                <span>459 rating and 49 reviews</span>
              </div>
              <div class="sub-declaration">
                <li class="sub-list"><?php echo $laptop['pbrand']." ".$laptop['ptype']." ".$laptop['pcore']; ?></li>
                <li class="sub-list">
                  <?php echo $laptop['ssize']." ".$laptop['stype']." ".$laptop['resolution']; ?>
                </li>
                <li class="sub-list">
                  <?php echo $laptop['ssd_cap']." SSD ".$laptop['ram']." RAM"; ?>
                </li>
                <li class="sub-list"><?php echo $laptop['type']; ?></li>
              </div>
            </div>
            <div class="pricing-detail">
              <div class="main-price">
                <i class="fa-solid fa-indian-rupee-sign"></i><?php echo ceil($laptop['price']-$discount); ?>
              </div>
              <div class="initial-price">
                <del>
                  <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $laptop['price']; ?>
                </del>
              </div>
              <div class="delivery"><i class="fa-solid fa-indian-rupee-sign"></i>40 delivery charge delivered by <b><?php echo $date; ?></b></div>
            </div>
          </div>
          <?php }
  }else ?>




        </div>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
    <script>
      function toggleLike(button) {
        button.classList.toggle("clicked");
      }

      function toggleDislike(button) {
        button.classList.toggle("clicked");
      }
    </script>
  </body>
</html>
<?php }else{
  echo "not found";
} ?>