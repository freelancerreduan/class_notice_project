







<style>
    .slick-arrow {
        display: none !important;
    }

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

<div class="my_slider mb-3 mt-3">
  <?php while($slider = mysqli_fetch_assoc($slider_info)){ ?>
    <div class="text-white">
        <a href="<?php echo $slider['slider_link']; ?>" class="">
        <img src="admin/upload/<?php echo $slider['slider_img']; ?>" style="height: 40vh; width: 100%; border-radius: 10px; " alt="" class="slick_slider">
        </a>
    </div>
    <?php } ?>
</div>


<!-- 
<div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner" style="height: 40vh; border-radius:10px;">
    <div class="carousel-item active">
      <img src="upload/7.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="upload/7.png" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->




<!-- 
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://yt3.googleusercontent.com/0poKQQvTfB_3an12tVGLNpq86jB1EhKHOlBs-5VQfsaxPQ7M-pQ9L27jfmqcQ6qZ5KtlqIU_=s900-c-k-c0x00ffffff-no-rj" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://yt3.googleusercontent.com/0poKQQvTfB_3an12tVGLNpq86jB1EhKHOlBs-5VQfsaxPQ7M-pQ9L27jfmqcQ6qZ5KtlqIU_=s900-c-k-c0x00ffffff-no-rj" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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