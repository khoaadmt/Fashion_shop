


<div class="main">
            <?php
                #include ("sidebar/sidebar.php");
            ?>
            <div class="maincontent">
              
                <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
                        if(isset($_GET['quanly'])){
                            $bientam=$_GET['quanly'];

                        }else{
                            $bientam="";
                        }
                        if ($bientam=='danhmuclist'){
                            include("main/danhmuc.php");
                        }elseif ($bientam=='giohang'){ 
                            include("main/giohang/cart.php");
                        }elseif ($bientam=='dangky'){ 
                            // include("main/dangky.php");
                            header("Location:signin/signin.php");                          
                        }elseif ($bientam=='contact'){ 
                            include("main/contact.php");
                        }elseif ($bientam=='sanpham'){ 
                            include("main/sanpham.php");                    
                        }elseif ($bientam=='dangnhap'){
                            // include("user/loginuser.php");
                            header("Location:user/loginuser.php");                          
                        }elseif ($bientam=='thongtin'){ 
                            include("main/info.php");
                        }elseif ($bientam=='timkiem'){ 
                            include("main/timkiem.php");
                            
                        
                        }else{ ?>


<div class="banner">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="images/banner.jpg" alt="Banner 1" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="images/1a.jpg" alt="Banner 2" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="images/4a.jpg" alt="Banner 3" style="width:100%">
            </div>
            <!-- Add more slides if needed -->
        </div>
    </div>

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
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
    </script>           
                        <?php
                       
                        }
 ?>
                
            </div>
        </div>



