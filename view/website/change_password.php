<?php include "../website/header.php";?>
 <div class="main_content">
    	<div class="showtext">
        <center><h2>Chào Bạn.... Có phải bạn muốn đổi Password???</h2></center>
        <center><h4>Vui lòng nhập thông tin bên dưới</h4></center>
    	<div  class="changepassword_box">
                <form method="post" name="contact" action="?action=login_action">
                    <div class="login_field">
                        <label for="password">Password cũ</label>
                        <input name="txtpassword" type="text" class="input_field" id="txtpassword"  />
                    </div>
                    <div class="login_field">
                        <label for="password">Password mới</label>
                        <input name="txtnewpassword" type="password" class="input_field" id="txtnewpassword"  />
                    </div>
                    <div class="login_field">
                        <label for="password">Nhập lại password mới</label>
                        <input name="txtnewpassword" type="password" class="input_field" id="txtnewpassword"  />
                    </div>
                    <div class="login_field">
                    <input type="submit" name="submit" value="Đồng ý" class="submit_btn " />
                    <input type="reset" name="reset" value="Hủy" class="submit_btn " />
                    </div>
                </form>
             
            <div class="account_tool">
                <table width="380" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><img src="../../controller/images/avatar.png" width="32" height="32" alt="avatar" /></td>
                      <td><img src="../../controller/images/images.jpg" width="32" height="32" alt="modify_acc" /></td>
                      <td><img src="../../controller/images/change_password.png" width="32" height="32" alt="change_pass" /></td>
                    </tr>
                    <tr>
                      <td><a href="#">Cập nhật hình đại diện</a></td>
                      <td><a href="#">Thay đổi thông tin thành viên</a></td>
                      <td><a href="#">Đổi mật khẩu</a></td>
                    </tr>
                </table>

                </div>
           </div>
    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
<?php include "../website/footer.php";?>