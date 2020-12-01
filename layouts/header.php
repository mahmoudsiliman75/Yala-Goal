<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- START:: INCLUDING SHORT ICON -->
  <link rel="short icon" href="imgs/logo.png">
  <!-- END:: INCLUDING SHORT ICON -->

  <!-- START:: INCLUDING BOOTSTRAP CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- END:: INCLUDING BOOTSTRAP CSS -->

  <!-- START:: OWL CAROUSEL CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- END:: OWL CAROUSEL CSS -->

  <!-- START:: INCLUDING FONT AWESOME CSS -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- END:: INCLUDING FONT AWESOME CSS -->

  <!-- START:: INCLUDING LINE AWESOME CSS -->
  <link rel="stylesheet" href="css/line-awesome.min.css">
  <!-- END:: INCLUDING LINE AWESOME CSS -->

  <!-- START:: INCLUDING MAIN STYLES -->
  <link rel="stylesheet" href="css/style.css">
  <!-- END:: INCLUDING MAIN STYLES -->

  <!-- START:: INCLUDING GOOGLE FONTS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Righteous&display=swap">
  <!-- END:: INCLUDING GOOGLE FONTS -->

  <title>Yalla Goal - يلا جول </title>
</head>
<body>

<!-- START:: NAV BAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

  <div class="container">
    <a class="navbar-brand mx-3" href="index.php">
      <span> Yalla Goal  </span>
      <img src="imgs/logo.png" height="50px" alt="موقع يلا جول الرياضى">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">المباريات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            البطولات
          </a>
          <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              <div class="row">
                <div class="sub-sec-one col-12 col-md-6">
                  <h4 class="text-right"> بطولات الأندية </h4>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>

                <div class="sub-sec-tow col-12 col-md-6">
                  <h4 class="text-right"> بطولات المنتخبات </h4>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
          </div>
        </li>

      </ul>
    </div>

    <div class="navbar-social mr-auto">
      <ul class="mx-3">
        <li> 
          <a href="#" class="insta"> <i class="lab la-instagram la-2x"></i> </a> 
        </li>
        <li> 
          <a href="#" class="youtube"> <i class="lab la-youtube la-2x"></i> </a> 
        </li>
        <li>
          <a href="#" class="facebook"> <i class="lab la-facebook-f la-2x"></i> </a> 
        </li>
        <li> 
          <a href="#" class="twitter"> <i class="lab la-twitter la-2x"></i> </a> 
        </li>
        <li id="open-search-area"> 
          <button class="search"> <i class="la la-search"> </i></button> 
        </li>        
      </ul>
    </div>

  </div>
</nav>

<div id="search-area" class="search-area">
  <div class="container">
    <button class="close-search-area" id="close-search-area"> 
      <i class="las la-times la-2x"></i> 
    </button>
    <div class="nav-search d-block">
      <form action="">
        <input class="search-input" type="text" placeholder="إبحث هنا">
      </form>
      <ul class="mt-4">
        <li> 
          <a href="#"> نتيجة البحث الأولى  </a> 
        </li>
        <li>
          <a href="#"> نتيجة البحث الثانية  </a> 
        </li>
        <li>
          <a href="#"> نتيجة البحث الثالثة  </a> 
        </li>
        <li>
          <a href="#"> نتيجة البحث الرابعة  </a> 
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- END:: NAV BAR -->