        <div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN </h1>
            </div>
            
            <div class="row frmcontennt">
                <!-- <form action="#" method="post"> -->
                    <div class="row mb10 frmdsloai">
                     <table>
                        <tr>
                            <th></th>
                            <th>ID</th>  
                            <th>Nội dung</th>
                            <th>Iduser</th>
                            <th>Idpro</th>
                            <th>Ngày bình luận</th>
                           
                            <th></th>
                            <!-- thẻ th để nội dung đc in đậm  -->
                        </tr>

                        <?php
                            //  nó sẽ lặp qua từng phần tử trong mảng $listdanhmuc và gán giá trị của từng
                            // phần tử cho biến $danhmuc, sau đó thực hiện các lệnh trong khối lặp.
                            foreach ($listbinhluan as $binhluan){
                                extract($binhluan); //  Lấy trực tiếp tên biến rồi show ra

                                $suabl = "index.php?act=suabl&id=".$id;
                                $xoabl = "index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>  
                                        <td>'.$iduser.'</td>  
                                        <td>'.$idpro.'</td>  
                                        <td>'.$ngaybinhluan.'</td>  
                                        <td><a href="'.$suabl.'"><input type="button" value="Phan hoi"></a>  <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                                <tr>';
                                    
                                
                            }

                        ?>


                     </table>
                    </div>
                  
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa tất cả các mục đã chọn">
                        
                    </div>
                
            </div>


        </div>

