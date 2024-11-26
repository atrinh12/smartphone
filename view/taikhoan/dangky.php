<div class="row mb ">
            <div class="boxtrai mr">
            <div class="row mb">
                
                <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
                <div class=" row boxcontent formtaikhoan">
                    <form action="index.php?act=dangky" method="post">
                        <div class="row mb10">
                            EMAIL
                            <input type="email" name="email">
                        </div>
                        <div class="row mb10">
                            TÊN ĐĂNG NHẬP
                            <input type="text" name="user">
                        </div>
                        <div class="row mb10">
                            MẬT KHẨU
                            <input type="password" name="pass">
                        </div>
                        <div class="row mb10">
                            <input type="submit" value="Đăng ký" name="dangky">
                        
                        
                            <input type="reset" value="Nhập lại">
                        </div>
                        
                        
                    </form>
                    <h2 class="thongbao">
                    <?php
                    
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }

                    ?>
                    </h2>
                </div>
                                
            </div>              
            </div>              

            </div>
            <div class="boxphai ">
                <?php include "view/boxright.php"; ?>
            </div>
        </div>