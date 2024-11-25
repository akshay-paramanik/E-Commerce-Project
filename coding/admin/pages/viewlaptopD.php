<?php
require_once "connect.php";
if($_REQUEST['id']){
    $id = $_REQUEST['id'];
    $sql = "select * from laptop where id=$id";
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
                <h1>View Laptop</h1>
                <a href="laptop.php?id=<?php echo $data['id']; ?>">edit</a><br>
                <label for="pname"><b>Product Name</b></label>
                <input type="text" placeholder="Product product name" name="pname" value="<?php echo $data['pname']; ?>" id="pname" disabled>
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Product title" name="title" value="<?php echo $data['title']; ?>" id="title" disabled>
                <label for="price"><b>Product Price Amount</b></label>
                <input type="number" placeholder="Product price" name="price" value="<?php echo $data['price']; ?>" id="price" disabled>
                <label for="images"><b>View images</b></label><br>
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
                <label for="offers"><b>Product offers</b></label>
                <input type="text" placeholder="Enter offer one" value="<?php echo $data['offerone']; ?>" name="offer1" id="" disabled>
                <input type="text" placeholder="Enter offer two" value="<?php echo $data['offertwo']; ?>" name="offer2" id="" disabled>
                <input type="text" placeholder="Enter offer three" value="<?php echo $data['offerthree']; ?>" name="offer3" id="" disabled>
                <label for="offers"><b>Product Discount</b></label>
                <input type="number" placeholder="Enter product offer" value="<?php echo $data['discount']; ?>" name="poffer" id="" disabled>
                <label for="offers"><b>Seller name</b></label>
                <input type="text" placeholder="Enter seller name" value="<?php echo $data['seller']; ?>" name="seller" id="" disabled>
                <h3>General details</h3>
                <label for="package"><b>In box</b></label>
                <input type="text" placeholder="Enter box inside details" name="package" value="<?php echo $data['sales_package']; ?>" id="package" disabled>
                <label for="color"><b>color</b></label>
                <input type="text" placeholder="Enter color" name="color" value="<?php echo $data['color']; ?>" id="color" disabled>
                <label for="model"><b>Model Number</b></label>
                <input type="text" placeholder="Enter model number" name="modelnum" value="<?php echo $data['model_num']; ?>" id="model" disabled>
                <label for="model"><b>Model Name</b></label>
                <input type="text" placeholder="Enter model name" name="modelname" value="<?php echo $data['model_name']; ?>" id="model" disabled>
                <label for="model"><b>Laptop Type</b></label>
                <input type="text" placeholder="Enter laptop type" name="type" value="<?php echo $data['type']; ?>" id="model" disabled>
                <label for="model"><b>Battery cell</b></label>
                <input type="text" placeholder="Enter battery cells" name="cell" value="<?php echo $data['battery_cell']; ?>" id="model" disabled>
                <label for="model"><b>Battery Backup</b></label>
                <input type="text" placeholder="Enter backup in hours" name="backup" value="<?php echo $data['battery_backup']; ?>" id="model" disabled>
                <label for="screen"><b>Microsoft Provided</b></label>
                <select name="msoffice" id="screen" value="<?php echo $data['microsoft']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="memory"><b>Speaker</b></label>
                <select name="speaker" id="memory" value="<?php echo $data['speaker']; ?>" disabled> 
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <h3>Processor & Memory</h3>
                <label for="pbrand"><b>Processor Brand</b></label>
                <input type="text" placeholder="Enter Processor Brand" name="pbrand" value="<?php echo $data['pbrand']; ?>" id="pbrand" disabled>
                <label for="ptype"><b>Processor type</b></label>
                <input type="text" placeholder="Enter Processor type" name="ptype" value="<?php echo $data['ptype']; ?>" id="ptype" disabled>
                <label for="ptype"><b>Processor Variant</b></label>
                <input type="text" placeholder="Enter Processor variant" name="pvariant" value="<?php echo $data['pverient']; ?>" id="ptype" disabled>
                <label for="ptype"><b>Processor generation</b></label>
                <input type="text" placeholder="Enter Processor generation" name="gen" value="<?php echo $data['pgeneration']; ?>" id="ptype" disabled>
                <label for="core"><b>Processor core</b></label>
                <input type="number" placeholder="Enter Processor core" name="core" value="<?php echo $data['pcore']; ?>" id="core" disabled>
                <label for="ram"><b>RAM</b></label>
                <input type="text" placeholder="Enter RAM with GB" name="ram" value="<?php echo $data['ram']; ?>" id="ram" disabled>
                <label for="ram"><b>RAM type</b></label>
                <input type="text" placeholder="Enter RAM type" name="ramtype" value="<?php echo $data['ram_type']; ?>" id="ram" disabled>
                <label for="ROM"><b>SSD</b></label>
                <select name="ssd" id="screen" value="<?php echo $data['ssd']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="ram"><b>SSD Capacity</b></label>
                <input type="text" placeholder="Enter ssd Capacity with GB" name="ssdc" value="<?php echo $data['ssd_cap']; ?>" id="ram" disabled>
                <label for="screen"><b>Graphic Card Type</b></label>
                <input type="text" placeholder="Enter graphic card type" name="graphic" value="<?php echo $data['graphic']; ?>" id="expstrg" disabled>
                <label for="expstrg"><b>Graphic Card Capacity</b></label>
                <input type="text" placeholder="Enter capacity of graphic with GB" name="gcap" value="<?php echo $data['graphic_cap']; ?>" id="expstrg" disabled>
                <h3>Operating System</h3>
                <label for="screen"><b>Os architechture</b></label>
                <input type="text" placeholder="Enter os architechture" name="architechture" value="<?php echo $data['os_architechture']; ?>" id="expstrg" disabled>
                <label for="screen"><b>Operating System</b></label>
                <input type="text" placeholder="Enter operating system" name="system" value="<?php echo $data['system']; ?>" id="expstrg" disabled>
                <h3>Ports</h3>
                <label for="screen"><b>Mic</b></label>
                <select name="mic" id="screen" value="<?php echo $data['mic']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="screen"><b>USB Port</b></label>
                <input type="text" placeholder="Enter usb ports" name="usb" value="<?php echo $data['usb']; ?>" id="expstrg" disabled>
                <label for="screen"><b>HDMI Port</b></label>
                <input type="text" placeholder="Enter HDMI ports" name="hdmi" value="<?php echo $data['hdmi']; ?>" id="expstrg" disabled>
                <h3>Display Features</h3>
                <label for="screen"><b>Touch screen</b></label>
                <select name="screen" id="screen" value="<?php echo $data['touchscreen']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="size"><b>Display size</b></label>
                <input type="text" placeholder="Enter display size" name="size" value="<?php echo $data['ssize']; ?>" id="size" disabled>
                <label for="address"><b>Display type</b></label>
                <select name="dtype" id="" value="<?php echo $data['stype']; ?>" disabled>
                    <option value="HD">HD</option>
                    <option value="HD+">HD+</option>
                    <option value="Full HD">Full HD</option>
                    <option value="Full HD+">Full HD+</option>
                    <option value="Amolate">Amolate</option>
                </select>
                <label for="resolution"><b>Screen resolution</b></label>
                <input type="text" placeholder="Enter screen resolution" name="reso" value="<?php echo $data['resolution']; ?>" id="resolution" disabled>
                <h3>Connectivity Features</h3>
                <label for="sim"><b>Wireless LAN</b></label>
                <input type="text" placeholder="Enter lan type" name="lan" value="<?php echo $data['lan']; ?>" id="sim" disabled>
                <label for="sim"><b>Bluetooth</b></label>
                <input type="text" placeholder="Enter bluetooth type" name="bluetooth" value="<?php echo $data['bluetooth']; ?>" id="sim" disabled>
                <h3>Aditional Features</h3>
                <label for="sim"><b>Web Camera</b></label>
                <input type="text" placeholder="Enter enter web camera type" name="camera" value="<?php echo $data['camera']; ?>" id="sim" disabled>
                <label for="charge"><b>Backlit Keyboard</b></label>
                <select name="keybord" id="charge" value="<?php echo $data['backlight']; ?>" disabled>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="sim"><b>Weight</b></label>
                <input type="text" placeholder="Enter laptop weight in gram" name="weight" value="<?php echo $data['weight']; ?>" id="sim" disabled>
                <h3>Enter Product Details</h3>
                <label for="p1"><b>Product Description one</b></label>
                <input type="text" placeholder="Enter product description" name="pdes1" value="<?php echo $data['pdesone']; ?>" id="p1" disabled>
                <label for="images"><b>Image</b></label><br>
                <div class="gift-card">
                <div class="gift-item">
                            <div class="image">
                            <img src="../<?php echo $data['pimage_one']; ?>" alt="">
                            </div>
                        </div>
                        </div>
                <label for="p1"><b>Product Description two</b></label>
                <input type="text" placeholder="Enter product description" name="pdes2" value="<?php echo $data['pdestwo']; ?>" id="p1" disabled>
                <label for="images"><b>Image</b></label><br>
                <div class="gift-card">
                <div class="gift-item">
                            <div class="image">
                            <img src="../<?php echo $data['pimage_two']; ?>" alt="">
                            </div>
                        </div>
                        </div>

                <h3>Enter Warranty Details</h3>
                <label for="images"><b>Warranty</b></label><br>
                <input type="text" name="warr" placeholder="Enter on warranty summery" id="" value="<?php echo $data['warranty']; ?>" disabled>
                <label for="images"><b>None Warranty</b></label><br>
                <input type="text" name="nonewarr" placeholder="Enter none warranty summery" id="" value="<?php echo $data['nonwarranty']; ?>" disabled>
        </form>
        <?php }else{
            echo "not";
        }
        ?>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
<?php }else{
    echo "not founded";
}
?>