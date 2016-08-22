<?php include "../website/header.php";?>
 <div class="main_content">
    	<div class="showtext">
        <center><h2>Thay đổi thông tin thành viên</h2></center>
    	<div  class="account_box">
                <div class="avatar">
                <img src="../../controller/images/avatar/no_avatar.jpg" width="140" alt="noavatar" />
                </div>
                <div class="account_info">
                <table width="340" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td class="info_title">Họ và tên:</td>
                          <td ><input type="text" name="txtfullname" class="info_input" value=""/></td>
                        </tr>
                        <tr>
                          <td class="info_title">Email:</td>
                          <td><input type="text" name="txtemail" class="info_input" value=""/></td>
                        </tr>
                        <tr>
                          <td class="info_title">Địa chỉ:</td>
                          <td><input type="text" name="txtaddress" class="info_input" value=""/></td>
                        </tr>
                        <tr>
                          <td class="info_title">Số điện thoại:</td>
                          <td><input type="text" name="txtphone" class="info_input" value=""/></td>
                        </tr>
                        <tr>
                          <td colspan="2" class="change_button">
                          <input type="submit" name="submit" value="Đồng ý" class="submit_btn"/>
                          <input type="reset" name="reset" value="Hủy" class="submit_btn"/>
                          </td>
                        </tr>
                </table>
          </div>
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