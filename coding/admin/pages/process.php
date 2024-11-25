<?php
require("connect.php");
session_start();

if(isset($_REQUEST['register'])){
    $name =mysqli_real_escape_string($con,$_REQUEST['fullname']);
    $email = mysqli_real_escape_string($con,$_REQUEST['email']);
    $mobile = mysqli_real_escape_string($con,$_REQUEST['mobile']);
    $password = mysqli_real_escape_string($con,$_REQUEST['psw']);
    $district = mysqli_real_escape_string($con,$_REQUEST['district']);
    $encpass=password_hash($password,PASSWORD_BCRYPT);
    $address = mysqli_real_escape_string($con,$_REQUEST['address']);
    $state = mysqli_real_escape_string($con,$_REQUEST['state']);
    $city = mysqli_real_escape_string($con,$_REQUEST['city']);
    $pin = mysqli_real_escape_string($con,$_REQUEST['pin']);
    
    $sql = "insert into user(`name`,`email`,`mobile`,`password`,`address`,`state`,`city`,`pin`,`district`)values('$name','$email','$mobile','$encpass','$address','$state','$city','$pin','$district')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../../index.php");
    }else{
        echo "error";
    }
}else if(isset($_REQUEST['mobile'])){
    $path1="uploads/img/";
    $path2="uploads/img/";
    $path3="uploads/img/";
    $path4="uploads/img/";
    $path5="uploads/img/";
    $pname = mysqli_real_escape_string($con,$_REQUEST['pname']);
    $title = mysqli_real_escape_string($con,$_REQUEST['title']);
    $price = mysqli_real_escape_string($con,$_REQUEST['price']);
    $imgone = mysqli_real_escape_string($con,$_FILES['img1']['name']);
    $imgtwo = mysqli_real_escape_string($con,$_FILES['img2']['name']);
    $imgthree = mysqli_real_escape_string($con,$_FILES['img3']['name']);
    $offerone = mysqli_real_escape_string($con,$_REQUEST['offer1']);
    $offertwo = mysqli_real_escape_string($con,$_REQUEST['offer2']);
    $offerthree = mysqli_real_escape_string($con,$_REQUEST['offer3']);
    $color = mysqli_real_escape_string($con,$_REQUEST['color']);
    $modeln = mysqli_real_escape_string($con,$_REQUEST['model']);
    $box = mysqli_real_escape_string($con,$_REQUEST['package']);
    $touch = mysqli_real_escape_string($con,$_REQUEST['screen']);
    $otg = mysqli_real_escape_string($con,$_REQUEST['otg']);
    $charge = mysqli_real_escape_string($con,$_REQUEST['charge']);
    $sim = mysqli_real_escape_string($con,$_REQUEST['sim']);
    $usb = mysqli_real_escape_string($con,$_REQUEST['usb']);
    $memory = mysqli_real_escape_string($con,$_REQUEST['memory']);
    $battery = mysqli_real_escape_string($con,$_REQUEST['battery']);
    $pdes1 = mysqli_real_escape_string($con,$_REQUEST['pdes1']);
    $pimg1 = mysqli_real_escape_string($con,$_FILES['pimg1']['name']);
    $pdes2 = mysqli_real_escape_string($con,$_REQUEST['pdes2']);
    $pimg2 = mysqli_real_escape_string($con,$_FILES['pimg2']['name']);
    $ram = mysqli_real_escape_string($con,$_REQUEST['ram']);
    $rom = mysqli_real_escape_string($con,$_REQUEST['rom']);
    $expstrg = mysqli_real_escape_string($con,$_REQUEST['expstrg']);
    $pbrand = mysqli_real_escape_string($con,$_REQUEST['pbrand']);
    $ptype = mysqli_real_escape_string($con,$_REQUEST['ptype']);
    $core = mysqli_real_escape_string($con,$_REQUEST['core']);
    $system = mysqli_real_escape_string($con,$_REQUEST['system']);
    $size = mysqli_real_escape_string($con,$_REQUEST['size']);
    $dtype = mysqli_real_escape_string($con,$_REQUEST['dtype']);
    $reso = mysqli_real_escape_string($con,$_REQUEST['reso']);
    $primary = mysqli_real_escape_string($con,$_REQUEST['primary']);
    $front = mysqli_real_escape_string($con,$_REQUEST['front']);
    $network = mysqli_real_escape_string($con,$_REQUEST['network']);
    $gps = mysqli_real_escape_string($con,$_REQUEST['gps']);
    $wifi = mysqli_real_escape_string($con,$_REQUEST['wifi']);
    $hotspot = mysqli_real_escape_string($con,$_REQUEST['hotspot']);
    $height = mysqli_real_escape_string($con,$_REQUEST['height']);
    $weight = mysqli_real_escape_string($con,$_REQUEST['weight']);
    $depth = mysqli_real_escape_string($con,$_REQUEST['depth']);
    $poffer = mysqli_real_escape_string($con,$_REQUEST['poffer']);
    $seller = mysqli_real_escape_string($con,$_REQUEST['seller']);
    $quantity = mysqli_real_escape_string($con,$_REQUEST['quantity']);
    $path1.=$imgone;
    $path2.=$imgtwo;
    $path3.=$imgthree;
    $path4.=$pimg1;
    $path5.=$pimg2;
    if($_FILES['img1']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img1']['tmp_name'],"../".$path1)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img2']['type']=="image/png" || $_FILES['img2']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img2']['tmp_name'],"../".$path2)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img3']['type']=="image/png" || $_FILES['img3']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img3']['tmp_name'],"../".$path3)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg1']['type']=="image/png" || $_FILES['pimg1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg1']['tmp_name'],"../".$path4)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg2']['type']=="image/png" || $_FILES['pimg2']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg2']['tmp_name'],"../".$path5)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    $date=date('Y-m-d h:i:s');
    $sql="insert into mobile(`pname`,`title`,`price`,`imageone`,`imagetwo`,`imagethree`,`sales_package`,`model_name`,`color`,`sim_slot`,`touchscreen`,`otg_compatible`,`quick_charging`,`display_type`,`resolution`,`system`,`processor_type`,`processor_brand`,`core`,`storage`,`ram`,`expestorage`,`memorycard`,`primarycamera`,`frontcamera`,`network`,`usb`,`battery`,`height`,`weight`,`depth`,`gps`,`offerone`,`offertwo`,`offerthree`,`wifi`,`hotspot`,`hightimage_one`,`paragraphone`,`hightimage_two`,`paragraphtwo`,`display_size`,`added_at`,`discount`,`seller`,`quantity`)values
                            ('$pname','$title','$price','$path1','$path2','$path3','$box','$modeln','$color','$sim','$touch','$otg','$charge','$dtype','$reso','$system','$ptype','$pbrand','$core','$rom','$ram','$expstrg','$memory','$primary','$front','$network','$usb','$battery','$height','$weight','$depth','$gps','$offerone','$offertwo','$offerthree','$wifi','$hotspot','$path4','$pdes1','$path5','$pdes2','$size','$date','$poffer','$seller','$quantity')";

    $res=mysqli_query($con,$sql);
    if($res){
       header("location:../../index.php");
    // echo "uploads";
    }
}else if(isset($_REQUEST['laptop'])){
    $path1="uploads/img/";
    $path2="uploads/img/";
    $path3="uploads/img/";
    $path4="uploads/img/";
    $path5="uploads/img/";
    $screen = mysqli_real_escape_string($con,$_REQUEST['screen']);;
    $speaker= mysqli_real_escape_string($con,$_REQUEST['speaker']);
    $title = mysqli_real_escape_string($con,$_REQUEST['title']);
    $price = mysqli_real_escape_string($con,$_REQUEST['price']);
    $pname = mysqli_real_escape_string($con,$_REQUEST['pname']);
    $imgone = mysqli_real_escape_string($con,$_FILES['img1']['name']);
    $imgtwo = mysqli_real_escape_string($con,$_FILES['img2']['name']);
    $imgthree = mysqli_real_escape_string($con,$_FILES['img3']['name']);
    $offerone = mysqli_real_escape_string($con,$_REQUEST['offer1']);
    $offertwo = mysqli_real_escape_string($con,$_REQUEST['offer2']);
    $offerthree = mysqli_real_escape_string($con,$_REQUEST['offer3']);
    $box = mysqli_real_escape_string($con,$_REQUEST['package']);
    $modelnum = mysqli_real_escape_string($con,$_REQUEST['modelnum']);
    $modelname = mysqli_real_escape_string($con,$_REQUEST['modelname']);
    $type = mysqli_real_escape_string($con,$_REQUEST['type']);
    $color = mysqli_real_escape_string($con,$_REQUEST['color']);
    $msoffice = mysqli_real_escape_string($con,$_REQUEST['msoffice']);
    $graphic = mysqli_real_escape_string($con,$_REQUEST['graphic']);
    $gcap = mysqli_real_escape_string($con,$_REQUEST['gcap']);
    $pbrand = mysqli_real_escape_string($con,$_REQUEST['pbrand']);
    $ptype = mysqli_real_escape_string($con,$_REQUEST['ptype']);
    $pver = mysqli_real_escape_string($con,$_REQUEST['pvariant']);
    $pgen = mysqli_real_escape_string($con,$_REQUEST['gen']);
    $touch = mysqli_real_escape_string($con,$_REQUEST['screen']);
    $usb = mysqli_real_escape_string($con,$_REQUEST['usb']);
    $cell = mysqli_real_escape_string($con,$_REQUEST['cell']);
    $backup = mysqli_real_escape_string($con,$_REQUEST['backup']);
    $pdes1 = mysqli_real_escape_string($con,$_REQUEST['pdes1']);
    $pimg1 = mysqli_real_escape_string($con,$_FILES['pimg1']['name']);
    $pdes2 = mysqli_real_escape_string($con,$_REQUEST['pdes2']);
    $pimg2 = mysqli_real_escape_string($con,$_FILES['pimg2']['name']);
    $ram = mysqli_real_escape_string($con,$_REQUEST['ram']);
    $ramtype = mysqli_real_escape_string($con,$_REQUEST['ramtype']);
    $ssd = mysqli_real_escape_string($con,$_REQUEST['ssd']);
    $ssdcap = mysqli_real_escape_string($con,$_REQUEST['ssdc']);
    $core = mysqli_real_escape_string($con,$_REQUEST['core']);
    $system = mysqli_real_escape_string($con,$_REQUEST['system']);
    $archi = mysqli_real_escape_string($con,$_REQUEST['architechture']);
    $mic = mysqli_real_escape_string($con,$_REQUEST['mic']);
    $hdmi = mysqli_real_escape_string($con,$_REQUEST['hdmi']);
    $dsize = mysqli_real_escape_string($con,$_REQUEST['size']);
    $dtype = mysqli_real_escape_string($con,$_REQUEST['dtype']);
    $reso = mysqli_real_escape_string($con,$_REQUEST['reso']);
    $lan = mysqli_real_escape_string($con,$_REQUEST['lan']);
    $bluetooth = mysqli_real_escape_string($con,$_REQUEST['bluetooth']);
    $camera = mysqli_real_escape_string($con,$_REQUEST['camera']);
    $keybord = mysqli_real_escape_string($con,$_REQUEST['keybord']);
    $weight = mysqli_real_escape_string($con,$_REQUEST['weight']);
    $war = mysqli_real_escape_string($con,$_REQUEST['warr']);
    $nonewar = mysqli_real_escape_string($con,$_REQUEST['nonewarr']);
    $poffer = mysqli_real_escape_string($con,$_REQUEST['poffer']);
    $seller = mysqli_real_escape_string($con,$_REQUEST['seller']);
    $path1.=$imgone;
    $path2.=$imgtwo;
    $path3.=$imgthree;
    $path4.=$pimg1;
    $path5.=$pimg2;
    if($_FILES['img1']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img1']['tmp_name'],"../".$path1)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img2']['type']=="image/png" || $_FILES['img2']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img2']['tmp_name'],"../".$path2)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img3']['type']=="image/png" || $_FILES['img3']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img3']['tmp_name'],"../".$path3)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg1']['type']=="image/png" || $_FILES['pimg1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg1']['tmp_name'],"../".$path4)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg2']['type']=="image/png" || $_FILES['pimg2']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg2']['tmp_name'],"../".$path5)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    $date=date('Y-m-d h:i:s');
    $sql = "insert into laptop(`title`,`price`,`pname`,`imageone`,`imagetwo`,`imagethree`,`offerone`,`offertwo`,`offerthree`,`sales_package`,`model_num`,`model_name`,`type`,`color`,`microsoft`,`graphic_cap`,`graphic`,`pbrand`,`ptype`,`ssd`,`ssd_cap`,`ram`,`ram_type`,`system`,`usb`,`touchscreen`,`ssize`,`resolution`,`stype`,`speaker`,`mic`,`lan`,`bluetooth`,`camera`,`backlight`,`warranty`,`nonwarranty`,`weight`,`battery_cell`,`battery_backup`,`pgeneration`,`pverient`,`pcore`,`os_architechture`,`hdmi`,`added_at`,`pdesone`,`pimage_one`,`pdestwo`,`pimage_two`,`discount`,`seller`)values
                                ('$title','$price','$pname','$path1','$path2','$path3','$offerone','$offertwo','$offerthree','$box','$modelnum','$modelname','$type','$color','$msoffice','$gcap','$graphic','$pbrand','$ptype','$ssd','$ssdcap','$ram','$ramtype','$system','$usb','$screen','$dsize','$reso','$dtype','$speaker','$mic','$lan','$bluetooth','$camera','$keybord','$war','$nonewar','$weight','$cell','$backup','$pgen','$pver','$core','$archi','$hdmi','$date','$pdes1','$path4','$pdes2','$path5','$poffer','$seller')";

    $res=mysqli_query($con,$sql);
    if($res){
    //    header("location:viewpost.php");
    echo "uploads";
    }
}else if(isset($_REQUEST['cloth'])){
    $path1="uploads/img/";
    $path2="uploads/img/";
    $path3="uploads/img/";;
    $title = mysqli_real_escape_string($con,$_REQUEST['title']);
    $price = mysqli_real_escape_string($con,$_REQUEST['price']);
    $pname = mysqli_real_escape_string($con,$_REQUEST['pname']);
    $imgone = mysqli_real_escape_string($con,$_FILES['img1']['name']);
    $imgtwo = mysqli_real_escape_string($con,$_FILES['img2']['name']);
    $imgthree = mysqli_real_escape_string($con,$_FILES['img3']['name']);
    $offerone = mysqli_real_escape_string($con,$_REQUEST['offer1']);
    $offertwo = mysqli_real_escape_string($con,$_REQUEST['offer2']);
    $offerthree = mysqli_real_escape_string($con,$_REQUEST['offer3']);
    $box = mysqli_real_escape_string($con,$_REQUEST['package']);
    $modelname = mysqli_real_escape_string($con,$_REQUEST['model']);
    $type = mysqli_real_escape_string($con,$_REQUEST['type']);
    $color = mysqli_real_escape_string($con,$_REQUEST['color']);
    $brand = mysqli_real_escape_string($con,$_REQUEST['brand']);
    $matterial = mysqli_real_escape_string($con,$_REQUEST['matterial']);
    $gen = mysqli_real_escape_string($con,$_REQUEST['gen']);
    $ocassion = mysqli_real_escape_string($con,$_REQUEST['ocassion']);
    $pattern = mysqli_real_escape_string($con,$_REQUEST['pattern']);
    $quantity = mysqli_real_escape_string($con,$_REQUEST['quantity']);
    $size = mysqli_real_escape_string($con,$_REQUEST['size']);
    $poffer = mysqli_real_escape_string($con,$_REQUEST['poffer']);
    $$seller = mysqli_real_escape_string($con,$_REQUEST['seller']);
    $path1.=$imgone;
    $path2.=$imgtwo;
    $path3.=$imgthree;
    if($_FILES['img1']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img1']['tmp_name'],"../".$path1)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img2']['type']=="image/png" || $_FILES['img2']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img2']['tmp_name'],"../".$path2)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img3']['type']=="image/png" || $_FILES['img3']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img3']['tmp_name'],"../".$path3)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg1']['type']=="image/png" || $_FILES['pimg1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg1']['tmp_name'],"../".$path4)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg2']['type']=="image/png" || $_FILES['pimg2']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg2']['tmp_name'],"../".$path5)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    $date=date('Y-m-d h:i:s');
    $sql = "insert into cloth(`title`,`price`,`pname`,`imageone`,`imagetwo`,`imagethree`,`offerone`,`offertwo`,`offerthree`,`pack_of`,`model_name`,`color`,`brand`,`product_type`,`size`,`matterial`,`ideal_for`,`quantity`,`added_at`,`ocassion`,`pattern`,`discount`,`seller`)values
                                ('$title','$price','$pname','$path1','$path2','$path3','$offerone','$offertwo','$offerthree','$box','$modelname','$color','$brand','$type','$size','$matterial','$gen','$quantity','$date','$ocassion','$pattern','$poffer','$seller')";

    $res=mysqli_query($con,$sql);
    if($res){
    //    header("location:viewpost.php");
    echo "uploads";
    }
}else if($_REQUEST['req']=="cloth" && $_REQUEST['id']){
    if(isset($_SESSION['username'])){
        $userid= $_SESSION['username'];
    $dbname = $_REQUEST['req'];
    $id = $_REQUEST['id'];

    $sql = "insert into cart(`userid`,`productid`,`dbname`)values('$userid','$id','$dbname')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../../cart/cart.php");
    }else{
        echo "failed";
    }
    }else{
        echo "sesson problem";
    }
}else if($_REQUEST['req']=="mobile" && $_REQUEST['id']){
    if(isset($_SESSION['username'])){
        $userid= $_SESSION['username'];
    $dbname = $_REQUEST['req'];
    $id = $_REQUEST['id'];

    $sql = "insert into cart(`userid`,`productid`,`dbname`)values('$userid','$id','$dbname')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../../cart/cart.php");
    }else{
        echo "failed";
    }
    }else{
        echo "sesson problem";
    }
}else if($_REQUEST['req']=="laptop" && $_REQUEST['id']){
    if(isset($_SESSION['username'])){
        $userid= $_SESSION['username'];
    $dbname = $_REQUEST['req'];
    $id = $_REQUEST['id'];

    $sql = "insert into cart(`userid`,`productid`,`dbname`)values('$userid','$id','$dbname')";
    $res = mysqli_query($con,$sql);
    if($res){
       header("location:../../cart/cart.php");
    }else{
        echo "failed";
    }
    }else{
        echo "sesson problem";
    }
}else if($_REQUEST['mobilerating']){
    $star= $_REQUEST['star'];
    $feedback = $_REQUEST['feedback'];
    $uid = $_REQUEST['uid'];
    $pid = $_REQUEST['pid'];
    $dbname = $_REQUEST['dbname'];
    $sql = "insert into rating(`userid`,`productid`,`rating`,`feedback`,`dbname`)values('$uid','$pid','$star','$feedback','$dbname')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../../../cart-detail/mobileD.php?id=$pid");
    }else{
        echo "not inserted";
    }

}else if($_REQUEST['laptoprating']){
    $star= $_REQUEST['star'];
    $feedback = $_REQUEST['feedback'];
    $uid = $_REQUEST['uid'];
    $pid = $_REQUEST['pid'];
    $dbname = $_REQUEST['dbname'];
    $sql = "insert into rating(`userid`,`productid`,`rating`,`feedback`,`dbname`)values('$uid','$pid','$star','$feedback','$dbname')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../../../cart-detail/laptopD.php?id=$pid");
    }else{
        echo "not inserted";
    }

}else if($_REQUEST['clothrating']){
    $star= $_REQUEST['star'];
    $feedback = $_REQUEST['feedback'];
    $uid = $_REQUEST['uid'];
    $pid = $_REQUEST['pid'];
    $dbname = $_REQUEST['dbname'];
    $sql = "insert into rating(`userid`,`productid`,`rating`,`feedback`,`dbname`)values('$uid','$pid','$star','$feedback','$dbname')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../../../cart-detail/clothD.php?id=$pid");
    }else{
        echo "not inserted";
    }

}else if($_REQUEST['order']){
    $uid = $_REQUEST['checking'];
    $pid = $_REQUEST['productid'];
    $quantity = $_REQUEST['quantity'];
    $amount = $_REQUEST['total'];
    $dbname = $_REQUEST['dbname'];
    $payment = $_REQUEST['payment'];
    $price = $amount*$quantity;
    $sql2 = "select quantity from $dbname where id=$pid";
    $res2 = mysqli_query($con,$sql2);
    $date=date('Y-m-d h:i:s');
    if(mysqli_num_rows($res2)){
        $quan = mysqli_fetch_assoc($res2);
        if($quantity <= $quan['quantity'] && $quantity > 0){
            $newquan = $quan['quantity']-$quantity;
            $sql = "insert into `order`(`productid`,`userid`,`final_price`,`quantity`,`payment`,`date`,`dbname`)values('$pid','$uid','$price','$quantity','$payment','$date','$dbname')";
            $res = mysqli_query($con,$sql);
            if($res){
                $sql3 = "update $dbname set quantity = $newquan where id = $pid";
                $res3 = mysqli_query($con,$sql3);
                if($res3){

                    header("location:../../index.php");
                }else{
                    echo "quantity problem";
                }

            }else{
                echo "order problem";
            }
        }else{
            echo "out of stock";
        }
    }
}else if($_REQUEST['carousel']){
    $path1="uploads/img/";
    $imgone = mysqli_real_escape_string($con,$_FILES['caroimg']['name']);
    $path1.=$imgone;
    if($_FILES['caroimg']['type']=="image/png" || $_FILES['caroimg']['type']=="image/webp"){
    
            if(!move_uploaded_file($_FILES['caroimg']['tmp_name'],"../".$path1)){
                echo "upload fail";
            }
        }else{
            echo "invalid file format";
        }
    $date=date('Y-m-d h:i:s');
    $sql = "insert into `carosel`(`path`,`added_at`)values('$path1','$date')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../index.php");
    }else{
        echo "carousel not uploaded";
    }
}else{
    echo "not";
}
?>