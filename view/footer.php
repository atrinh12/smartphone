<div class="row mb footer">
    <center>
                                    SMARTPHONE <br>
    Địa Chỉ: 327 Nguyễn Lương Bằng, phường Hòa Khánh Bắc, quận Liên Chiểu, thành phố Đà Nẵng <br>
                                Tel : 0486729472 <br>
                          Email : vothithanhthuong03@gmail.com <br>
                       Rất Vui Được Phục Vụ Quý Khách Hàng! <br>


                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
    </center>
        </div>
    </div>

    <!-- js cho slideshow -->
    
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>