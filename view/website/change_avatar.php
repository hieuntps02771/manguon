<?php include "../website/header.php";?>
 <div class="main_content">
    	<div class="showtext">
        <center><h2>Thay đổi hình đại diện</h2></center>
    	<div  class="account_box">
                <form action="#" name="changeavatar" method="post">
                <table width="300" border="0" cellspacing="0" cellpadding="0" class="change_avatar">
                      <tr>
                        <td colspan="2"><h3>Avatar hiện tại</h3></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                        <img src="../../controller/images/avatar/no_avatar.jpg" width="128" height="128" alt="avatar" />
                        </td>
                      </tr>
                      <tr>
                        <td>Chọn file:</td>
                        <td><input type="file" name="hinh anh"/></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                        <input type="submit" name="submit" value="Cập nhật" class="submit_btn"/>
                        <input type="reset" name="reset" value="Hủy" class="submit_btn"/>
                        </td>
                        
                      </tr>
              </table>

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