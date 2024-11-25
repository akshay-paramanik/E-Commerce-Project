<?php
session_start();
require_once 'connect.php';

if(isset($_REQUEST['login'])){

    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $sql="select * from user where email='$email'";

    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
        $user=mysqli_fetch_assoc($res);
        $id = $user['id'];
        if(password_verify($password,$user['password'])){
            $_SESSION['username']= $id;
            header("location:../../index.php");
        }else{
            echo "unauthorize access";
        }
    }else{
        echo "user not exists";
    }
}else if(isset($_REQUEST['adminlogin'])){
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $sql="select * from user where email='$email'";

    if($email == "akshayparamanik04@gmail.com"){
        if($password == "admin@1234"){
            header("location:../index.php");
            $_SESSION['admin'] = "admin";
        }else{
            echo "unauthorize access";
        }
    }else{
        echo "user not exists";
    }
}else if(isset($_REQUEST['user'])=="delete"){
    $id = $_REQUEST['id'];
    $sql = "delete from user where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:viewuser.php");
    }else{
        echo "not deleted";
    }

}else if($_REQUEST['Update']){
    $id=$_SESSION['update'];
    $name =mysqli_real_escape_string($con,$_REQUEST['fullname']);
    $email = mysqli_real_escape_string($con,$_REQUEST['email']);
    $mobile = mysqli_real_escape_string($con,$_REQUEST['mobile']);
    $district = mysqli_real_escape_string($con,$_REQUEST['district']);
    $address = mysqli_real_escape_string($con,$_REQUEST['address']);
    $state = mysqli_real_escape_string($con,$_REQUEST['state']);
    $city = mysqli_real_escape_string($con,$_REQUEST['city']);
    $pin = mysqli_real_escape_string($con,$_REQUEST['pin']);
    
    $sql = "update user set name='$name',email='$email',mobile='$mobile',district='$district',address='$address',state='$state',city='$city',pin='$pin'where id=$id";
    $res = mysqli_query($con,$sql);
    if($res){
        echo "user updated";
        header("location:../../index.php");
    }else{
        echo "error";
    }
}else if($_REQUEST['Request']=="delete"){
    $cid= $_REQUEST['id'];
    $sql = "delete from cart where id = $cid";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../../cart/cart.php");
    }
}else if(isset($_REQUEST['mobile'])=="delete"){
    $id = $_REQUEST['id'];
    $sql = "delete from mobile where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:viewmobile.php");
    }else{
        echo "not deleted";
    }

}else if(isset($_REQUEST['laptop'])=="delete"){
    $id = $_REQUEST['id'];
    $sql = "delete from laptop where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:viewlaptop.php");
    }else{
        echo "not deleted";
    }

}else if($_REQUEST['updatemobile']){
    if(isset($_SESSION['mobileid'])){
        $id=$_SESSION['mobileid'];
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
    $expestorage = mysqli_real_escape_string($con,$_REQUEST['expstrg']);
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
    $sql="update mobile set pname='$pname',price='$price',imageone='$path1',imagetwo='$path2',imagethree='$path3',sales_package='$box',model_name='$modeln',color='$color',sim_slot='$sim',touchscreen='$touch',otg_compatible='$otg',quick_charging='$charge',display_type='$dtype',resolution='$reso',system='$system',processor_type='$ptype',processor_brand='$pbrand',core='$core',storage='$rom',ram='$ram',expestorage='$expestorage',memorycard='$memory',primarycamera='$primary',frontcamera='$front',network='$network',usb='$usb',battery='$battery',height='$height',weight='$weight',depth='$depth',gps='$gps',title='$title',offerone='$offerone',offertwo='$offertwo',offerthree='$offerthree',wifi='$wifi',hotspot='$hotspot',hightimage_one='$path4',hightimage_two='$path5',paragraphone='$pdes1',paragraphtwo='$pdes2',display_size='$size',added_at='$date',discount='$poffer',seller='$seller',quantity='$quantity' where id=$id";

    $res=mysqli_query($con,$sql);
    if($res){
    //    header("location:viewpost.php");
    echo "uploads";
    }
    }else{
        echo "sesson";
    }
}else if($_REQUEST['updatelaptop']){
    if(isset($_SESSION['laptopid'])){
        $id=$_SESSION['laptopid'];
        $path1="uploads/img/";
    $path2="uploads/img/";
    $path3="uploads/img/";
    $path4="uploads/img/";
    $path5="uploads/img/";
    $screen = mysqli_real_escape_string($con,$_REQUEST['screen']);
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
    if($_FILES['img2']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img2']['tmp_name'],"../".$path2)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img3']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img3']['tmp_name'],"../".$path3)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg1']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg1']['tmp_name'],"../".$path4)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['pimg2']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['pimg2']['tmp_name'],"../".$path5)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    $date=date('Y-m-d h:i:s');
    $sql = "update laptop set title='$title',price='$price',pname='$pname',imageone='$path1',imagetwo='$path2',imagethree='$path3',offerone='$offerone',offertwo='$offertwo',offerthree='$offerthree',sales_package='$box',model_num='$modelnum',model_name='$modelname',type='$type',color='$color',microsoft='$msoffice',graphic_cap='$gcap',graphic='$graphic',pbrand='$pbrand',ptype='$ptype',ssd='$ssd',ssd_cap='$ssdcap',ram='$ram',ram_type='$ramtype',system='$system',usb='$usb',touchscreen='$screen',ssize='$dsize',resolution='$reso',stype='$dtype',speaker='$speaker',mic='$mic',lan='$lan',bluetooth='$bluetooth',camera='$camera',backlight='$keybord',warranty='$war',nonwarranty='$nonewar',weight='$weight',battery_cell='$cell',battery_backup='$backup',pgeneration='$pgen',pverient='$pver',pcore='$core',os_architechture='$archi',hdmi='$hdmi',added_at='$date',pdesone='$pdes1',pimage_one='$path4',pdestwo='$pdes2',pimage_two='$path5',discount='$poffer',seller='$seller' where id=$id";

    $res=mysqli_query($con,$sql);
    if($res){
    //    header("location:viewpost.php");
    echo "uploads";
    }
    }else{
        echo "sesson";
    }
}
else if(isset($_REQUEST['requnblock'])=='unblock'){
    $id = $_REQUEST['id'];
    $sql = "update rating set status = '1' where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:rating.php");
    }else{
        echo "not update";
    }
}
else if(isset($_REQUEST['reqblock'])=='block'){
    $id = $_REQUEST['id'];
    $sql = "update rating set status = '0' where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:rating.php");
    }else{
        echo "not update";
    }
}
else if(isset($_REQUEST['rating'])=='delete'){
    $id = $_REQUEST['id'];
    $sql = "delete from rating where id = '$id'";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:rating.php");
    }else{
        echo "not deleted";
    }

}else if(isset($_REQUEST['updatecloth'])){
    if(isset($_SESSION['clothid'])){
        $id=$_SESSION['clothid'];
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
    if($_FILES['img2']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img2']['tmp_name'],"../".$path2)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    if($_FILES['img3']['type']=="image/png" || $_FILES['img1']['type']=="image/webp"){
    
        if(!move_uploaded_file($_FILES['img3']['tmp_name'],"../".$path3)){
            echo "upload fail";
        }
    }else{
        echo "invalid file format";
    }
    $date=date('Y-m-d h:i:s');
    $sql2 = "update cloth set title='$title',pname='$pname',imageone='$path1',imagetwo='$path2',imagethree='$path3',offerone='$offerone',offertwo='$offertwo',offerthree='$offerthree',pack_of='$box',model_name='$modelname',color='$color',brand='$brand',product_type='$type',size='$size',matterial='$matterial',ideal_for='$gen',quantity='$quantity',added_at='$date',ocassion='$ocassion',pattern='$pattern',discount='$poffer',seller='$seller' where id = $id";
    $res=mysqli_query($con,$sql2);
    if($res){
       header("location:viewcloth.php");
    }
    }
}else if(isset($_REQUEST['caro'])=="delete"){
    $id = $_REQUEST['id'];
    $sql = "delete from `carosel` where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:../index.php");
    }else{
        echo "not deleted";
    }

}else if(isset($_REQUEST['caropub'])=="publish"){
    $id = $_REQUEST['id'];
    $sql = "update carosel set status = 0 where id=$id";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:../index.php");
    }else{
        echo "not drafted";
    }
}else if(isset($_REQUEST['carodra'])=="draft"){
    $id = $_REQUEST['id'];
    $sql = "update carosel set status = 1 where id=$id";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:../index.php");
    }else{
        echo "not drafted";
    }
}else if(isset($_REQUEST['edship'])=="shiped"){
    $id = $_REQUEST['id'];
    $sql = "update `order` set status = 2 where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:orders.php");
    }else{
        echo "not update order";
    }
}else if(isset($_REQUEST['eddeli'])=="delivery"){
    $id = $_REQUEST['id'];
    $sql = "update `order` set status = 3 where id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:orders.php");
    }else{
        echo "not update order";
    }
}else{
    echo "error";
}
?>