<?php
    require_once("database.php");
	require_once("header.php");
?>      
<html>
<body>
   <div class="main">
        <div class="left">
            <div class="vertical">
                 <ul>
                    <li><span>Loại sản phẩm</span></li>
                    <?php
                        $con = new database();
                        $sql = "SELECT * FROM loai_sp";
                        $productTypes = $con->select_all_query($sql);
                         foreach($productTypes as $type) { ?>
                        <li><a href="sanpham.php?productTypeId=<?=$type['ma_loai_SP']?>"><?=$type['ten_loai_SP']?></a></li>            
                    <?php } ?>
                </ul>
            </div> <!-- đóng div vertical-->
        </div> <!-- Đóng div left-->
        <div class="center"> 
            <iframe
              width="600"
              height="450"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDM2nacJVhKI00K-M_QDr68E8PRcnCSmnE 
                &q=Space+Needle,Seattle+WA" allowfullscreen>
            </iframe>  
    <div class="footer"style="text-align:  center;">
       <?php
			require_once("footer.php");
		?>
   </div>
</body>
</html>