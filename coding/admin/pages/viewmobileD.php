<?php
require_once "connect.php";
if($_REQUEST['id']){
    $id = $_REQUEST['id'];
    $sql = "select * from mobile where id=$id";
    $res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/major.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>
<body>
<div class="container">
    <div class="main">
        <div class="left-part">
        <h1>Logo</h1>
        <div class="navbar">
                <a href="../index.php">Home</a>
                <a href="viewuser.php">View User</a>
                <a href="additem.php">Add Item</a>
                <a href="viewstocks.php">View Stocks</a>
                <a href="orders.php">Order</a>
                <a href="rating.php">Ratings</a>
            </div>
        </div>
        <div class="right-part">
            <div class="mobile">
                <?php if(mysqli_num_rows($res)){
                $data = mysqli_fetch_assoc($res);
?>
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <h1>View Mobiles Details</h1>
                    <a href="mobile.php?id=<?php echo $data['id']; ?>">edit</a><br>
                <label for="pname"><b>Product Name</b></label>
                <input type="text" placeholder="Product product name" name="pname" value="<?php echo $data['pname']; ?>" id="pname" disabled>
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Product title" name="title" value="<?php echo $data['title']; ?>" id="title" disabled>
                <label for="price"><b>Product Price Amount</b></label>
                <input type="number" placeholder="Product price" name="price" value="<?php echo $data['price'] ?>" id="price" disabled>
                <label for="images"><b>Product images</b></label><br>
                <div class="gift-card">
                <div class="gift-item">
                            <div class="image">
                            <img src="../<?php echo $data['imageone']; ?>" alt="">
                            </div>
                        </div>
                        <div class="gift-item">
                            <div class="image">
                            <img src="../<?php echo $data['imagetwo']; ?>" alt="">
                            </div>
                        </div>
                        <div class="gift-item">
                            <div class="image">
                            <img src="../<?php echo $data['imagethree']; ?>" alt="">
                            </div>
                        </div>
                        </div>
                <label for="offers"><b>Offers details</b></label>
                <input type="text" placeholder="Enter offer one" value="<?php echo $data['offerone']; ?>" name="offer1" id="" disabled>
                <input type="text" placeholder="Enter offer two" value="<?php echo $data['offertwo']; ?>" name="offer2" id="" disabled>
                <input type="text" placeholder="Enter offer three" value="<?php echo $data['offerthree']; ?>" name="offer3" id="" disabled>
                <label for="offers"><b>Offer in product</b></label>
                <input type="number" placeholder="Enter product offer" value="<?php echo $data['discount']; ?>%" name="poffer" id="" disabled>
                <label for="offers"><b>Seller name</b></label>
                <input type="text" placeholder="Enter seller name" value="<?php echo $data['seller']; ?>" name="seller" id="" disabled>
                <h3>General details</h3>
                <label for="color"><b>color</b></label>
                <input type="text" placeholder="Enter color" name="color" value="<?php echo $data['color']; ?>" id="color" disabled>
                <label for="model"><b>Model Name</b></label>
                <input type="text" placeholder="Enter model name" name="model" value="<?php echo $data['model_name']; ?>" id="model" disabled>
                <label for="package"><b>In box</b></label>
                <input type="text" placeholder="Enter box inside details" name="package" value="<?php echo $data['sales_package']; ?>" id="package" disabled>
                <label for="package"><b>Quantity</b></label>
                <input type="number" placeholder="Enter qantity" name="quantity" value="<?php echo $data['quantity']; ?>" id="package" disabled>
                <label for="screen"><b>Touch screen</b></label>
                <select name="screen" id="screen" value="<?php echo $data['touchscreen']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="otg"><b>OTG capability</b></label>
                <select name="otg" id="otg" value="<?php echo $data['otg']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="charge"><b>Quick Charging</b></label>
                <select name="charge" id="charge" value="<?php echo $data['quick_charging']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="sim"><b>SIM slote</b></label>
                <input type="text" placeholder="Enter sim slote type" name="sim" value="<?php echo $data['sim_slot']; ?>" id="sim" disabled>
                <label for="usb"><b>USB type</b></label>
                <select name="usb" id="usb" value="<?php echo $data['usb']; ?>" disabled>
                    <option value="micro usb type B">Micro usb type B</option>
                    <option value="micro usb type C" selected>Micro usb type C</option>
                </select>
                <label for="memory"><b>Memory card slote</b></label>
                <select name="memory" id="memory" value="<?php echo $data['memory']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="battery"><b>Battery rang</b></label>
                <input type="text" placeholder="Enter battery rang with mAH" name="battery" value="<?php echo $data['battery']; ?>" id="battery" disabled>
                <h3>Product Details</h3>
                <label for="p1"><b>Product Description one</b></label>
                <input type="text" placeholder="Enter product description" name="pdes1" value="<?php echo $data['paragraphone']; ?>" id="pdes1" >
                <label for="images"><b>Images one</b></label><br>
                <div class="gift-card">
                <div class="gift-item">
                            <div class="image">
                            <img src="../<?php echo $data['hightimage_one']; ?>" alt="">
                            </div>
                        </div>
                        </div>
                <label for="p1"><b>Product Description two</b></label>
                <input type="text" placeholder="Enter product description" name="pdes2" value="<?php echo $data['paragraphtwo']; ?>" id="pdes2" >
                <label for="images"><b>Images two</b></label><br>
                <div class="gift-card">
                <div class="gift-item">
                            <div class="image">
                            <img src="../<?php echo $data['hightimage_two']; ?>" alt="">
                            </div>
                        </div>
                        </div>
                <h3>System details</h3>
                <label for="ram"><b>RAM</b></label>
                <input type="text" placeholder="Enter RAM with GB" name="ram" value="<?php echo $data['ram']; ?>" id="ram" disabled>
                <label for="ROM"><b>ROM</b></label>
                <input type="text" placeholder="Enter ROM with GB" name="rom" value="<?php echo $data['storage']; ?>" id="rom" disabled>
                <label for="expstrg"><b>Expendable storage</b></label>
                <input type="text" placeholder="Enter expendable storage rang" name="expstrg" value="<?php echo $data['expestorage']; ?>" id="expstrg" disabled>
                <label for="pbrand"><b>Processor Brand</b></label>
                <input type="text" placeholder="Enter Processor Brand" name="pbrand" value="<?php echo $data['processor_brand']; ?>" id="pbrand" disabled>
                <label for="ptype"><b>Processor type</b></label>
                <input type="text" placeholder="Enter Processor type" name="ptype" value="<?php echo $data['processor_type']; ?>" id="ptype" disabled>
                <label for="core"><b>Processor core</b></label>
                <input type="text" placeholder="Enter Processor core" name="core" value="<?php echo $data['core']; ?>" id="core" disabled>
                <label for="system"><b>Operating system</b></label>
                <input type="text" placeholder="Enter Operating system" name="system" value="<?php echo $data['system']; ?>" id="system" disabled>
                <h3>Display Fetures</h3>
                <label for="size"><b>Display size</b></label>
                <input type="text" placeholder="Enter display size" name="size" value="<?php echo $data['display_size']; ?>" id="size" disabled>
                <label for="address"><b>Display type</b></label>
                <select name="dtype" id="" value="<?php echo $data['display_type']; ?>" disabled>
                    <option value="HD">HD</option>
                    <option value="Full HD">Full HD</option>
                    <option value="Full HD+">Full HD+</option>
                    <option value="Amolate">Amolate</option>
                </select>
                <label for="resolution"><b>Screen resolution</b></label>
                <input type="text" placeholder="Enter screen resolution" name="reso" value="<?php echo $data['resolution']; ?>" id="resolution" disabled>
                <h3>Camera</h3>
                <label for="primary"><b>Primary Camera</b></label>
                <input type="text" placeholder="Enter how many camera example: 50MP+20MP" name="primary" value="<?php echo $data['primarycamera']; ?>" id="primary" disabled>
                <label for="front"><b>Front Camera</b></label>
                <input type="text" placeholder="Enter front camera with MP" name="front" value="<?php echo $data['frontcamera']; ?>" id="front" disabled>
                <h3>Network</h3>
                <label for="network"><b>Network type</b></label>
                <input type="text" placeholder="Enter network type support" name="network" value="<?php echo $data['network']; ?>" id="network" disabled>
                <label for="gps"><b>GPS available</b></label>
                <select name="gps" id="" value="<?php echo $data['gps']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="wifi"><b>Wifi available</b></label>
                <select name="wifi" id="" values="<?php echo $data['wifi']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="hotspot"><b>Hotspot available</b></label>
                <select name="hotspot" id="" value="<?php echo $data['hotspot']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <h3>Height and weight</h3>
                <label for="height"><b>Height</b></label>
                <input type="text" placeholder="Enter height" name="height" value="<?php echo $data['height']; ?>" id="height" disabled>
                <label for="weight"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="weight" value="<?php echo $data['weight']; ?>" id="weight" disabled>
                <label for="depth"><b>Depth</b></label>
                <input type="text" placeholder="Enter depth" name="depth" value="<?php echo $data['depth']; ?>" id="depth" disabled>
        </form>
        <?php   }else{
            echo "data not found";
        } ?>

            </div>
        </div>
        </div>
    </div>
</body>
</html>
<?php }else{
    echo "not";
} ?>