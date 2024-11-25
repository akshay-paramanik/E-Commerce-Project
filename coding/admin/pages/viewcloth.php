<?php
require_once "connect.php";
$sql = "select * from cloth";
// Table 1
$res = mysqli_query($con,$sql);
$cou = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/major.css">
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
                <a href="pages/orders.php">Order</a>
                <a href="rating.php">Ratings</a>
            </div>
        </div>
        <div class="right-part">
            <div class="general">
                <h3>Mobiles General</h3>
                <table>
                    <tr>
                        <th>Serial No.</th>
                        <th>Product Name</th>
                        <th>Color</th>
                        <th>Product Type</th>
                        <th>Price</th>
                        <th>Ideal For</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    <?php if($cou>0){ $s1 = 0;while($table1 = mysqli_fetch_assoc($res)){ ?>
                    <tr>
                        <td><?php echo ++$s1; ?></td>
                        <td><?php echo $table1['title']; ?></td>
                        <td><?php echo $table1['color']; ?></td>
                        <td><?php echo $table1['product_type']; ?></td>
                        <td><?php echo $table1['price']; ?></td>
                        <td><?php echo $table1['ideal_for']; ?></td>
                        <td><?php echo $table1['quantity']; ?></td>
                        <td><a href="viewclothD.php?id=<?php echo $table1['id']; ?>">..more</a>||<a href="action.php?cloth=delete&id=<?php echo $table1['id']; ?>">Delete</a></td>
                    </tr>
                    <?php }} ?>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
</html>