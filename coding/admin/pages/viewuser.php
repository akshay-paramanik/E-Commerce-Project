<?php require_once 'connect.php';
$sql = "select * from user";
$res = mysqli_query($con,$sql);
$result = mysqli_query($con,$sql);
if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && !empty($_REQUEST['id'])){

    $id=$_REQUEST['id'];
    $sql="select * from user where id=$id";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
       $data=mysqli_fetch_assoc($res);
       print_r($data);
    }
    if(mysqli_num_rows($result)>0){
        $table=mysqli_fetch_assoc($result);
        print_r($table);
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
    <link rel="stylesheet" href="css/viewuser.css">
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
            <div class="user-basic">
                <h3>View User Details</h3>
            <table>
                    <tr>
                        <th>Serial No.</th>
                        <th>Full Name</th>
                        <th>Email address</th>
                        <th>Total Order</th>
                        <th>Total order Amount</th>
                        <th>Action</th>
                    </tr>
        <?php $count=0; while($data=mysqli_fetch_assoc($res)){ $id=$data['id']; ?>
                    <tr>
                        <td><?php echo ++$count;?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td>0</td>
                        <td>0</td>
                        <td><a href="action.php?user=delete&id=<?php echo $id;?>">Delete</a>||<a href="">Block</a></td>
                    </tr>
            <?php } ?>
                </table>
            </div>
            <div class="user-address">
                <h3>User's Address</h3>
                <table>
                    <tr>
                        <th>Serial No.</th>
                        <th>Email id</th>
                        <th>Address</th>
                        <th>Pin code</th>
                        <th>City</th>
                        <th>District</th>
                        <th>State</th>
                    </tr>
                    <?php $ser=0; while($table=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo ++$ser;?></td>
                        <td><?php echo $table['email']; ?></td>
                        <td><?php echo $table['address']; ?></td>
                        <td><?php echo $table['pin']; ?></td>
                        <td><?php echo $table['city']; ?></td>
                        <td><?php echo $table['district']; ?></td>
                        <td><?php echo $table['state']; ?></td>
                    </tr>
            <?php } ?>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
</html>