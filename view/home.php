<div class="row mb ">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 7</div>
                        <img src="view/images/baner 1.jpg" style="width:860%">
                        <div class="text">Text</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">2 / 7</div>
                        <img src="view/images/baner 2.jpg" style="width:860%">
                        <div class="text">Two</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">3 / 7</div>
                        <img src="view/images/baner 3.jpg" style="width:860%">
                        <div class="text"> Three</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">4 / 7</div>
                        <img src="view/images/baner 4.jpg" style="width:860%">
                        <div class="text"> Four</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">5 / 7</div>
                        <img src="view/images/baner 5.jpg" style="width:860%">
                        <div class="text"> Five </div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">6 / 7</div>
                        <img src="view/images/baner 6.jpg" style="width:860%">
                        <div class="text"> Six </div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">7 / 7</div>
                        <img src="view/images/baner 7.jpg" style="width:860%">
                        <div class="text"> Seven </div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                     
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==11)||($i==14)||($i==17)||($i==20)||($i==23)||($i==26)||($i==29)||($i==32)||($i==35)||($i==38||$i==41)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">

                                    <div class="row img"> <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                                      <p> '    .$price.' đ</p> 
                                        <a href="'.$linksp.'">'.$name.'</a>
                                        <div class="row btnaddtocart">
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
                                        </form>
                                        </div>
                                </div>';
                                $i+=1;
                        }
                    ?>
                </div> 
            </div>
            <div class="boxphai ">
                <?php include "boxright.php"; ?>
            </div>
        </div>