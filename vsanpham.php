<html>
    <body>
    <div id="content">
            <div id="content1">
    			<div id="content11">
    				<?php
    				require_once("config.php");
    				$sql="SELECT * FROM san_pham";
    				$query=mysqli_query($conn,$sql);
    				while($row=mysqli_fetch_array($query))
    				{
					?>
                    <div id="a1">
                    <a href="chitietsp.php?ma_SP=<?=$row["ma_SP"]?>"><img src="<?php echo $row["anh"];?>" height="260px" width="260px"></a>
                        <p><?php echo $row["ten_SP"];?></p>
                        <p><?php echo $row["gia"];?></p>
                    </div>
    				<?php
                    }
                    ?>
    			</div><!--Đóng div 11-->
    		</div><!--Đóng div 1-->	
       </div>
       <!--
        <div class="footer"style="text-align:  center;">
           <?php
                require_once("footer.php");
            ?>
       </div> -->
    </body>
</html>