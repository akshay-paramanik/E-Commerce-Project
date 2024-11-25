<?php
session_start();
require_once "connect.php";
$isEdit = false;
$pname=$price=$img1=$img2=$img3=$box=$modelnum=$modelname=$color=$type=$touch=$microsoft=$dtype=$reso=$system=$ptype=$pverient=$pgeneration=$architechture=$pbrand=$core=$ssd=$ssdc=$ram=$ramtype=$graphic=$graphicC=$camera=$lan=$bluetooth=$usb=$cell=$backup=$hdmi=$backlight=$weight =$speaker=$mic=$titl=$offerone=$offertwo=$offerthree=$warr=$nonwarr=$img4=$img5=$pdes1=$pdes2=$size=$discount=$seller=$quantity=$title='';
if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && !empty($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $sql="select * from laptop where id=$id";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $data = mysqli_fetch_assoc($res);
        $pname = $data['pname'];
        $price = $data['price'];
        $img1 = $data['imageone'];
        $img2 = $data['imagetwo'];
        $img3 = $data['imagethree'];
        $box = $data['sales_package'];
        $modelnum = $data['model_num'];
        $modelname = $data['model_name'];
        $color = $data['color'];
        $type = $data['type'];
        $touch = $data['touchscreen'];
        $microsoft = $data['microsoft'];
        $dtype = $data['stype'];
        $reso = $data['resolution'];
        $system = $data['system'];
        $ptype = $data['ptype'];
        $pverient = $data['pverient'];
        $pgeneration = $data['pgeneration'];
        $architechture = $data['os_architechture'];
        $pbrand = $data['pbrand'];
        $core = $data['pcore'];
        $ssd = $data['ssd'];
        $ssdc = $data['ssd_cap'];
        $ram = $data['ram'];
        $ramtype = $data['ram_type'];
        $graphic = $data['graphic'];
        $graphicC = $data['graphic_cap'];
        $camera = $data['camera'];
        $lan = $data['lan'];
        $bluetooth = $data['bluetooth'];
        $usb = $data['usb'];
        $cell = $data['battery_cell'];
        $backup = $data['battery_backup'];
        $hdmi = $data['hdmi'];
        $backlight = $data['backlight'];
        $weight = $data['weight'];
        $speaker = $data['speaker'];
        $mic = $data['mic'];
        $title = $data['title'];
        $offerone = $data['offerone'];
        $offertwo = $data['offertwo'];
        $offerthree = $data['offerthree'];
        $warr = $data['warranty'];
        $nonwarr = $data['nonwarranty'];
        $img4 = $data['pimage_one'];
        $img5 = $data['pimage_two'];
        $pdes1 = $data['pdesone'];
        $pdes2 = $data['pdestwo'];
        $size = $data['ssize'];
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
            <h1>Update Laptop</h1>
                <?php }else{ ?>
                <form action="process.php" method="post" enctype="multipart/form-data"> <?php } ?>
                <h1>Add Laptop</h1>
                <label for="pname"><b>Product Name</b></label>
                <input type="text" placeholder="Product product name" name="pname" value="<?php echo $pname; ?>" id="pname" required>
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Product title" name="title" value="<?php echo $title; ?>" id="title" required>
                <label for="price"><b>Product Price Amount</b></label>
                <input type="number" placeholder="Product price" name="price" value="<?php echo $price; ?>" id="price" required>
                <label for="images"><b>Upload images</b></label><br>
                <input type="file" name="img1" id="">
                <input type="file" name="img2" id="">
                <input type="file" name="img3" id=""><br>
                <label for="offers"><b>Enter 3 offers</b></label>
                <input type="text" placeholder="Enter offer one" value="<?php echo $offerone; ?>" name="offer1" id="" required>
                <input type="text" placeholder="Enter offer two" value="<?php echo $offertwo; ?>" name="offer2" id="" required>
                <input type="text" placeholder="Enter offer three" value="<?php echo $offerthree; ?>" name="offer3" id="" required>
                <label for="offers"><b>Enter Product offer</b></label>
                <input type="number" placeholder="Enter product offer" value="<?php echo $discount; ?>" name="poffer" id="" required>
                <label for="offers"><b>Enter Seller name</b></label>
                <input type="text" placeholder="Enter seller name" value="<?php echo $seller; ?>" name="seller" id="" required>
                <h3>General details</h3>
                <label for="package"><b>In box</b></label>
                <input type="text" placeholder="Enter box inside details" name="package" value="<?php echo $box; ?>" id="package" required>
                <label for="color"><b>color</b></label>
                <input type="text" placeholder="Enter color" name="color" value="<?php echo $color; ?>" id="color" required>
                <label for="model"><b>Model Number</b></label>
                <input type="text" placeholder="Enter model number" name="modelnum" value="<?php echo $modelnum; ?>" id="model" required>
                <label for="model"><b>Model Name</b></label>
                <input type="text" placeholder="Enter model name" name="modelname" value="<?php echo $modelname; ?>" id="model" required>
                <label for="model"><b>Laptop Type</b></label>
                <input type="text" placeholder="Enter laptop type" name="type" value="<?php echo $type; ?>" id="model" required>
                <label for="model"><b>Battery cell</b></label>
                <input type="text" placeholder="Enter battery cells" name="cell" value="<?php echo $cell; ?>" id="model" required>
                <label for="model"><b>Battery Backup</b></label>
                <input type="text" placeholder="Enter backup in hours" name="backup" value="<?php echo $backup; ?>" id="model" required>
                <label for="screen"><b>Microsoft Provided</b></label>
                <select name="msoffice" id="screen" value="<?php echo $microsoft; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="memory"><b>Speaker</b></label>
                <select name="speaker" id="memory" value="<?php echo $speaker; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <h3>Processor & Memory</h3>
                <label for="pbrand"><b>Processor Brand</b></label>
                <input type="text" placeholder="Enter Processor Brand" name="pbrand" value="<?php echo $pbrand; ?>" id="pbrand" required>
                <label for="ptype"><b>Processor type</b></label>
                <input type="text" placeholder="Enter Processor type" name="ptype" value="<?php echo $ptype; ?>" id="ptype" required>
                <label for="ptype"><b>Processor Variant</b></label>
                <input type="text" placeholder="Enter Processor variant" name="pvariant" value="<?php echo $pverient; ?>" id="ptype" required>
                <label for="ptype"><b>Processor generation</b></label>
                <input type="text" placeholder="Enter Processor generation" name="gen" value="<?php echo $pgeneration; ?>" id="ptype" required>
                <label for="core"><b>Processor core</b></label>
                <input type="number" placeholder="Enter Processor core" name="core" value="<?php echo $core; ?>" id="core" required>
                <label for="ram"><b>RAM</b></label>
                <input type="text" placeholder="Enter RAM with GB" name="ram" value="<?php echo $ram; ?>" id="ram" required>
                <label for="ram"><b>RAM type</b></label>
                <input type="text" placeholder="Enter RAM type" name="ramtype" value="<?php echo $ramtype; ?>" id="ram" required>
                <label for="ROM"><b>SSD</b></label>
                <select name="ssd" id="screen" value="<?php echo $ssd; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="ram"><b>SSD Capacity</b></label>
                <input type="text" placeholder="Enter ssd Capacity with GB" name="ssdc" value="<?php echo $ssdc; ?>" id="ram" required>
                <label for="screen"><b>Graphic Card Type</b></label>
                <input type="text" placeholder="Enter graphic card type" name="graphic" value="<?php echo $graphic; ?>" id="expstrg" required>
                <label for="expstrg"><b>Graphic Card Capacity</b></label>
                <input type="text" placeholder="Enter capacity of graphic with GB" name="gcap" value="<?php echo $graphicC; ?>" id="expstrg" required>
                <h3>Operating System</h3>
                <label for="screen"><b>Os architechture</b></label>
                <input type="text" placeholder="Enter os architechture" name="architechture" value="<?php echo $architechture; ?>" id="expstrg" required>
                <label for="screen"><b>Operating System</b></label>
                <input type="text" placeholder="Enter operating system" name="system" value="<?php echo $system; ?>" id="expstrg" required>
                <h3>Ports</h3>
                <label for="screen"><b>Mic</b></label>
                <select name="mic" id="screen" value="<?php echo $mic; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="screen"><b>USB Port</b></label>
                <input type="text" placeholder="Enter usb ports" name="usb" value="<?php echo $usb; ?>" id="expstrg" required>
                <label for="screen"><b>HDMI Port</b></label>
                <input type="text" placeholder="Enter HDMI ports" name="hdmi" value="<?php echo $hdmi; ?>" id="expstrg" required>
                <h3>Display Features</h3>
                <label for="screen"><b>Touch screen</b></label>
                <select name="screen" id="screen" value="<?php echo $touch; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="size"><b>Display size</b></label>
                <input type="text" placeholder="Enter display size" name="size" value="<?php echo $size; ?>" id="size" required>
                <label for="address"><b>Display type</b></label>
                <select name="dtype" id="" value="<?php echo $dtype; ?>">
                    <option value="HD">HD</option>
                    <option value="HD+">HD+</option>
                    <option value="Full HD">Full HD</option>
                    <option value="Full HD+">Full HD+</option>
                    <option value="Amolate">Amolate</option>
                </select>
                <label for="resolution"><b>Screen resolution</b></label>
                <input type="text" placeholder="Enter screen resolution" name="reso" value="<?php echo $reso; ?>" id="resolution" required>
                <h3>Connectivity Features</h3>
                <label for="sim"><b>Wireless LAN</b></label>
                <input type="text" placeholder="Enter lan type" name="lan" value="<?php echo $lan; ?>" id="sim" required>
                <label for="sim"><b>Bluetooth</b></label>
                <input type="text" placeholder="Enter bluetooth type" name="bluetooth" value="<?php echo $bluetooth; ?>" id="sim" required>
                <h3>Aditional Features</h3>
                <label for="sim"><b>Web Camera</b></label>
                <input type="text" placeholder="Enter enter web camera type" name="camera" value="<?php echo $camera; ?>" id="sim" required>
                <label for="charge"><b>Backlit Keyboard</b></label>
                <select name="keybord" id="charge" value="<?php echo $backlight; ?>">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
                <label for="sim"><b>Weight</b></label>
                <input type="text" placeholder="Enter laptop weight in gram" name="weight" value="<?php echo $weight; ?>" id="sim" required>
                <h3>Enter Product Details</h3>
                <label for="p1"><b>Product Description one</b></label>
                <input type="text" placeholder="Enter product description" name="pdes1" value="<?php echo $pdes1; ?>" id="p1" required>
                <label for="images"><b>Uloade images</b></label><br>
                <input type="file" name="pimg1" id=""><br>
                <label for="p1"><b>Product Description two</b></label>
                <input type="text" placeholder="Enter product description" name="pdes2" value="<?php echo $pdes2; ?>" id="p1" required>
                <label for="images"><b>Uloade images</b></label><br>
                <input type="file" name="pimg2" id="">

                <h3>Enter Warranty Details</h3>
                <label for="images"><b>Warranty</b></label><br>
                <input type="text" name="warr" placeholder="Enter on warranty summery" id="" value="<?php echo $warr; ?>">
                <label for="images"><b>None Warranty</b></label><br>
                <input type="text" name="nonewarr" placeholder="Enter none warranty summery" id="" value="<?php echo $nonwarr; ?>">
                    <?php if($isEdit){ ?>
                        <?php $_SESSION['laptopid']=$data['id']; ?>
                        <input type="submit" class="registerbtn" value="Update" name="updatelaptop">
                  <?php  }else{ ?>
                    <input type="submit" class="registerbtn" value="Add Laptop" name="laptop">
               <?php   } ?>
                
    
        </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>