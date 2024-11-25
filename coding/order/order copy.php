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
        <div class="order-part">
          <form action="../admin/pages/process.php">
          <div class="delivery-address">
            <div class="heading">
              <span>1</span>
              <h3>Delivery Address</h3>
            </div>
            <div class="address-note order-item">
              <div class="address-check">
                <div class="input-field">
                  <label for="checking">
                    <input type="radio" name="checking" id="checking" />
                    <h4>Samir Paramanik</h4>
                    <p>
                      Narsingh Bandh,Burnpur near Railway line Posho Shaw Mandir
                    </p>
                    <p>Asansol West Bengal Pin code: 713325</p>
                  </label>
                </div>
              </div>
              <div class="edit">
                <a href="#">EDIT</a>
              </div>
            </div>
          </div>
          <div class="order-summery order-item">
            <div class="heading">
              <span>2</span>
              <h3>Order Summary</h3>
            </div>
            <div class="cart-container">
              <div class="cart-box">
                <div class="box-item">
                  <div class="image-container">
                    <img
                      src="../cart image/iphone_15-removebg-preview.png"
                      alt=""
                    />
                  </div>
                  <div class="text-part">
                    <div class="description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      it,s your dream my dream
                    </div>
                    <div class="sub-description">32GB RAM 256GB ROM</div>
                    <div class="seller">seller: Asansol Apple Store</div>
                    <div class="price">
                      <span class="initial-price">
                        <i class="fa-solid fa-indian-rupee-sign"></i
                        ><del>1,99,999</del></span
                      ><span class="final-price">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        1,69,999</span
                      >
                      <span class="offer">15% Off</span>

                    </div>
                    <div class="external-part">
                      <div class="quantity">
                        <span class="decrement">-</span>
                        <input type="number" name="" id="" value="1" />
                        <span>+</span>
                      </div>
                      <span class="saved">Saved For Later</span>
                      <span class="Remove">Remove</span>
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
                <input type="radio" name="payment" id="credit-option" />
                <label for="credit-option">credit/Debit/ATM card</label>
              </div>
              <li>Secure as per RBI</li>
            </div>
            <div class="banking">
              <div class="bank">
                <input type="radio" name="payment" id="bank-option" />
                <label for="bank-option">Net Banking</label>
              </div>
              <li>Simple payment</li>
            </div>
            <div class="emi">
              <div class="instalment">
                <input type="radio" name="payment" id="emi-option" />
                <label for="emi-option">EMI</label>
              </div>
              <li>With best offer</li>
            </div>
            <div class="upi">
              <div class="upi-pay">
                <input type="radio" name="payment" id="upi-option" />
                <label for="upi-option">UPI</label>
              </div>
              <li>any upi app</li>
            </div>
            <div class="cod">
              <div class="cash">
                <input type="radio" name="payment" id="cod-option" />
                <label for="cod-option">COD(cash on delivery)</label>
              </div>
              <li>pay after delivery</li>
            </div>
            <div class="gift-card"></div>
            <input type="submit" name="order" id="order" value="PLACE ORDER">
          </div>
          </form>
        </div>
        <div class="caculation">
          <h2>Price details</h2>
          <hr />
          <div class="price">
            <span>Price</span>
            <span> <i class="fa-solid fa-indian-rupee-sign"></i>1,69,999</span>
          </div>
          <div class="discount">
            <span>Discount</span>
            <span>-<i class="fa-solid fa-indian-rupee-sign"></i>2000</span>
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
            <span><i class="fa-solid fa-indian-rupee-sign"></i>1,67,999</span>
          </div>
          <hr />
          <p>
            You will saved <i class="fa-solid fa-indian-rupee-sign"></i>2000
          </p>
        </div>
        
      </div>
    </div>
  </body>
</html>
