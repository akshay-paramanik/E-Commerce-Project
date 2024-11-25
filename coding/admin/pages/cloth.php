<?php
session_start();
require_once "connect.php";
$isEdit = false;
$pname=$price=$img1=$img2=$img3=$box=$model=$color=$title=$offerone=$offertwo=$offerthree=$discount=$seller=$quantity=$brand=$size=$type=$gen=$matterial=$ocassion=$pattern=$quantity='';
if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && !empty($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $sql="select * from cloth where id=$id";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $data = mysqli_fetch_assoc($res);
        $pname = $data['pname'];
        $title = $data['title'];
        $price = $data['price'];
        $img1 = $data['imageone'];
        $img2 = $data['imagetwo'];
        $img3 = $data['imagethree'];
        $box = $data['pack_of'];
        $model = $data['model_name'];
        $color = $data['color'];
        $offerone = $data['offerone'];
        $offertwo = $data['offertwo'];
        $offerthree = $data['offerthree'];
        $discount = $data['discount'];
        $seller = $data['seller'];
        $brand = $data['brand'];
        $size = $data['size'];
        $type = $data['product_type'];
        $gen = $data['ideal_for'];
        $matterial = $data['matterial'];
        $ocassion = $data['ocassion'];
        $pattern = $data['pattern'];
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
                <?php }else{ ?>
                    <form action="process.php" method="post" enctype="multipart/form-data">
                <?php } ?>
                <h1>Add Cloths or Footware</h1>
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
                <h3>Product Details</h3>
                <label for="package"><b>Product type</b></label>
                <select name="type" id="" value="<?php echo $type; ?>">
                    <option value="Men's Footware">Men's Footware</option>
                    <option value="Women's Footware">Women's Footware</option>
                    <option value="Kid's Footware">Kid's Footware</option>
                    <option value="Kidsware">Kidsware</option>
                    <option value="Men's ware">Men's ware</option>
                    <option value="Women's ware">Women's ware</option>
                </select>
                <label for="color"><b>color</b></label>
                <input type="text" placeholder="Enter color" name="color" value="<?php echo $color; ?>" id="color" required>
                <label for="color"><b>Brand</b></label>
                <input type="text" placeholder="Enter brand name" name="brand" value="<?php echo $brand; ?>" id="color" required>
                <label for="color"><b>Matterial</b></label>
                <input type="text" placeholder="Enter matterial type" name="matterial" value="<?php echo $matterial; ?>" id="color" required>
                <label for="model"><b>Model Name</b></label>
                <input type="text" placeholder="Enter model name" name="model" value="<?php echo $model; ?>" id="model" required>
                <label for="color"><b>Ideal for</b></label>
                <select name="gen" id="" value="<?php echo $gen; ?>">
                    <option value="Boy">Boy</option>
                    <option value="Girl">Girl</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                </select>
                <label for="package"><b>Size</b></label>
                <input type="text" placeholder="Enter product size" name="size" value="<?php echo $size; ?>" id="package" required>
                <label for="model"><b>Ocasion</b></label>
                <input type="text" placeholder="Enter occation type" name="ocassion" value="<?php echo $ocassion; ?>" id="model" required>
                <label for="model"><b>Pattern</b></label>
                <input type="text" placeholder="Enter pattern" name="pattern" value="<?php echo $pattern; ?>" id="model" required>
                <label for="package"><b>Pack of</b></label>
                <input type="text" placeholder="Enter box inside details" name="package" value="<?php echo $box; ?>" id="package" required>
                <label for="package"><b>Quantity</b></label>
                <input type="number" placeholder="Enter quantity" name="quantity" value="<?php echo $quantity; ?>" id="package" required>
                
                    <?php if($isEdit){ ?>
                        <?php $_SESSION['clothid']=$data['id']; ?>
                <input type="submit" class="registerbtn" value="Update cloth or footware" name="updatecloth">
                <?php }else{ ?>
                <input type="submit" class="registerbtn" value="Add cloth or footware" name="cloth">
                    <?php } ?>
        </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>