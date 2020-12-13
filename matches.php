<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php')?>
<!-- END:: INCLUDING HEADER -->

<!-- START:: CONTENT -->

<!-- START:: MATCHES TABLE -->
<div class="matches-table">
  <div class="container">

    <div class="filters d-flex justify-content-center align-items-center mb-2 mb-md-4">

      <!-- START:: SELECT2 PLUGIN -->
      <select class="js-example-basic-single js-states form-control" id="id_label_single">
        <option data-filter="all"> البطولة </option>
        <option> <button data-filter=".category-egypt"> الدورى المصرى </button> </option>
        <option data-filter=".category-eng" value="1"> الدورى الإنجليزى </option>
        <option data-filter=".category-spain" value="2"> الدورى الاسبانى </option>
        <option value="3"> الدورى الألمانى </option>
        <option value="4"> الدورى الإيطالى </option>
        <option value="5"> دورى ابطال افريقيا </option>
        <option value="6"> كأس الكونفدرالية </option>
        <option value="7"> دورى ابطال اوروبا </option>
        <option value="8"> الدورى الاوروبي </option>
      </select>
      <!-- END:: SELECT2 PLUGIN -->

      <!-- START:: DATEPICKER PLUGIN -->
      <button id="date" data-toggle="datepicker"> <i class="las la-calendar"></i> </button>
      <!-- END:: DATEPICKER PLUGIN -->
    </div>

    <div id="tabs-slider" class="owl-carousel owl-theme nav nav-pills mb-3" id="pills-tab" role="tablist">

      <div class="nav-item item text-center">
        <a class="nav-link" id="pills-date-1-tab" data-toggle="pill" href="#pills-date-1" role="tab" aria-controls="pills-date-1" aria-selected="true">2020 - 12 -10 </a>
      </div>

      <div class="nav-item item text-center">
        <a class="nav-link" id="pills-date-2-tab" data-toggle="pill" href="#pills-date-2" role="tab" aria-controls="pills-date-2" aria-selected="false">2020 - 12 - 11</a>
      </div>

      <div class="nav-item item text-center">
        <a class="nav-link active" id="pills-date-3-tab" data-toggle="pill" href="#pills-date-3" role="tab" aria-controls="pills-date-3" aria-selected="false">Today</a>
      </div>

      <div class="nav-item item text-center">
        <a class="nav-link" id="pills-date-4-tab" data-toggle="pill" href="#pills-date-4" role="tab" aria-controls="pills-date-4" aria-selected="false">2020 - 12 - 13</a>
      </div>

      <div class="nav-item item text-center">
        <a class="nav-link" id="pills-date-5-tab" data-toggle="pill" href="#pills-date-5" role="tab" aria-controls="pills-date-5" aria-selected="false">2020 - 12 - 14</a>
      </div>

      <div class="nav-item item text-center">
        <a class="nav-link" id="pills-date-6-tab" data-toggle="pill" href="#pills-date-6" role="tab" aria-controls="pills-date-6" aria-selected="false">2020 - 12 -15 </a>
      </div>

      <div class="nav-item item text-center">
        <a class="nav-link" id="pills-date-7-tab" data-toggle="pill" href="#pills-date-7" role="tab" aria-controls="pills-date-7" aria-selected="false">2020 - 12 - 16</a>
      </div>

    </div>

    <div class="tab-content matches-table-content" id="pills-tabContent">

      <div class="tab-pane fade text-center" id="pills-date-1" role="tabpanel" aria-labelledby="pills-date-1-tab">
        <h2> لا يوجد مباريات </h2>
      </div>

      <div class="tab-pane fade text-center" id="pills-date-2" role="tabpanel" aria-labelledby="pills-date-2-tab">

        <div class="eng">
          <h2 class="mt-5 mb-4"> الدورى الإنجليزى </h2>

          <!-- START:: MATCH RESULT CARD -->
          <div class="card team-match-card mb-3">
            <div class="card-body">
                <h6 class="text-center"> الدورى الإنجليزى <h5>
                <div class="row justify-content-center">
                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/liverpool.png">
                    <p> ليفربول </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span> 3 </span> <span class="status d-inline-block mx-3"> إنتهت </span> <span> 2 </span>
                    <span class="date d-block"> 2020 - 12 - 11</span>
                  </div>

                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/city.png">
                    <p> مانشيستر سيتى </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> ملعب الامارات </span>
            </div>
          </div>
          <!-- END:: MATCH RESULT CARD -->

          <!-- START:: MATCH RESULT CARD -->
          <div class="card team-match-card mb-3">
            <div class="card-body">
                <h6 class="text-center"> الدورى الإنجليزى <h5>
                <div class="row justify-content-center">
                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/liverpool.png">
                    <p> ليفربول </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span> 3 </span> <span class="status d-inline-block mx-3"> إنتهت </span> <span> 2 </span>
                    <span class="date d-block"> 2020 - 12 - 11</span>
                  </div>

                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/city.png">
                    <p> مانشيستر سيتى </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> ملعب الامارات </span>
            </div>
          </div>
          <!-- END:: MATCH RESULT CARD -->

        </div>

        <div class="egy">
          <h2 class="mt-5 mb-4"> الدورى المصرى </h2>

          <!-- START:: MATCH RESULT CARD -->
          <div class="card team-match-card mb-3">
            <div class="card-body">
                <h6 class="text-center"> الدورى المصرى <h5>
                <div class="row justify-content-center">
                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/ahly.png">
                    <p> الأهلى </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span> 6 </span> <span class="status d-inline-block mx-3"> إنتهت </span> <span> 1 </span>
                    <span class="date d-block"> 2020 - 12 - 11</span>
                  </div>

                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/zamalek.png">
                    <p> الزمالك </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> استاد القاهرة  </span>
            </div>
          </div>
          <!-- END:: MATCH RESULT CARD -->

          <!-- START:: MATCH RESULT CARD -->
          <div class="card team-match-card mb-3">
            <div class="card-body">
                <h6 class="text-center"> الدورى المصرى <h5>
                <div class="row justify-content-center">
                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/ahly.png">
                    <p> الأهلى </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span> 6 </span> <span class="status d-inline-block mx-3"> إنتهت </span> <span> 1 </span>
                    <span class="date d-block"> 2020 - 12 - 11</span>
                  </div>

                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/zamalek.png">
                    <p> الزمالك </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> استاد القاهرة  </span>
            </div>
          </div>
          <!-- END:: MATCH RESULT CARD -->

          <!-- START:: MATCH RESULT CARD -->
          <div class="card team-match-card mb-3">
            <div class="card-body">
                <h6 class="text-center"> الدورى المصرى <h5>
                <div class="row justify-content-center">
                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/ahly.png">
                    <p> الأهلى </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span> 6 </span> <span class="status d-inline-block mx-3"> إنتهت </span> <span> 1 </span>
                    <span class="date d-block"> 2020 - 12 - 11</span>
                  </div>

                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/zamalek.png">
                    <p> الزمالك </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> استاد القاهرة  </span>
            </div>
          </div>
          <!-- END:: MATCH RESULT CARD -->

          <!-- START:: MATCH RESULT CARD -->
          <div class="card team-match-card mb-3">
            <div class="card-body">
                <h6 class="text-center"> الدورى المصرى <h5>
                <div class="row justify-content-center">
                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/ahly.png">
                    <p> الأهلى </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span> 6 </span> <span class="status d-inline-block mx-3"> إنتهت </span> <span> 1 </span>
                    <span class="date d-block"> 2020 - 12 - 11</span>
                  </div>

                  <div class="col-2  text-center p-0">
                    <img src="imgs/teams/zamalek.png">
                    <p> الزمالك </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> استاد القاهرة  </span>
            </div>
          </div>
          <!-- END:: MATCH RESULT CARD -->
        </div>

      </div>

      <div class="text-center tab-pane fade text-center show active" id="pills-date-3" role="tabpanel" aria-labelledby="pills-date-3-tab">

        <div class="egy">
          <h2 class="mt-5 mb-4"> الدورى المصرى </h2>

          <!-- START:: MATCH DATE CARD -->
          <div class="card team-match-card mb-3 mix category-egypt">
            <div class="card-body">
                <h6 class="text-center"> الدورى المصرى <h5>
                <div class="row justify-content-center">
                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/ahly.png">
                    <p> الأهلى </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span class="status d-inline-block"> لم تبدأ </span>
                    <span class="time d-block"> 00 : 9 </span>
                    <span class="date d-block"> 2020 - 12 - 12</span>
                  </div>

                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/zamalek.png">
                    <p> الزمالك </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> استاد القاهرة  </span>
            </div>
          </div>
          <!-- END:: MATCH DATE CARD -->

          <!-- START:: MATCH DATE CARD -->
          <div class="card team-match-card mb-3 mix category-egypt">
            <div class="card-body">
                <h6 class="text-center"> الدورى المصرى <h5>
                <div class="row justify-content-center">
                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/ahly.png">
                    <p> الأهلى </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span class="status d-inline-block"> لم تبدأ </span>
                    <span class="time d-block"> 00 : 9 </span>
                    <span class="date d-block"> 2020 - 12 - 12</span>
                  </div>

                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/zamalek.png">
                    <p> الزمالك </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> استاد القاهرة  </span>
            </div>
          </div>
          <!-- END:: MATCH DATE CARD -->
        </div>

        <div class="span">
          <h2 class="mt-5 mb-4"> الدورى الاسبانى </h2>

          <!-- START:: MATCH DATE CARD -->
          <div class="card team-match-card mb-3 mix category-spain">
            <div class="card-body">
                <h6 class="text-center"> الدورى الاسبانى <h5>
                <div class="row justify-content-center">
                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/barca.png">
                    <p> برشلونة </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span class="status d-inline-block"> لم تبدأ </span>
                    <span class="time d-block"> 00 : 9 </span>
                    <span class="date d-block"> 2020 - 12 - 12</span>
                  </div>

                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/real.png">
                    <p> ريال مدريد </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> الكامب نو  </span>
            </div>
          </div>
          <!-- END:: MATCH DATE CARD -->

          <!-- START:: MATCH DATE CARD -->
          <div class="card team-match-card mb-3 mix category-spain">
            <div class="card-body">
                <h6 class="text-center"> الدورى الاسبانى <h5>
                <div class="row justify-content-center">
                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/barca.png">
                    <p> برشلونة </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span class="status d-inline-block"> لم تبدأ </span>
                    <span class="time d-block"> 00 : 9 </span>
                    <span class="date d-block"> 2020 - 12 - 12</span>
                  </div>

                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/real.png">
                    <p> ريال مدريد </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> الكامب نو  </span>
            </div>
          </div>
          <!-- END:: MATCH DATE CARD -->
        </div>

        <div class="eng">
          <h2 class="mt-5 mb-4"> الدورى الإنجليزى </h2>

          <!-- START:: MATCH DATE CARD -->
          <div class="card team-match-card mb-3 mix category-eng">
            <div class="card-body">
                <h6 class="text-center"> الدورى الإنجليزى <h5>
                <div class="row justify-content-center">
                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/chelse.png">
                    <p> تشيلسي </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span class="status d-inline-block"> لم تبدأ </span>
                    <span class="time d-block"> 00 : 9 </span>
                    <span class="date d-block"> 2020 - 12 - 12</span>
                  </div>

                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/liverpool.png">
                    <p> ليفر بول </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> انفيلد </span>
            </div>
          </div>
          <!-- END:: MATCH DATE CARD -->

          <!-- START:: MATCH DATE CARD -->
          <div class="card team-match-card mb-3 mix category-eng">
            <div class="card-body">
                <h6 class="text-center"> الدورى الإنجليزى <h5>
                <div class="row justify-content-center">
                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/chelse.png">
                    <p> تشيلسي </p>
                  </div>

                  <div class="col-8 text-center"> 
                    <span class="status d-inline-block"> لم تبدأ </span>
                    <span class="time d-block"> 00 : 9 </span>
                    <span class="date d-block"> 2020 - 12 - 12</span>
                  </div>

                  <div class="col-2 text-center p-0">
                    <img src="imgs/teams/liverpool.png">
                    <p> ليفر بول </p>
                  </div>
                </div>
                <span class="playground d-block text-center"> <i class="las la-futbol"></i> انفيلد </span>
            </div>
          </div>
          <!-- END:: MATCH DATE CARD -->
        </div>

      </div>

      <div class="tab-pane fade text-center" id="pills-date-4" role="tabpanel" aria-labelledby="pills-date-4-tab"><h2> test 1 </h2></div>

      <div class="tab-pane fade text-center" id="pills-date-5" role="tabpanel" aria-labelledby="pills-date-5-tab"><h2> test 2 </h2></div>

      <div class="tab-pane fade text-center" id="pills-date-6" role="tabpanel" aria-labelledby="pills-date-6-tab"><h2> test 3 </h2></div>

      <div class="tab-pane fade text-center" id="pills-date-7" role="tabpanel" aria-labelledby="pills-date-7-tab"><h2> test 4 </h2></div>

    </div>

  </div>

</div>
<!-- END:: MATCHES TABLE -->

<!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php')?>
<!-- END:: INCLUDING FOOTER -->