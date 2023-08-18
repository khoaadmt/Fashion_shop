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
