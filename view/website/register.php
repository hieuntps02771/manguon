<?php include "../view/website/header.php";?>
<?php
if(empty($_SESSION['messages']))
        {
            $messages="";
            
        }
        else
        {
            $messages=$_SESSION['messages'];
        }
?>
 <div class="main_content">
    	<div class="showtext">
        <center><h2>Đăng ký thành viên</h2></center>
    	<div  class="register_box">
                <form method="post" name="contact" action="?action=add_user">
                	<div class="register_field">
                    		<h3><?php echo "$messages" ?></h3>
                    </div>
                    <div class="register_field">
                        <label for="name">UserName</label>
                        <input name="txtusername" type="text" class="input_field" id="txtusername"  />
                    </div>
                    <div class="register_field">
                        <label for="pass">Password</label>
                        <input name="txtpassword" type="password" class="input_field" id="txtpasword"  />
                    </div>
                    <div class="register_field">
                        <label for="repass">Re-Password</label>
                        <input name="txtrepassword" type="password" class="input_field" id="txretpasword"  />
                    </div>
                    <div class="register_field">
                        <label for="fullname">Full Name</label>
                        <input name="txtfullname" type="text" class="input_field" id="txtfullname"  />
                    </div>
                    <div class="register_field">
                        <label for="mail">Email</label>
                        <input name="txtemail" type="text" class="input_field" id="txtemail"  />
                    </div>
                    <div class="register_field">
                        <label for="address">Địa chỉ</label>
                        <input name="txtaddress" type="text" class="input_field" id="txtaddress"  />
                    </div>
                    <div class="register_field">
                        <label for="phone">Điện Thoại</label>
                        <input name="txtphone" type="text" class="input_field" id="txtphone"  />
                    </div>
                    <div class="register_field">
                        <input name="txtpermission" type="hidden" class="input_field" value="user" id="txtpermission"  />
                    </div>
                    <div class="register_field">
                        <input type="submit" name="register" value="Đăng ký" class="submit_btn " />
                        <input type="reset" name="cancel" value="Hủy" class="reset_btn " />
                    </div>
                </form>
            </div> 
            
    
    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
<?php include "../view/website/footer.php";?>