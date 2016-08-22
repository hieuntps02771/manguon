<?php include "../website/header.php";?>
 <div class="main_content">
    	<div class="showtext">
        <center><h2>Bạn đã quên Password???</h2></center>
        <center><h4>Vui lòng nhập thông tin Username & Email để được cấp lại password</h4></center>
    	<div  class="login_box">
                <form method="post" name="contact" action="?action=login_action">
                    <div class="login_field">
                        <label for="name">UserName</label>
                        <input name="txtusername" type="text" class="input_field" id="txtusername"  />
                    </div>
                    <div class="login_field">
                        <label for="email">Email</label>
                        <input name="txtemail" type="text" class="input_field" id="txtemail"  />
                    </div>
                    <div class="login_field">
                    <input type="submit" name="submit" value="Gửi" class="submit_btn " />
                    <input type="reset" name="reset" value="Hủy" class="submit_btn " />
                    </div>
                </form>
            </div> 
            
    
    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
<?php include "../website/footer.php";?>