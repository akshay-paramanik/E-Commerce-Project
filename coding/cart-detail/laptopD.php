<?php require_once '../admin/pages/connect.php';
session_start();
if($_REQUEST['id']){
  $id = $_REQUEST['id'];
  $sql = "select * from laptop where id = $id";
  $res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail of products</title>
    <link rel="stylesheet" href="cart-detail.css" />
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
          <a href="../cart/cart.php">
          <img src="../../images/shopping-cart.png" alt="" /><br />
          Cart
          </a>
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
      <!-- detailing -->
      <div class="detail-main">
      <?php $count = mysqli_num_rows($res);
            if($count){
                $new = mysqli_fetch_assoc($res);
                $discount = $new['price']*($new['discount']/100);
                ?>
        <div class="sides">
          <div class="left-part">
            <div class="left-group">
              <div class="image-part">
                <div class="sub-image">
                  <img
                    src="../admin/<?php echo $new['imageone']; ?>"
                    alt=""
                    class="img-item"
                  /><img
                    src="../admin/<?php echo $new['imagetwo']; ?>"
                    alt=""
                    class="img-item"
                  /><img
                    src="../admin/<?php echo $new['imagethree']; ?>"
                    alt=""
                    class="img-item"
                  />
                </div>
                <div class="main-image" id="puting"></div>
                <div class="wishlist">
                  <span id="hidden"
                    ><img src="../cart-detail-image/wishlist1.png" alt=""
                  /></span>
                  <span id="show"
                    ><img src="../cart-detail-image/wishlist2.png" alt=""
                  /></span>
                </div>
              </div>
              <div class="btns">
                <button>
                <a href="../admin/pages/process.php?req=laptop&id=<?php echo $new['id']; ?>">
                  <span
                    ><img src="../../images/shopping-cart.png" alt="" /></span
                  >Add to Cart
            </a>
                </button>
                <?php if(isset($_SESSION['username'])){ ?>
                <button>
                  <a href="../order/order.php?req=laptop&id=<?php echo $new['id']; ?>">
                  <span><img src="../../images/shopping-bag.png" alt="" /></span
                  >Buy Now
                  </a>
                </button>
                <?php }else{ ?>
                  <button>
                  <a href="../order/order.php?req=laptop&id=<?php echo $new['id']; ?>">
                  <span><img src="../../images/shopping-bag.png" alt="" /></span
                  >Buy Now
                  </a>
                </button>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="right-part">
            <p class="heading"><?php echo $new['title'] ?></p>
            <div class="price-offer">
              <p class="optional-offer">
                Extra <i class="fa-solid fa-indian-rupee-sign"></i> <?php echo ceil($discount); ?> off
              </p>
              <span class="final-price"
                ><i class="fa-solid fa-indian-rupee-sign"></i><?php echo ceil($new['price']-$discount); ?></span
              >
              <span class="initial-price"
                ><del
                  ><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $new['price'] ?></del
                ></span
              >
              <span class="offer"><?php echo $new['discount']; ?>% off</span>
            </div>
            <div class="available-offer">
              <h5>Available offers</h5>
              <p class="offer-desc">
                <img src="../cart-detail-image/discount-tag.png" alt="" />
                <span class="offer-site">Bank Offer: </span>
                <span class="final-offer"
                  ><?php echo $new['offerone'] ?></span
                >
              </p>
              <p class="offer-desc">
                <img src="../cart-detail-image/discount-tag.png" alt="" />
                <span class="offer-site">Bank Offer: </span>
                <span class="final-offer"
                  ><?php echo $new['offertwo'] ?></span
                >
              </p>
              <p class="offer-desc">
                <img src="../cart-detail-image/discount-tag.png" alt="" />
                <span class="offer-site">Bank Offer: </span>
                <span class="final-offer"
                  ><?php echo $new['offerthree'] ?></span
                >
              </p>
            </div>
            <div class="delivery-check">
              <h4>Delivery</h4>
              <div class="input-pin">
                <i class="fa-solid fa-location-dot"></i>
                <?php if(isset($_SESSION['username'])){
                      $Id = $_SESSION['username'];
                        $sql2 = "select pin from user where id = $Id";
                        $result = mysqli_query($con,$sql2);
                        if(mysqli_num_rows($result)){
                            $pin = mysqli_fetch_assoc($result);
                        ?>
                        <input type="text" value="<?php echo $pin['pin']; ?>" /> <?php }else{
                          echo "error";
                        }
                      }else{?> <a href="../forms/login.php">login</a><?php } ?>
                <span style="cursor: pointer">Check</span>
              </div>
              <div class="result">
                <p>Delivery by Tomorrow |</p>
                <span
                  >Free
                  <del
                    ><i class="fa-solid fa-indian-rupee-sign"></i>40</del
                  ></span
                >
              </div>
            </div>
            <div class="highlight">
              <ul>
                Highlight
                <li><?php echo $new['ram'];?>RAM and<?php echo $new['ssd']; ?> SSD</li>
                <li><?php echo $new['pbrand']." ".$new['ptype']; ?></li>
                <li><?php echo $new['ssize']." ".$new['stype']; ?> Display</li>
                <li><?php echo $new['type'];?></li>
                <li>Seller:<?php echo $new['seller'];?></li>
              </ul>
            </div>
            <div class="product-description">
              <div class="image-container">
                <img src="../admin/<?php echo $new['pimage_one']; ?>" alt="" />
              </div>
              <p class="description">
              <?php echo $new['pdesone'] ?>

              </p>
            </div>
            <hr />

            <div class="product-description">
              <div class="image-container">
                <img src="../admin/<?php echo $new['pimage_two']; ?>" alt="" />
              </div>
              <p class="description">
                <?php echo $new['pdestwo'] ?>
              </p>
            </div>
            <hr />

            <!-- Spacification -->
            <div class="spacification">
              <h2>Spacification</h2>
              <table class="sac-table">
                <tr style="color: black; font-size: 18px; width: 25%">
                  <td style="color: black; font-size: 18px">General</td>
                </tr>
                <tr>
                  <td>In The Box</td>
                  <td><?php echo $new['sales_package'];?></td>
                </tr>
                <tr>
                  <td>Model Number</td>
                  <td><?php echo $new['model_num'];?></td>
                </tr>
                <tr>
                  <td>Model Name</td>
                  <td><?php echo $new['model_name'];?></td>
                </tr>
                <tr>
                  <td>Color</td>
                  <td><?php echo $new['color'];?></td>
                </tr>
                <tr>
                  <td>Type</td>
                  <td><?php echo $new['type'];?></td>
                </tr>
                <tr>
                  <td>Battery Cell</td>
                  <td><?php echo $new['battery_cell'];?></td>
                </tr>
                <tr>
                  <td>Microsoft Office Provide</td>
                  <td><?php echo $new['microsoft'];?></td>
                </tr>
              </table>

              <table class="sac-table">
                <tr>
                  <td style="color: black; font-size: 18px; width: 25%">
                    Processor and Memory Feature
                  </td>
                </tr>
                <tr>
                  <td>Processor Brand</td>
                  <td><?php echo $new['pbrand']; ?></td>
                </tr>
                <tr>
                  <td>Processor Name</td>
                  <td><?php echo $new['ptype']; ?></td>
                </tr>
                <tr>
                <tr>
                  <td>Processor Generation</td>
                  <td><?php echo $new['pgeneration']; ?></td>
                </tr>
                <tr>
                  <td>Processor Core</td>
                  <td><?php echo $new['pcore']; ?></td>
                </tr>
                <tr>
                  <td>Processor Variant</td>
                  <td>
                  <?php echo $new['pverient']; ?>
                  </td>
                </tr>
                <tr>
                  <td>SSD</td>
                  <td><?php echo $new['ssd']; ?></td>
                </tr>
                <tr>
                  <td>SSD Capacity</td>
                  <td><?php echo $new['ssd_cap']; ?></td>
                </tr>
                <tr>
                <tr>
                  <td>RAM</td>
                  <td><?php echo $new['ram']; ?></td>
                </tr>
                <tr>
                  <td>RAM type</td>
                  <td><?php echo $new['ram_type']; ?></td>
                </tr>
                <tr>
                  <td>Graphic Card</td>
                  <td>
                  <?php echo $new['graphic']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Graphic Capacity</td>
                  <td>
                  <?php echo $new['graphic_cap']; ?>
                  </td>
                </tr>
              </table>
              <table class="sac-table">
                <tr>
                  <td style="color: black; font-size: 18px; width: 25%">
                    Operating system
                  </td>
                </tr>
                <tr>
                  <td>OS architechture</td>
                  <td><?php echo $new['os_architechture']; ?></td>
                </tr>
                <tr>
                  <td>Operating System</td>
                  <td><?php echo $new['system']; ?></td>
                </tr>
                
              </table>
              <table class="sac-table">
                <tr>
                  <td style="color: black; font-size: 18px; width: 25%">
                    Ports
                  </td>
                </tr>
                <tr>
                  <td>USB</td>
                  <td><?php echo $new['usb']; ?></td>
                </tr>
                <tr>
                  <td>HDMI</td>
                  <td><?php echo $new['hdmi']; ?></td>
                </tr>
                
              </table>

              <table class="sac-table">
                <tr>
                  <td style="color: black; font-size: 18px; width: 25%">
                    Display and audio features Features
                  </td>
                </tr>
                <tr>
                  <td>Touch Screen</td>
                  <td><?php echo $new['touchscreen']; ?></td>
                </tr>
                <tr>
                  <td>Screen Size</td>
                  <td><?php echo $new['ssize']; ?></td>
                </tr>
                <tr>
                  <td>Screen Resolution</td>
                  <td><?php echo $new['resolution']; ?></td>
                </tr>
                <tr>
                  <tr>
                    <td>Screen Type</td>
                    <td><?php echo $new['stype']; ?></td>
                  </tr>
                  <td>Speaker</td>
                  <td><?php echo $new['speaker']; ?></td>
                </tr>
                <tr>
                  <td>Mic</td>
                  <td><?php echo $new['mic']; ?></td>
                </tr>
              </table>

              <table class="sac-table">
                <tr>
                  <td style="color: black; font-size: 18px; width: 25%">
                    Connectivity Features
                  </td>
                </tr>
                <tr>
                  <td>Wireless LAN</td>
                  <td><?php echo $new['lan']; ?></td>
                </tr>
                <tr>
                  <td>Bluetooth</td>
                  <td><?php echo $new['bluetooth']; ?></td>
                </tr>
              </table>

              <table class="sac-table">
                <tr>
                  <td style="color: black; font-size: 18px; width: 25%">
                    Additional Features
                  </td>
                </tr>
                <tr>
                  <td>Web Camera</td>
                  <td><?php echo $new['camera']; ?></td>
                </tr>
                <tr>
                <tr>
                  <td>Backlight Keybord</td>
                  <td><?php echo $new['backlight']; ?></td>
                </tr>
                <tr>
                  <td>Weight</td>
                  <td><?php echo $new['weight']; ?></td>
                </tr>
              </table>

              <table class="sac-table">
                <tr>
                  <td style="color: black; font-size: 18px; width: 25%">
                    Warranty
                  </td>
                </tr>
                <tr>
                  <td>Warranty summery</td>
                  <td><?php echo $new['warranty']; ?></td>
                </tr>
                <tr>
                <tr>
                  <td>None Warranty</td>
                  <td><?php echo $new['nonwarranty']; ?></td>
                </tr>
              </table>

              <p id="view">view more</p>
            </div>
            <div class="rating-main">
              <div class="headline">
                <div class="head-item">Rating & Reviews</div>
              </div>
              <div class="spacipied-rating">
                <div class="rating">
                  <div class="rating-counter">
                    <h5>Rate this product</h5>
                    <?php if(isset($_SESSION['username'])){ ?>
                    <span onclick="gfg(1)" class="star">★ </span>
                    <span onclick="gfg(2)" class="star">★ </span>
                    <span onclick="gfg(3)" class="star">★ </span>
                    <span onclick="gfg(4)" class="star">★ </span>
                    <span onclick="gfg(5)" class="star">★ </span>
                    <form action="../admin//pages/process.php">
                    <input id="feedback" name="feedback" type="text" placeholder="feedback" />
                    <input type="hidden" name="star" value="" id="output">
                    <input type="hidden" name="pid" value="<?php echo $new['id']; ?>">
                    <input type="hidden" name="dbname" value="laptop">
                    <input type="hidden" name="uid" value="<?php echo $_SESSION['username']; ?>">
                    <input type="submit" name="laptoprating" value="Post Rating" />
                    </form>
                    <?php }else{ ?>
                      <a href="../forms/login.php">login for rating</a>
                      <?php } ?>
                    <!-- <h4 id="output">Rating is: 0/5</h4> -->
                    <div class="review">
                      <?php
                      $pid = $new['id'];
                      $sql3 = "select * from rating where productid=$pid and dbname = 'laptop' and status = '1'";
                      $res3 = mysqli_query($con,$sql3);
                      if(mysqli_num_rows(($res3))>0){
                        while($rating = mysqli_fetch_assoc($res3)){
                      ?>
                      <h5>
                        <?php echo $rating['feedback']; ?>
                        <span
                          class="new"
                          style="
                            background-color: blue;
                            color: white;
                            font-size: 60%;
                          "
                          ><?php echo $rating['rating']; ?> <i class="fa-solid fa-star"></i
                        ></span>
                      </h5>
                      <?php
                        }
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card 1 -->
        <div class="card">
          <h1>Best for you</h1>
          <div class="main-cart">
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/poco_c65-removebg-preview.png" alt="" />
                <h3>Poco C65</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 8999</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img
                  src="../cart image/iphone_15-removebg-preview.png"
                  alt=""
                />
                <h3>Iphone 15 pro max</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i>1,59,900</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/washing machin.png" alt="" />
                <h3>Washing Machine</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 42,000</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/frig-removebg-preview.png" alt="" />
                <h3>Refrigerater</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 20,000</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/tv-removebg-preview.png" alt="" />
                <h3>TV 100 inch</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 21,999</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/poco_c65-removebg-preview.png" alt="" />
                <h3>Poco C65</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 8999</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/poco_c65-removebg-preview.png" alt="" />
                <h3>Poco C65</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 8999</p>
              </a>
            </div>
          </div>
        </div>
        <!-- card 2 -->
        <div class="card">
          <h1>Best for you</h1>
          <div class="main-cart">
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/poco_c65-removebg-preview.png" alt="" />
                <h3>Poco C65</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 8999</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img
                  src="../cart image/iphone_15-removebg-preview.png"
                  alt=""
                />
                <h3>Iphone 15 pro max</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i>1,59,900</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/washing machin.png" alt="" />
                <h3>Washing Machine</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 42,000</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/frig-removebg-preview.png" alt="" />
                <h3>Refrigerater</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 20,000</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/tv-removebg-preview.png" alt="" />
                <h3>TV 100 inch</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 21,999</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/poco_c65-removebg-preview.png" alt="" />
                <h3>Poco C65</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 8999</p>
              </a>
            </div>
            <div class="cart-item">
              <a href="cart-detail/cart-detail.html">
                <img src="../cart image/poco_c65-removebg-preview.png" alt="" />
                <h3>Poco C65</h3>
                <p><i class="fa-solid fa-indian-rupee-sign"></i> 8999</p>
              </a>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
    <script src="cart-detail.js"></script>
  </body>
</html>
<?php }else{echo "PRODUCT NOT FOUNDED";}?>