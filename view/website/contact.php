<?php include "../view/website/header.php";?>
 <div class="main_content">
    	<div class="showtext">
        <h2>Liên hệ</h2>
    	<div  class="contact_box">
                <form method="post" name="contact" action="#">
                    <div class="contact_field">
                        <label for="name">Name:</label>
                        <input name="txtname" type="text" class="input_field" id="txtname" maxlength="30" />
                    </div>
                    <div class="contact_field_left">
                       <label for="address">Địa chỉ:</label>
                        <input name="txtaddress" type="text" class="input_field" id="txtadress" maxlength="20" /> 
                    </div>
                    <div class="contact_field">
                        <label for="email">Email:</label>
                        <input name="txtemail" type="text" class="input_field" id="txtemail" maxlength="30" />
                    </div>
                    <div class="contact_field_left">
                        <label for="phone">Phone:</label>
                        <input name="txtphone" type="text" class="input_field" id="txtphone" maxlength="20" />
                    </div>
                    <div>
                        <label for="noidung">Nội dung:</label> 
                        <textarea id="txtdesc" name="txtdesc" rows="0" cols="0"></textarea>
                    </div>
                    <input type="submit" name="Submit" value="Gửi" class="submit_btn " />
                    <input type="reset" name="reset" value="Xóa" class="reset_btn " />
                </form>
            </div> 
            <div class="contact_field_right">
                <div >
                    <h3>Văn phòng</h3><br/>
                    391A Nam Kỳ Khởi Nghĩa, Quận 3, <br />
                  	TP. Hồ Chí Minh,0<br />
                    Tel: (08) 3 526 8799<br />
                    Fax: (08) 3 526 8896<br /><br />
                   </div>
                <div >
                    <h3>Chi nhánh</h3><br/>
                  	164 Phan Chu Trinh, <br />
                  	TP. Buôn Ma Thuột, Tỉnh Đắk Lắk<br />
                    Tel: (0500) 355 5678<br/>
                    Fax: (0500) 355 6996<br /><br/>
                    137 Nguyễn Thị Thập, <br />
                  	Phường Hòa Minh, Quận Liên Chiểu, Đà Nẵng.<br />
                    Tel:  0919 708571<br/>
                    Fax: (0511) 371 0999<br /><br/>
                </div>
            </div>
    
    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
<?php include "../view/website/footer.php";?>