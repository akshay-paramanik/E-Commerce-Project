<?php
require_once "connect.php";
if($_REQUEST['id']){
    $id = $_REQUEST['id'];
    $sql = "select * from cloth where id=$id";
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
                <h1>View Cloths or Footware</h1>
                <a href="cloth.php?id=<?php echo $data['id']; ?>">edit</a><br>
                <label for="pname"><b>Product Name</b></label>
                <input type="text" placeholder="Product product name" name="pname" value="<?php echo $data['pname'] ?>" id="pname" disabled>
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Product title" name="title" value="<?php echo $data['title'] ?>" id="title" disabled>
                <label for="price"><b>Product Price Amount</b></label>
                <input type="number" placeholder="Product price" name="price" value="<?php echo $data['price'] ?>" id="price" disabled>
                <label for="images"><b>Images</b></label><br>
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
                <label for="offers"><b>Enter Seller name</b></label>
                <input type="text" placeholder="Enter seller name" value="<?php echo $data['seller']; ?>" name="seller" id="" disabled>
                <h3>Product Details</h3>
                <label for="package"><b>Product type</b></label>
                <select name="type" id="" value="<?php echo $data['product_type']; ?>" disabled>
                    <option value="Footware">Footware</option>
                    <option value="Kidsware">Kidsware</option>
                    <option value="Men's ware">Men's ware</option>
                    <option value="Women's ware">Women's ware</option>
                </select>
                <label for="color"><b>color</b></label>
                <input type="text" placeholder="Enter color" name="color" value="<?php echo $data['color']; ?>" id="color" disabled>
                <label for="color"><b>Brand</b></label>
                <input type="text" placeholder="Enter brand name" name="brand" value="<?php echo $data['brand']; ?>" id="color" disabled>
                <label for="color"><b>Matterial</b></label>
                <input type="text" placeholder="Enter matterial type" name="matterial" value="<?php echo $data['matterial']; ?>" id="color" disabled>
                <label for="model"><b>Model Name</b></label>
                <input type="text" placeholder="Enter model name" name="model" value="<?php echo $data['model_name']; ?>" id="model" disabled>
                <label for="color"><b>Ideal for</b></label>
                <select name="gen" id="" value="<?php echo $data['seller']; ?>" disabled>
                    <option value="Men">Men</option>
                    <option value="women">Women</option>
                </select>
                <label for="package"><b>Size</b></label>
                <input type="text" placeholder="Enter product size" name="size" value="<?php echo $data['size']; ?>" id="package" disabled>
                <label for="model"><b>Ocasion</b></label>
                <input type="text" placeholder="Enter occation type" name="ocassion" value="<?php echo $data['ocassion']; ?>" id="model" disabled>
                <label for="model"><b>Pattern</b></label>
                <input type="text" placeholder="Enter pattern" name="pattern" value="<?php echo $data['pattern']; ?>" id="model" disabled>
                <label for="package"><b>Pack of</b></label>
                <input type="number" placeholder="Enter box inside details" name="package" value="<?php echo $data['pack_of']; ?>" id="package" disabled>
                <label for="package"><b>Quantity</b></label>
                <input type="number" placeholder="Enter quantity" name="quantity" value="<?php echo $data['quantity']; ?>" id="package" disabled>
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