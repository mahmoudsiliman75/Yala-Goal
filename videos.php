<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

<!-- START:: CONTENT -->
<div class="videos">
  <div class="container">
    <div class="row">

      <!-- START:: SIDE ADS -->
      <div class="side-add col-2 p-2 mt-2">
        <img class="img-fluid d-block mb-2" src="imgs/ad.jpg">
        <img class="img-fluid d-block" src="imgs/ad.jpg"> 
      </div>
      <!-- END:: SIDE ADS -->

      <!-- START:: VIDEO CARDS -->
      <div class="videos-container justify-content-center text-center col-8 p-3">
        <div class="row">
          <h2 class="custom-title"> أحدث الفيديوهات </h2>
          <!-- START:: VIDEO CARD -->
          <div class="card col-12 p-1 mb-5" style="height: 600px">
            <div class="card-body">
              <h5 class="card-title">لوريم ايبسوم دولار سيت أميت </h5>
            </div>
            <iframe src="https://www.youtube.com/embed/4a3h5pCecuU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!-- END:: VIDEO CARD -->

          <!-- START:: VIDEO CARD -->
          <div class="card col-12 p-1 mb-5" style="height: 600px">
            <div class="card-body">
              <h5 class="card-title">لوريم ايبسوم دولار سيت أميت </h5>
            </div>
            <iframe src="https://player.vimeo.com/video/254211423" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>
          <!-- END:: VIDEO CARD -->

          <!-- START:: VIDEO CARD -->
          <div class="card col-12 p-1 mb-5" style="height: 600px">
            <div class="card-body">
              <h5 class="card-title">لوريم ايبسوم دولار سيت أميت </h5>
            </div>
            <video width="100%" height="100%" controls>
              <source src="videos/sample.mp4" type="video/mp4">
            </video>
          </div>
          <!-- END:: VIDEO CARD -->

        </div>
        <!-- START:: SHOW MORE BUTTON  -->
        <button class="btn btn-primary"> المزيد من الفيديوهات <i class="las la-angle-double-down"></i> </button>
        <!-- END:: SHOW MORE BUTTON  -->
      </div>
      <!-- START:: VIDEO CARDS -->

      <!-- START:: SIDE ADS -->
      <div class="side-add col-2 p-2 mt-2" style="direction: ltr;">
        <img class="img-fluid d-block mb-2" src="imgs/ad.jpg">
        <img class="img-fluid d-block" src="imgs/ad.jpg"> 
      </div>
      <!-- END:: SIDE ADS -->
    </div>
  </div>
</div>
<!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include("layouts/footer.php") ?>
<!-- END:: INCLUDING FOOTER -->