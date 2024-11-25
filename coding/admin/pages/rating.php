<?php
require_once "connect.php";
$sql = "select * from rating";
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
            <div class="rating">
                <h3>Rating</h3>
                <table>
                    <tr>
                        <th>Serial No.</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>User email</th>
                        <th>Feedback</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    if(mysqli_num_rows($res)>0){
                        $sno = 1;
                        while($data = mysqli_fetch_assoc(($res))){
                            $dbname = $data['dbname'];
                            $pid = $data['productid'];
                            $uid = $data['userid'];
                            $id = $data['id'];
                            $sql2 = "select * from $dbname where id = $pid";
                            $res2 = mysqli_query($con,$sql2);
                            if(mysqli_num_rows($res2)){
                                $pdata = mysqli_fetch_assoc($res2);
                                $sql3 = "select email from user where id = $uid";
                                $res3 = mysqli_query($con,$sql3);
                                if(mysqli_num_rows($res3)){
                                    $email = mysqli_fetch_assoc($res3);
                                    if($data['status']==1){
                                        $status = 'block';
                                        $req = "reqblock";
                                    }else if($data['status']==0){

                                        $status = 'unblock';
                                        $req = "requnblock";
                                    }
                            
                    ?>
                    <tr>
                        <td><?php echo $sno++; ?></td>
                        <td class="imgc"><img src="../<?php echo $pdata['imageone']; ?>" alt=""></td>
                        <td><a href="view<?php echo $dbname.'D.php'; ?>?id=<?php echo $pid; ?>"><?php echo $pdata['pname']; ?></a></td>
                        <td><?php echo $email['email']; ?></td>
                        <td><?php echo $data['feedback']; ?></td>
                        <td><a href="action.php?<?php echo $req; ?>=<?php echo $status; ?>&id=<?php echo $id; ?>"><?php echo $status; ?></a>||<a href="action.php?rating=delete&id=<?php echo $id; ?>">delete</a></td>
                    </tr>
                    <?php 
                                }
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