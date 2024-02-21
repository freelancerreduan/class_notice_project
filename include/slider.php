







<style>


/* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
      /* slider */
      .slick_slider{
        height: 18vh !important;
        margin-bottom: 0.5rem!important;
      }
    }

</style>

<?php 
  $slider_info = $obj->slider_display();
?>




<div id="carouselExampleControls" class="carousel slide mb-4 mt-4" data-bs-ride="carousel">
  <div class="carousel-inner" style="height: 40vh; border-radius:10px;">
  <div class=" carousel-item active">
      <a target="_blank" href="<?php echo $slider['slider_link']; ?>" class="">
      <img src="admin/pdf_upload/2.jpg" class="d-block w-100" alt="slider"style="height: 40vh; width: 100%; border-radius: 10px; ">
    </div>
 
  <?php while($slider = mysqli_fetch_assoc($slider_info)){ ?>
    <div class="carousel-item">
      <a target="_blank" href="<?php echo $slider['slider_link']; ?>" class="">
      <img src="admin/pdf_upload/<?php  echo $slider['slider_img']; ?>" class="d-block w-100" alt="slider"style="height: 40vh; width: 100%; border-radius: 10px; ">
    </div>
  <?php } ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 





<!-- <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
   
    <div class="carousel-item active" style="height: 40vh; width: 100%; border-radius: 10px; ">
      <img src="https://yt3.googleusercontent.com/0poKQQvTfB_3an12tVGLNpq86jB1EhKHOlBs-5VQfsaxPQ7M-pQ9L27jfmqcQ6qZ5KtlqIU_=s900-c-k-c0x00ffffff-no-rj" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
   
    <div class="carousel-item " style="height: 40vh; width: 100%; border-radius: 10px; ">
      <img src="https://yt3.googleusercontent.com/0poKQQvTfB_3an12tVGLNpq86jB1EhKHOlBs-5VQfsaxPQ7M-pQ9L27jfmqcQ6qZ5KtlqIU_=s900-c-k-c0x00ffffff-no-rj" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>2 ND slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->



<!-- <script>
//   var owl = $('.carousel-item');
// owl.owlCarousel({
//     items:4, 
//     loop:true,
//     margin:10,
//     autoplay:true,
//     autoplayTimeout:8000,
//     autoplayHoverPause:true
// });

// window.onload = function () { 
// 	let slides = 
// 		document.getElementsByClassName('carousel-item'); 

// 	function addActive(slide) { 
// 		slide.classList.add('active'); 
// 	} 

// 	function removeActive(slide) { 
// 		slide.classList.remove('active'); 
// 	} 

// 	addActive(slides[0]); 
// 	setInterval(function () { 
// 		for (let i = 0; i < slides.length; i++) { 
// 			if (i + 1 == slides.length) { 
// 				addActive(slides[0]); 
// 				setTimeout(removeActive, 350, slides[i]); 
// 				break; 
// 			} 
// 			if (slides[i].classList.contains('active')) { 
// 				setTimeout(removeActive, 350, slides[i]); 
// 				addActive(slides[i + 1]); 
// 				break; 
// 			} 
// 		} 
// 	}, 1000); 
// };

</script> -->