<div class="row mb ">
    <form action="index.php?act=billcomfirm" method="post">

            <div class="row mb">
                <div class="boxtitle"> THÔNG TIN ĐẶT HÀNG  </div>
                <!-- <div class="content-dh bang"> -->
                <div class="row boxcontent billform">
                 <table>
                     <?php
                        if (isset($_SESSION['user'])) {
                           $name = $_SESSION['user']['user'];
                           $address = $_SESSION['user']['address'];
                           $email = $_SESSION['user']['email'];
                           $tel = $_SESSION['user']['tel'];
                        }else{
                           $name ="";
                           $address ="";
                           $email ="";
                           $tel ="";
                        }
                     
                     ?>
                     
     
     
     
                     <tr>
                         <td>Người đặt hàng</td>
                         <td><input type="text" name="name" value="<?=$name?>"></td>
                     </tr>
                     <tr>
                         <td>Địa chỉ</td>
                         <td><input type="text" name="address" value="<?=$address?>"></td>
                     </tr>
                     <tr>
                         <td>Email</td>
                         <td><input type="text" name="email" value="<?=$email?>"></td>
                     </tr>
                     <tr>
                         <td>Điện thoại</td>
                         <td><input type="text" name="tel" value="<?=$tel?>"></td>
                     </tr>
                 </table>
                </div>  
            </div>

            <!-- <div class="row phuongthuc-dh"> -->
            <div class="row mb">
               <div class="boxtitle"> PHƯƠNG THỨC THANH TOÁN  </div>
                    <!-- <div class="content-ptdh"> -->
                    <div class="row boxcontent">
                          <table>
                              <tr>
                                  <td><input type="radio" name="pttt" checked> Thanh toán bằng ví điện tử</td>
                                  <td><input type="radio" name="pttt" > Thanh toán bằng thẻ ghi nội địa </td>
                                  <td><input type="radio" name="pttt" > Thanh toán khi nhận hàng</td>
                              </tr>
                          </table>    
                    </div>
                </div>
                
                
                
                
                <!-- <div class="row mb phuongthuc-dh"> -->
                <div class="row mb">
                    <div class="boxtitle"> THÔNG TIN GIỎ HÀNG CỦA BẠN  </div>
                    <div class="row boxcontent cart">
                     <!-- <div class="content-ptdh vienbang"> -->
                        <table>
            
                            

                            <?php
                                viewcart(0);      
                            ?> 

                        </table>
                     </div>
                 

                </div> 


                <!-- <div class="nut-dh"> -->
                <div class="row mb bill">
                     <!-- <a href="index.php?act=billcomfirm"> -->
                         <input  type="submit" value="TIẾP TỤC ĐẶT HÀNG" name="dongydathang">
                     </a>
                 </div>



        </div>           


    </form>


  
         
   <div class="boxphai">
         <?php
            include "view/boxright.php";
         ?>   
   </div>

</div>













