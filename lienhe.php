<?php
    require_once("config.php");
	require_once("header.php");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script>
        function checkForm()
        {
             var username = document.forms['register']["ten_lien_he"].value;
             var phone = document.forms['register']["dien_thoai"].value;
             var email = document.forms['register']["email"].value;
             var ghichu = document.forms['register']["ghichu"].value;
             
             if(username == '')
             {
                alert('Bạn phải nhập Họ tên');
                document.forms["register"]["ten_lien_he"].focus();
                return false;
             }
             else if(phone == '')
             {
                alert('Bạn phải nhập số điện thoại');
                document.forms["register"]["dien_thoai"].focus();
                return false;
             }
             else if(email == '')
             {
                alert('Bạn phải nhập email');
                document.forms["register"]["email"].focus();
                return false;
             }
              else if(ghichu == '')
             {
                alert('Bạn phải nhập ghi chú');
                document.forms["register"]["ghichu"].focus();
                return false;
             }
             else return true;
        }
    
        </script>
<html>
<body>
   <div class="main">
        <div class="center"> 
            <div id="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.16610083053!2d105.82025081433855!3d21.026038893248423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7137fecd53%3A0xc5e1901f79f0cf0!2sDunkin&#39;+Donuts!5e0!3m2!1svi!2s!4v1465407656752" frameborder="0" style="border:0; width: 100%; height: 100%" allowfullscreen></iframe>
               <!-- <iframe
              frameborder="0" style="border:0; width: 100%; height: 100%"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBbcAIej-xwdW2UBYdQoVMLgaN6fdGWw5w&q=Dunkin'+Donuts,Hanoi" allowfullscreen> -->
            </iframe>  
            </div>
            <p>Để lại cho chúng tôi một tin nhắn bằng cách điền vào mẫu dưới đây; chúng tôi muốn nghe bạn nói!</p>
            <form id="form15" class="mb-40" name="contact_form" action="xulylienhe.php" method="post">
            <input type="hidden" name="type" value="Thread.Contact">
            <input type="hidden" name="fields[formTypeId]" value="565f96637f8b9af6558b4567">
            <div class="input-area">
            <div class="row">
            <div class="col-md-7">
            <p><label><b>Thông tin liên hệ của khách hàng:</b></label></p>
            <div class="row mb-10">
            <label class="col-md-3 col-sm-3">Tên: (<span class="text-color-3">*</span>)</label>
            <div class="col-md-9 col-sm-9">
            <input class="form-control" name="ten_lien_he" type="text">
            </div>
            </div>
            <div class="row mb-10">
            <label class="col-md-3 col-sm-3">Điện thoại: (<span class="text-color-3">*</span>)</label>
            <div class="col-md-9 col-sm-9">
            <input class="form-control" name="dien_thoai" type="text">
            </div>
            </div>
            <div class="row mb-10">
            <label class="col-md-3 col-sm-3">Email: (<span class="text-color-3">*</span>)</label>
            <div class="col-md-9 col-sm-9">
            <input class="form-control" name="email" type="email">
            <label class="mb-10"><b>Nội dung: (<span class="text-color-3">*</span>)</b></label>
            <div class="">
            <textarea class="form-control contact-content" name="ghichu"></textarea>
            </div>
            </div>
            </div>
            <div class="">
            <p class="text-right"><i>(<span class="text-color-3">*</span>) Không được bỏ trống</i></p>
            <p class="text-right mgb-2"><i>Cảm ơn bạn. Chúng tôi sẽ liên lạc ngay khi có thể.</i></p>
            
            <div class="text-right">
            <input class="btn btn-general" type="submit" value="Gửi đi">
            <input class="btn btn-general" type="button" value="Hủy bỏ">
            </div>
            </div>
            </div>
            <div class="col-md-5">
            <div class="">
            
            </div>
            </div>
            </div>
            </div>
            <input type="hidden" name="securityToken" value="6883e5c6e054ad9055ac"><input type="hidden" name="submitFormId" value="15"><input type="hidden" name="moduleId" value="15"></form>
             
            <div class="map">
             
            </div>
            </div>
            </section>
            </div></div></div>
        </div> <!--Đóng div centrer-->
    </div>  <!-- Đóng div main -->
    <div class="footer"style="text-align:  center;">
       <?php
			require_once("footer.php");
		?>
   </div>
   

</body>
</html>