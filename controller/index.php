
<?php
    include "../model/connect.php";
    include "../model/user.php";
    include "../model/customer.php";
    include "../model/contact.php";
    include "../model/products.php";
    include "../model/cart.php";
    include "../model/order.php";
    
    // Khởi tạo session
     session_start();
     
     // Tạo mảng thông tin về giỏ hàng
     if(!isset($_SESSION['cartview']))
         $_SESSION['cartview'] = array();
     
     
     if(isset($_GET["action"]))
         $action=$_GET["action"]; 
     elseif (isset($_POST['action']))
     {
         $action=$_POST["action"];
     }
     else
         $action="home";
     
     //Xóa dữ liệu của biến Messages
     unset($_SESSION['messages']);
     switch($action)
     {
        // Gọi trang chủ
         case "home":
            include "../view/website/home.php";
            break;
        case "payments":
            
           $username = $_SESSION['check'];
          
           $quest = new user();
           $result = $quest->getInfoById($username); 
           $userid=$result[0];
          
            $o = new order();
            $orderid = $o->createOrder($userid);
            $_SESSION['order_id']=$orderid;
           
            $total = 0;
            foreach($_SESSION['cartview'] as $key => $item)
                 {
                 $o->insertOrderDetail($orderid,$key,$item['cost'], $item['qty'], $item['total']);
                 $total += $item['total'];
                 }
                 $o->updateOrderTotal($orderid, $total);
           include "../view/website/products_payments.php";
            break;
         case "show_order":
             if (isset($_SESSION['order_id']))
             {
                 include "../view/website/products_payments.php";
                 break;
             }
             else
             {
                 
                 header ("Location:index.php?action=show_cart");
                 break;
             }
            
         case "products_details":
            include "../view/website/products_details.php";
            break;
         case "add_cart":
         echo add_item($_POST['productkey'],$_POST['itemqty']);
            include "../view/website/products_addcart.php";
            break;
         case "show_cart":
            include '../view/website/products_addcart.php';
            break;
         case "update_cart":
             $new_list = $_POST['newqty'];
             
             foreach($new_list as $key => $qty)
             {
                
                 if($_SESSION['cartview'][$key] != $qty)
                 {
                     update_item($key,$qty);
                 }
             }
             
          include '../view/website/products_addcart.php';
          break;
         case "empty_cart":
             unset($_SESSION['cartview']);
             include '../view/website/products_addcart.php';
             break;
            
          // Gọi trang liên hệ  
         case "contact":
            include "../view/website/contact.php";
            break;
            
            
         // Gọi trang Logout   
         case "logout":
            include "../view/website/logout.php";
            break;
         // Gọi  trang Login 
         case "login":
            include "../view/website/login.php";
            break;
         
         // Gọi trang hành động của trang Login
          case "login_action":
           
            $username = $_POST['txtusername'];
            $_SESSION['username'] = $username;
            $password = $_POST['txtpassword'];
            $_SESSION['password'] = $password;
            
            $user = new customer();
            if ($username=="" || $password=="")
            {
                // Tạo mặc định biến Session cho người dùng sau khi đăng nhập thành công
                $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
                include "../view/website/login.php";
                break;
            }
            else
            {
                if($user->checkUser($username,$password))
                {
                   
                   $result = $user->userid($username, $password);
                   $userid = $result[0];
                
                if($remember)
               {
                $time=time()+60*60*24*30;
                setcookie("user","$username",$time);
                setcookie("pass","$password",$time);
               }
               // Tạo mặc định biến Session cho người dùng sau khi đăng nhập thành công
                $_SESSION['check'] = $username;
                //include '../view/index.php';
                header ("Location:index.php");
                break;
                 }
                else
                {
                    $_SESSION['messages'] = "Tên đăng nhập chưa chính xác !";
                    include "../view/website/login.php";
                    break;
                }
            }
            
          
       //Show sản phẩm theo nhóm
       case "products_list_canon":
           $action="products_list_canon";
           $Category ="Máy ảnh Canon";
           include '../view/website/products_list.php';
            break;
        case "products_list_nikon":
           $action="products_list_nikon";
           $Category ="Máy ảnh Nikon";
           include '../view/website/products_list.php';
            break;
        case "products_list_others":
           $action="products_list_others";
           $Category ="Các loại máy ảnh khác";
           include '../view/website/products_list.php';
            break;
        //show phụ kiện
       case "accessories_list_flash":
           $action="accessories_list_flash";
           $Category ="Đèn flash";
           include '../view/website/products_list.php';
            break;
        case "accessories_list_lens":
           $action="accessories_list_lens";
           $Category ="Lens";
           include '../view/website/products_list.php';
            break;
        case "accessories_list_others":
           $action="accessories_list_others";
           $Category ="Đồ chơi tổng hợp";
           include '../view/website/products_list.php';
            break;
       
      case "about":
          include '../view/website/about.php';
          break;
      
     }
?>
