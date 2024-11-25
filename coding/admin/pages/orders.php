<?php
require_once "connect.php";
$sql = "select * from `order`";
$res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/major.css">
    <link rel="stylesheet" href="css/additem.css">
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
            <div class="order">
                <h3>View Orders</h3>
                <table>
                    <tr>
                        <th>Serial No.</th>
                        <th>Product</th>
                        <th>Product Nmae</th>
                        <th>Amount</th>
                        <th>User email</th>
                        <th>Status</th>
                    </tr>
                    <?php 
                    if(mysqli_num_rows($res)){
                        while($data = mysqli_fetch_assoc($res)){
                            $dbname = $data['dbname'];
                            $pid = $data['productid'];
                            $uid = $data['userid'];
                            $sql2 = "select * from $dbname where id = $pid";
                            $res2 = mysqli_query($con,$sql2);
                            if(mysqli_num_rows($res2)){
                                $pdata = mysqli_fetch_assoc($res2);
                                $sql3 = "select * from user where id=$uid";
                                $res3 = mysqli_query($con,$sql3);
                                if(mysqli_num_rows($res3)){
                                    $udata = mysqli_fetch_assoc($res3);
                                    if($data['status'] == 1){
                                        $action = "Shipped";
                                        $req = "edship";
                                        $cus = "shiped";
                                    }else if($data['status'] == 2){
                                        $action = "Delivered";
                                        $req = "eddeli";
                                        $cus = "delivery";
                                    }else{
                                        $action = "not";
                                    }
                    ?>
                    <tr>
                        <td><?php  $sn = 1; echo ++$sn; ?></td>
                        <td><img src="../<?php echo $pdata['imageone']; ?>" alt=""></td>
                        <td><?php echo $pdata['pname']; ?></td>
                        <td><?php echo $data['final_price']; ?></td>
                        <td><?php echo $udata['email']; ?></td>
                        <td>
                           <a href="action.php?<?php echo $req."=".$cus."&id=".$data['id']; ?>"><?php echo $action; ?></a>
                        </td>
                    </tr>
                    <?php                                 }
                            }
                        }
                    } ?>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
</html>