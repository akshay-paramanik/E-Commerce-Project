<?php
session_start();
if(isset($_SESSION['admin'])){
require_once "pages/connect.php";
$sql = "select * from `order`";
$res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pages/css/major.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <div class="main">
        <div class="left-part">
            <h1>Logo</h1>
            <div class="navbar">
                <a href="index.php">Home</a>
                <a href="pages/viewuser.php">View User</a>
                <a href="pages/additem.php">Add Item</a>
                <a href="pages/viewstocks.php">View Stocks</a>
                <a href="pages/orders.php">Order</a>
                <a href="pages/rating.php">Ratings</a>
                <a href="pages/logout.php">Logout</a>
            </div>
        </div>
        <div class="right-part">
            <div class="sales">
                <h3>Sales Details</h3>
                <table>
                    <tr>
                        <th>DATE</th>
                        <th>Sales Anount</th>
                        <th>Order</th>
                        <th>User</th>
                    </tr>
                    <?php
                    if(mysqli_num_rows($res)>0){
                        while($order = mysqli_fetch_assoc($res)){
                            $uid = $order['userid'];
                            $sql2 = "select * from user where id=$uid";
                            $res2 = mysqli_query($con,$sql2);
                            if(mysqli_num_rows($res2)){
                                $user = mysqli_fetch_assoc($res2);
                    ?>
                    <tr>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo $order['final_price']; ?></td>
                        <td><?php echo $order['quantity']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                    </tr>
            <?php   } }
                    }
                    ?>
                </table>
            </div>
            <div class="gift-card">
                <h3>Carousel Adverticement Details</h3>
                <div class="add-gift">
                    <h4>Add carousel</h4>
                <form action="pages/process.php" method="post" enctype="multipart/form-data">
                    <label for="picture">upload gift card</label>
                    <input type="file" name="caroimg" id="picture">
                    <input type="submit" name="carousel" value="UPLOAD">
                </form>
                </div>
                <div class="view-gift">
                    <h4>View All Carousel</h4>
                    <div class="recent-gift">
                        <?php 
                        $sql3 = "select * from `carosel` order by added_at desc";
                        $res3 = mysqli_query($con,$sql3);
                        if(mysqli_num_rows($res3)){
                            while($caro = mysqli_fetch_assoc($res3)){
                                if($caro['status']==1){
                                    $status = "Published";
                                    $edit = "publish";
                                    $edits = "caropub";
                                }else if($caro['status']==0){
                                    $status = "Draft";
                                    $edits = "carodra";
                                    $edit = "draft";
                                }else{
                                    $status = "problem";
                                }

                        ?>
                        <div class="gift-item">
                            <div class="image">
                            <img src="<?php echo $caro['path']; ?>" alt="">
                            </div>
                            <div class="feture">
                                <a href="pages/action.php?caro=delete&id=<?php echo $caro['id']; ?>">Delete</a>||<a href="pages/action.php?<?php echo $edits."=".$edit."&id=".$caro['id']; ?>"><?php echo $status; ?></a>
                            </div>
                        </div>
                        <?php                             }
                        } ?>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
<?php

}else{
    header("location:pages/login.php");
}
?>
