<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php')?>
<!-- END:: INCLUDING HEADER -->

<!-- START:: CONTENT -->

<!-- START:: HOME MATCHES TABLE -->
<div class="matches-box">
	<!-- START:: MATCH CARDS SECTION -->
	<div class="overlay">
		<div class="container position-relative" style="height: 85%">

			<!-- START:: MATCH TABS -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">

				<li class="nav-item" role="presentation">
					<a class="nav-link" id="yesterday-tab" data-toggle="tab" href="#yesterday" role="tab" aria-controls="yesterday" aria-selected="false">امس</a>
				</li>

				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="today-tab" data-toggle="tab" href="#today" role="tab" aria-controls="today" aria-selected="true">اليوم</a>
				</li>

				<li class="nav-item" role="presentation">
					<a class="nav-link" id="tomorrow-tab" data-toggle="tab" href="#tomorrow" role="tab" aria-controls="tomorrow" aria-selected="false">غدا</a>
				</li>

				<li class="nav-item" role="presentation">
					<a class="nav-link" id="live-tab" data-toggle="tab" href="#live" role="tab" aria-controls="live" aria-selected="false">مباشر </a>
				</li>

			</ul>

			<div class="tab-content" id="myTabContent">

				<div class="tab-pane fade" id="yesterday" role="tabpanel" aria-labelledby="yesterday-tab">
					<!-- START: TAB CONTENT -->
					<div class="empty-tag-content">
						<h3> لا توجد مباريات امس </h3>
					</div>
					<!-- END: TAB CONTENT -->
				</div>

				<div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today-tab">
					<!-- START: TAB CONTENT -->
					<div id="matches-cards-slider" class="owl-carousel owl-theme">

						<!-- START:: MATCH CARD  -->
						<div class="item match-card">
							<div class="row">

								<div class="col-4 justify-content-center text-center">
									<a href="#"> 
										<img src="imgs/teams/ahly.png" alt="النادى الاهلى">
									</a>
									<p class="team-name text-center"> الاهلى </p>
								</div>

								<div class="col-4 justify-content-center">
									<p class="competition-name text-center"> دورى ابطال افريقيا </p>
									<p class="match-result text-center"> <span>-</span> &nbsp;&nbsp; <span>-</span> </p>
									<p class="match-stat text-center"> <span>لم تبدأ </span> </p>
									<p class="match-time text-center"> 00 : 21 </p>
								</div>

								<div class="col-4 justify-content-center text-center">
									<a href="#">
										<img src="imgs/teams/zamalek.png" alt="نادى الزمالك">
									</a>
									<p class="team-name text-center"> الزمالك </p>
								</div>

							</div>
						</div>
						<!-- START:: MATCH CARD  -->

						<!-- START:: MATCH CARD  -->
						<div class="item match-card">
							<div class="row">

								<div class="col-4 justify-content-center text-center">
									<a href="#"> 
										<img src="imgs/teams/liverpool.png" alt=" ليفربول">
									</a>
									<p class="team-name text-center"> ليفربول </p>
								</div>

								<div class="col-4 justify-content-center">
									<p class="competition-name text-center"> دورى ابطال اوروبا </p>
									<p class="match-result text-center"> <span>0</span> &nbsp;&nbsp; <span>4</span> </p>
									<p class="match-stat text-center"> <span> 15 : 31  </span> </p>
									<p class="match-time text-center"> مباشر <i class="far fa-dot-circle live"></i> </p>
								</div>

								<div class="col-4 justify-content-center text-center">
									<a href="#">
										<img src="imgs/teams/barca.png" alt="برشلونة">
									</a>
									<p class="team-name text-center"> برشلونة </p>
								</div>

							</div>
						</div>
						<!-- START:: MATCH CARD  -->

						<!-- START:: MATCH CARD  -->
						<div class="item match-card">
							<div class="row">

								<div class="col-4 justify-content-center text-center">
									<a href="#"> 
										<img src="imgs/teams/real.png" alt=" ريال مدريد">
									</a>
									<p class="team-name text-center"> ريال مدريد </p>
								</div>

								<div class="col-4 justify-content-center">
									<p class="competition-name text-center"> الدورى الاسبانى </p>
									<p class="match-result text-center"> <span>-</span> &nbsp;&nbsp; <span>-</span> </p>
									<p class="match-stat text-center"> <span>لم تبدأ </span> </p>
									<p class="match-time text-center"> 00 : 15 </p>
								</div>

								<div class="col-4 justify-content-center text-center">
									<a href="#">
										<img src="imgs/teams/atliti.png" alt=" اتليتيكو مدريد">
									</a>
									<p class="team-name text-center"> اتليتيكو مدريد </p>
								</div>

							</div>
						</div>
						<!-- START:: MATCH CARD  -->

						<!-- START:: MATCH CARD  -->
						<div class="item match-card">
							<div class="row">

								<div class="col-4 justify-content-center text-center">
									<a href="#"> 
										<img src="imgs/teams/ahly.png" alt="النادى الاهلى">
									</a>
									<p class="team-name text-center"> الاهلى </p>
								</div>

								<div class="col-4 justify-content-center">
									<p class="competition-name text-center"> دورى ابطال افريقيا </p>
									<p class="match-result text-center"> <span>-</span> &nbsp;&nbsp; <span>-</span> </p>
									<p class="match-stat text-center"> <span>لم تبدأ </span> </p>
									<p class="match-time text-center"> 00 : 21 </p>
								</div>

								<div class="col-4 justify-content-center text-center">
									<a href="#">
										<img src="imgs/teams/zamalek.png" alt="نادى الزمالك">
									</a>
									<p class="team-name text-center"> الزمالك </p>
								</div>

							</div>
						</div>
						<!-- START:: MATCH CARD  -->

					</div>
					<!-- END: TAB CONTENT -->
				</div>

				<div class="tab-pane fade" id="tomorrow" role="tabpanel" aria-labelledby="tomorrow-tab">
					<!-- START: TAB CONTENT -->
						<div class="empty-tag-content">
							<h3> لا توجد مباريات غدا </h3>
						</div>
					<!-- END: TAB CONTENT -->
				</div>

				<div class="tab-pane fade" id="live" role="tabpanel" aria-labelledby="live-tab">
					<!-- START: TAB CONTENT -->
					<div id="live-matches-slider" class="owl-carousel owl-theme">

						<!-- START:: MATCH CARD  -->
						<div class="item match-card">
							<div class="row">

								<div class="col-4 justify-content-center text-center">
									<a href="#"> 
										<img src="imgs/teams/liverpool.png" alt=" ليفربول">
									</a>
									<p class="team-name text-center"> ليفربول </p>
								</div>

								<div class="col-4 justify-content-center">
									<p class="competition-name text-center"> دورى ابطال اوروبا </p>
									<p class="match-result text-center"> <span>0</span> &nbsp;&nbsp; <span>4</span> </p>
									<p class="match-stat text-center"> <span> 15 : 31  </span> </p>
									<p class="match-time text-center"> مباشر <i class="far fa-dot-circle live"></i> </p>
								</div>

								<div class="col-4 justify-content-center text-center">
									<a href="#">
										<img src="imgs/teams/barca.png" alt="برشلونة">
									</a>
									<p class="team-name text-center"> برشلونة </p>
								</div>

							</div>
						</div>
						<!-- START:: MATCH CARD  -->

						<!-- START:: MATCH CARD  -->
						<div class="item match-card">
							<div class="row">

								<div class="col-4 justify-content-center text-center">
									<a href="#"> 
										<img src="imgs/teams/ahly.png" alt=" النادى الاهلى">
									</a>
									<p class="team-name text-center"> الاهلى </p>
								</div>

								<div class="col-4 justify-content-center">
									<p class="competition-name text-center">  الدورى المصري  </p>
									<p class="match-result text-center"> <span>6</span> &nbsp;&nbsp; <span>1</span> </p>
									<p class="match-stat text-center"> <span> 45 : 85  </span> </p>
									<p class="match-time text-center"> مباشر <i class="far fa-dot-circle live"></i> </p>
								</div>

								<div class="col-4 justify-content-center text-center">
									<a href="#">
										<img src="imgs/teams/zamalek.png" alt="الزمالك">
									</a>
									<p class="team-name text-center"> الزمالك </p>
								</div>

							</div>
						</div>
						<!-- START:: MATCH CARD  -->

					</div>
					<!-- END: TAB CONTENT -->
				</div>

			</div>
			<!-- END:: MATCH TABS -->

		</div>
	</div>
	<!-- END:: MATCH CARDS SECTION -->

	<!-- START:: SVG SHAPE  -->
	<svg id="curve" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
		<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
	</svg>
	<!-- START:: SVG SHAPE  -->
</div>
<!-- END:: HOME MATCHES TABLE -->

<!-- START:: LATEST NEWS -->
<div class="latest-news">
	<div class="container">
		<h2 class="custom-title"> اخر الاخبار </h2>
		<div class="row">

		</div>
	</div>
</div>
<!-- END:: LATEST NEWS -->	

<!-- END :: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php')?>
<!-- END:: INCLUDING FOOTER -->