<?php
$name = $_POST['ten_lien_he'];
$phone =$_POST['dien_thoai'];
$description =$_POST['email'];
$price = $_POST['ghichu'];

require("database.php");

$con = new database();
$sql = "INSERT INTO lien_he(`ten_lien_he`, `dien_thoai`,  `email`,`ghichu`)
         values(";
$sql .= "'".$name."',";
$sql .= "'".$phone."',";
$sql .= "'".$description."',";
$sql .= "'".$price."')";


$insert = $con->execute_query($sql);
if($insert) //Nếu insert thành công, Hiện ra thông báo và load lại trang productList
{
    echo " <meta charset='utf-8' /> <script>alert('Thông tin của bạn đã được lưu')</script>";
    echo "<script>window.location.href='index.php'</script>";
    
}
else //Nếu insert thất bại, Hiện ra thông báo và load lại trang productList
{
    echo " <meta charset='utf-8' /> <script>alert('Gửi không thành công')</script>";
    echo "<script>window.location.href='lienhe.php'</script>";
}
?>