<?php
session_start();
require_once "connect.php";
$isEdit = false;
$pname=$price=$img1=$img2=$img3=$box=$model=$color=$sim=$touch=$otg=$charge=$dtype=$reso=$system=$ptype=$pbrand=$core=$storage=$ram=$expestorage=$memory=$primary=$front=$network=$usb=$battery=$height=$weight=$depth=$gps=$title=$offerone=$offertwo=$offerthree=$wifi=$hotspot=$img4 =$img5=$pdes1=$pdes2=$size=$discount=$seller=$quantity='';
if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && !empty($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $sql="select * from mobile where id=$id";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $data = mysqli_fetch_assoc($res);
        $pname = $data['pname'];
        $price = $data['price'];
        $img1 = $data['imageone'];
        $img2 = $data['imagetwo'];
        $img3 = $data['imagethree'];
        $box = $data['sales_package'];
        $model = $data['model_name'];
        $color = $data['color'];
        $sim = $data['sim_slot'];
        $touch = $data['touchscreen'];
        $otg = $data['otg_compatible'];
        $charge = $data['quick_charging'];
        $dtype = $data['display_type'];
        $reso = $data['resolution'];
        $system = $data['system'];
        $ptype = $data['processor_type'];
        $pbrand = $data['processor_brand'];
        $core = $data['core'];
        $storage = $data['storage'];
        $ram = $data['ram'];
        $expestorage = $data['expestorage'];
        $memory = $data['memorycard'];
        $primary = $data['primarycamera'];
        $front = $data['frontcamera'];
        $network = $data['network'];
        $usb = $data['usb'];
        $battery = $data['battery'];
        $height = $data['height'];
        $weight = $data['weight'];
        $depth = $data['depth'];
        $gps = $data['gps'];
        $title = $data['title'];
        $offerone = $data['offerone'];
        $offertwo = $data['offertwo'];
        $offerthree = $data['offerthree'];
        $wifi = $data['wifi'];
        $hotspot = $data['hotspot'];
        $img4 = $data['hightimage_one'];
        $img5 = $data['hightimage_two'];
        $pdes1 = $data['paragraphone'];
        $pdes2 = $data['paragraphtwo'];
        $size = $data['display_size'];
        $discount = $data['discount'];
        $seller = $data['seller'];
        $quantity = $data['quantity'];
        $isEdit = true;
    }
}
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
                <?php if($isEdit){ ?>
            <form action="action.php" method="post" enctype="multipart/form-data">
                <h1>Update Mobiles</h1>
                <label for="pname"><b>Product Name</b></label>
                <input type="text" placeholder="Product product name" name="pname" value="<?php echo $pname; ?>" id="pname" required>
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Product title" name="title" value="<?php echo $title; ?>" id="title" required>
                <label for="price"><b>Product Price Amount</b></label>
                <input type="number" placeholder="Product price" name="price" value="<?php echo $price; ?>" id="price" required>
                <label for="images"><b>Upload images</b></label><br>
                <input type="file" name="img1" value="<?php echo $img1; ?>">
                <input type="file" name="img2" value="<?php echo $img2; ?>">
                <input type="file" name="img3" value="<?php echo $img3; ?>"><br>
                <label for="offers"><b>Enter 3 offers</b></label>
                <input type="text" placeholder="Enter offer one" value="<?php echo $offerone; ?>" name="offer1" id="" required>
                <input type="text" placeholder="Enter offer two" value="<?php echo $offertwo; ?>" name="offer2" id="" required>
                <input type="text" placeholder="Enter offer three" value="<?php echo $offerthree; ?>" name="offer3" id="" required>
                <label for="offers"><b>Enter Product offer</b></label>
                <input type="number" placeholder="Enter product offer" value="<?php echo $discount; ?>" name="poffer" id="" required>
                <label for="offers"><b>Enter Seller name</b></label>
                <input type="text" placeholder="Enter seller name" value="<?php echo $seller; ?>" name="seller" id="" required>
                <h3>General details</h3>
                <label for="color"><b>color</b></label>
                <input type="text" placeholder="Enter color" name="color" value="<?php echo $color; ?>" id="color" required>
                <label for="model"><b>Model Name</b></label>
                <input type="text" placeholder="Enter model name" name="model" value="<?php echo $model; ?>" id="model" required>
                <label for="package"><b>In box</b></label>
                <input type="text" placeholder="Enter box inside details" name="package" value="<?php echo $box; ?>" id="package" required>
                <label for="package"><b>Quantity</b></label>
                <input type="number" placeholder="Enter qantity" name="quantity" value="<?php echo $quantity; ?>" id="package" required>
                <label for="screen"><b>Touch screen</b></label>
                <label for="screen"><b>Touch screen</b></label>
                <select name="screen" id="screen" value="<?php echo $touch; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="otg"><b>OTG capability</b></label>
                <select name="otg" id="otg" value="<?php echo $otg; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="charge"><b>Quick Charging</b></label>
                <select name="charge" id="charge" value="<?php echo $charge; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="sim"><b>SIM slote</b></label>
                <input type="text" placeholder="Enter sim slote type" name="sim" value="<?php echo $sim; ?>" id="sim" required>
                <label for="usb"><b>USB type</b></label>
                <select name="usb" id="usb" value="<?php echo $usb; ?>">
                    <option value="micro usb type B">Micro usb type B</option>
                    <option value="micro usb type C">Micro usb type C</option>
                </select>
                <label for="memory"><b>Memory card slote</b></label>
                <select name="memory" id="memory" value="<?php echo $memory; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="battery"><b>Battery rang</b></label>
                <input type="text" placeholder="Enter battery rang with mAH" name="battery" value="<?php echo $battery; ?>" id="battery" required>
                <h3>Enter Product Details</h3>
                <label for="p1"><b>Product Description one</b></label>
                <input type="text" placeholder="Enter product description" name="pdes1" value="<?php echo $pdes1; ?>" id="p1" required>
                <label for="images"><b>Uloade images</b></label><br>
                <input type="file" name="pimg1" id="" value="<?php echo $img3; ?>"><br>
                <label for="p1"><b>Product Description two</b></label>
                <input type="text" placeholder="Enter product description" name="pdes2" value="<?php echo $pdes2; ?>" id="p1" required>
                <label for="images"><b>Uloade images</b></label><br>
                <input type="file" name="pimg2" id="">
                <h3>System details</h3>
                <label for="ram"><b>RAM</b></label>
                <input type="text" placeholder="Enter RAM with GB" name="ram" value="<?php echo $ram; ?>" id="ram" required>
                <label for="ROM"><b>ROM</b></label>
                <input type="text" placeholder="Enter ROM with GB" name="rom" value="<?php echo $storage; ?>" id="rom" required>
                <label for="expstrg"><b>Expendable storage</b></label>
                <input type="text" placeholder="Enter expendable storage rang" name="expstrg" value="<?php echo $expestorage; ?>" id="expstrg" required>
                <label for="pbrand"><b>Processor Brand</b></label>
                <input type="text" placeholder="Enter Processor Brand" name="pbrand" value="<?php echo $pbrand; ?>" id="pbrand" required>
                <label for="ptype"><b>Processor type</b></label>
                <input type="text" placeholder="Enter Processor type" name="ptype" value="<?php echo $ptype; ?>" id="ptype" required>
                <label for="core"><b>Processor core</b></label>
                <input type="text" placeholder="Enter Processor core" name="core" value="<?php echo $core; ?>" id="core" required>
                <label for="system"><b>Operating system</b></label>
                <input type="text" placeholder="Enter Operating system" name="system" value="<?php echo $system; ?>" id="system" required>
                <h3>Display Fetures</h3>
                <label for="size"><b>Display size</b></label>
                <input type="text" placeholder="Enter display size" name="size" value="<?php echo $size; ?>" id="size" required>
                <label for="address"><b>Display type</b></label>
                <select name="dtype" id="" value="<?php echo $dtype; ?>">
                    <option value="HD">HD</option>
                    <option value="Full HD">Full HD</option>
                    <option value="Full HD+">Full HD+</option>
                    <option value="Amolate">Amolate</option>
                </select>
                <label for="resolution"><b>Screen resolution</b></label>
                <input type="text" placeholder="Enter screen resolution" name="reso" value="<?php echo $reso; ?>" id="resolution" required>
                <h3>Camera</h3>
                <label for="primary"><b>Primary Camera</b></label>
                <input type="text" placeholder="Enter how many camera example: 50MP+20MP" name="primary" value="<?php echo $primary; ?>" id="primary" required>
                <label for="front"><b>Front Camera</b></label>
                <input type="text" placeholder="Enter front camera with MP" name="front" value="<?php echo $front; ?>" id="front" required>
                <h3>Network</h3>
                <label for="network"><b>Network type</b></label>
                <input type="text" placeholder="Enter network type support" name="network" value="<?php echo $network; ?>" id="network" required>
                <label for="gps"><b>GPS available</b></label>
                <select name="gps" id="" value="<?php echo $gps; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="wifi"><b>Wifi available</b></label>
                <select name="wifi" id="" value="<?php echo $wifi; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="hotspot"><b>Hotspot available</b></label>
                <select name="hotspot" id="" value="<?php echo $hotspot; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <h3>Height and weight</h3>
                <label for="height"><b>Height</b></label>
                <input type="text" placeholder="Enter height" name="height" value="<?php echo $height; ?>" id="height" required>
                <label for="weight"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="weight" value="<?php echo $weight; ?>" id="weight" required>
                <label for="depth"><b>Depth</b></label>
                <input type="text" placeholder="Enter depth" name="depth" value="<?php echo $depth; ?>" id="depth" required>
                <input type="submit" class="registerbtn" value="Update Mobile" name="updatemobile">
                <?php $_SESSION['mobileid']=$data['id']; ?>
        </form>
            <?php }else{ ?>
                <form action="process.php" method="post" enctype="multipart/form-data">
                <h1>Add Mobiles</h1>
                <label for="pname"><b>Product Name</b></label>
                <input type="text" placeholder="Product product name" name="pname" value="" id="pname" required>
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Product title" name="title" value="" id="title" required>
                <label for="price"><b>Product Price Amount</b></label>
                <input type="number" placeholder="Product price" name="price" value="" id="price" required>
                <label for="images"><b>Upload images</b></label><br>
                <input type="file" name="img1" id="">
                <input type="file" name="img2" id="">
                <input type="file" name="img3" id=""><br>
                <label for="offers"><b>Enter 3 offers</b></label>
                <input type="text" placeholder="Enter offer one" value="" name="offer1" id="" required>
                <input type="text" placeholder="Enter offer two" value="" name="offer2" id="" required>
                <input type="text" placeholder="Enter offer three" value="" name="offer3" id="" required>
                <label for="offers"><b>Enter Product offer</b></label>
                <input type="number" placeholder="Enter product offer" value="" name="poffer" id="" required>
                <label for="offers"><b>Enter Seller name</b></label>
                <input type="text" placeholder="Enter seller name" value="" name="seller" id="" required>
                <h3>General details</h3>
                <label for="color"><b>color</b></label>
                <input type="text" placeholder="Enter color" name="color" value="" id="color" required>
                <label for="model"><b>Model Name</b></label>
                <input type="text" placeholder="Enter model name" name="model" value="" id="model" required>
                <label for="package"><b>In box</b></label>
                <input type="text" placeholder="Enter box inside details" name="package" value="" id="package" required>
                <label for="package"><b>Quantity</b></label>
                <input type="number" placeholder="Enter qantity" name="quantity" value="" id="package" required>
                <label for="screen"><b>Touch screen</b></label>
                <label for="screen"><b>Touch screen</b></label>
                <select name="screen" id="screen">
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="otg"><b>OTG capability</b></label>
                <select name="otg" id="otg">
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="charge"><b>Quick Charging</b></label>
                <select name="charge" id="charge">
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="sim"><b>SIM slote</b></label>
                <input type="text" placeholder="Enter sim slote type" name="sim" value="" id="sim" required>
                <label for="usb"><b>USB type</b></label>
                <select name="usb" id="usb">
                    <option value="micro usb type B">Micro usb type B</option>
                    <option value="micro usb type C" selected>Micro usb type C</option>
                </select>
                <label for="memory"><b>Memory card slote</b></label>
                <select name="memory" id="memory">
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="battery"><b>Battery rang</b></label>
                <input type="text" placeholder="Enter battery rang with mAH" name="battery" value="" id="battery" required>
                <h3>Enter Product Details</h3>
                <label for="p1"><b>Product Description one</b></label>
                <input type="text" placeholder="Enter product description" name="pdes1" value="" id="p1" required>
                <label for="images"><b>Uloade images</b></label><br>
                <input type="file" name="pimg1" id=""><br>
                <label for="p1"><b>Product Description two</b></label>
                <input type="text" placeholder="Enter product description" name="pdes2" value="" id="p1" required>
                <label for="images"><b>Uloade images</b></label><br>
                <input type="file" name="pimg2" id="">
                <h3>System details</h3>
                <label for="ram"><b>RAM</b></label>
                <input type="text" placeholder="Enter RAM with GB" name="ram" value="" id="ram" required>
                <label for="ROM"><b>ROM</b></label>
                <input type="text" placeholder="Enter ROM with GB" name="rom" value="" id="rom" required>
                <label for="expstrg"><b>Expendable storage</b></label>
                <input type="text" placeholder="Enter expendable storage rang" name="expstrg" value="" id="expstrg" required>
                <label for="pbrand"><b>Processor Brand</b></label>
                <input type="text" placeholder="Enter Processor Brand" name="pbrand" value="" id="pbrand" required>
                <label for="ptype"><b>Processor type</b></label>
                <input type="text" placeholder="Enter Processor type" name="ptype" value="" id="ptype" required>
                <label for="core"><b>Processor core</b></label>
                <input type="text" placeholder="Enter Processor core" name="core" value="" id="core" required>
                <label for="system"><b>Operating system</b></label>
                <input type="text" placeholder="Enter Operating system" name="system" value="" id="system" required>
                <h3>Display Fetures</h3>
                <label for="size"><b>Display size</b></label>
                <input type="text" placeholder="Enter display size" name="size" value="" id="size" required>
                <label for="address"><b>Display type</b></label>
                <select name="dtype" id="">
                    <option value="HD">HD</option>
                    <option value="Full HD">Full HD</option>
                    <option value="Full HD+">Full HD+</option>
                    <option value="Amolate">Amolate</option>
                </select>
                <label for="resolution"><b>Screen resolution</b></label>
                <input type="text" placeholder="Enter screen resolution" name="reso" value="" id="resolution" required>
                <h3>Camera</h3>
                <label for="primary"><b>Primary Camera</b></label>
                <input type="text" placeholder="Enter how many camera example: 50MP+20MP" name="primary" value="" id="primary" required>
                <label for="front"><b>Front Camera</b></label>
                <input type="text" placeholder="Enter front camera with MP" name="front" value="" id="front" required>
                <h3>Network</h3>
                <label for="network"><b>Network type</b></label>
                <input type="text" placeholder="Enter network type support" name="network" value="" id="network" required>
                <label for="gps"><b>GPS available</b></label>
                <select name="gps" id="">
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="wifi"><b>Wifi available</b></label>
                <select name="wifi" id="">
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <label for="hotspot"><b>Hotspot available</b></label>
                <select name="hotspot" id="">
                    <option value="no">No</option>
                    <option value="yes" selected>Yes</option>
                </select>
                <h3>Height and weight</h3>
                <label for="height"><b>Height</b></label>
                <input type="text" placeholder="Enter height" name="height" value="" id="height" required>
                <label for="weight"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="weight" value="" id="weight" required>
                <label for="depth"><b>Depth</b></label>
                <input type="text" placeholder="Enter depth" name="depth" value="" id="depth" required>
    
                <input type="submit" class="registerbtn" value="Add Mobile" name="mobile">
        </form>
        <?php } ?>

            </div>
        </div>
        </div>
    </div>
</body>
</html>
