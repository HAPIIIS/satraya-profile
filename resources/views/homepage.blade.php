<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Satraya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ Storage::url('img/IMG_6810.png') }}" rel="icon">
  <link href="{{ Storage::url('/Arsha/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ Storage::url('/Arsha/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ Storage::url('/Arsha/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ Storage::url('/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ Storage::url('/Arsha/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ Storage::url('/Arsha/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ Storage::url('/Arsha/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ Storage::url('/Arsha/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ Storage::url('/Arsha/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color:#B27B02; font-family:Poppins;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ Storage::url('/img/IMG_6810.png') }}" alt="logo" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#hero">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#religion">Religion</a>
            @foreach ($indonesia_beragama as $article)    
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#islam">Islam</a></li>
              <li><a class="dropdown-item" href="#kristen">Kristen</a></li>
              <li><a class="dropdown-item" href="#katolik">Katolik</a></li>
              <li><a class="dropdown-item" href="#hindu">Hindu</a></li>
              <li><a class="dropdown-item" href="#buddha">Buddha</a></li>
              <li><a class="dropdown-item" href="#konghucu">Konghucu</a></li>
            </ul>
            @endforeach
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Culture</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#culture">Sadar Budaya</a></li>
              <li><a class="dropdown-item" href="#ragam_tradisi">Ragam Tradisi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"  href="#">Moderation</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#implementasi">Implementasi</a></li>
              <li><a class="dropdown-item" href="#urgensi">Urgensi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/login') }}">
              Sign In
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="width: 100%; height: 80vh; background: #B27B02;">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1 class="mb-0" style="color:#924722;">UNITY</h1>
          <h1 class="mb-0" style="color: #FFFCE3;">IN</h1>
          <h1 style="color: #E3AF18;">DIVERSITY</h1>
          <h2 style="color: #FFFCE3;">“SATRAYA”</h2>
          <h2 style="color: #FFFCE3;">Website yang menyajikan Agama Budaya dan Tradisi dalam satu warna Moderasi.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto" style="background-color: #FFFCe3; color:#924722;">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ Storage::url('img/IMG_6875.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Religion Section ======= -->
    @foreach ($indonesia_beragama as $article)
    <section id="religion" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        
        <div class="row">
          
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            
            <div class="content">
              <h3><strong>Indonesia Beragama</strong></h3>
              <h4>{{ $article->title }}</h4>
              <h6 id="#{{ $article->agama }}">{{ $article->agama }}</h6>
              <p>
                {{ strip_tags($article->description, 'p,b')}}
              </p>
            </div>
          </div>

          @foreach ($article->image as $image)    
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ Storage::url($image) }}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          @endforeach
        </div>

      </div>
    </section>
    @endforeach
    <!-- End Religion Section -->

    <!-- ======= Culture Section ======= -->
    @foreach ($sadar_budaya as $item)
    <section id="culture" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            @foreach ($item->image as $image)
            <img src="{{ Storage::url($image) }}" class="img-fluid" alt="">
            @endforeach
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Sadar Budaya</h3>
            <h4>{{ $item->title }}</h4>
            <p class="fst-italic">
              {{ strip_tags($item->description, 'p,b')}}
            </p>
          </div>
        </div>

      </div>
    </section>
    @endforeach
    <!-- End Culture Section -->

    <!-- ======= Ragam Tradisi Section ======= -->
    @foreach ($ragam_tradisi as $ragam)    
    <section id="ragam_tradisi" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Ragam Tradisi</h2>
          <h3>{{ $ragam->title }}</h3>
          <p>
            {{ strip_tags($ragam->description, 'p,b')}}
          </p>
        </div>

      </div>
    </section>
    @endforeach
    <!-- End Ragam Tradisi Section -->

    <!-- ======= Implementasi Section ======= -->
    @foreach ($implementasi as $imp)    
    <section id="implementasi" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Implementasi</h2>
          <h3>{{ $imp->title }}</h3>
          <p>{{ strip_tags($imp->description), 'p,b' }}</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[0]) }}" class="img-fluid" alt=""></div>
            
            <div class="portfolio-info">
              <h4>Image 1</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[0]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[1]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 2</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[1]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[2]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 3</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[2]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[3]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 4</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[3]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 4"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[4]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 5</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[4]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 5"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[5]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 6</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[5]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 6"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[6]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 7</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[6]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 7"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[7]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 8</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[7]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 8"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ Storage::url($imp->image[8]) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Image 9</h4>
              <p>Image</p>
              <a href="{{ Storage::url($imp->image[8]) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image 9"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Implemetasi Section -->
    @endforeach

    <!-- ======= Urgensi Section ======= -->
    @foreach ($urgensi as $urgen)    
    <section id="urgensi" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Urgensi</h2>
          <h3>{{ $urgen->title }}</h3>
          <p>{{ strip_tags($urgen->description), 'p,b' }}</p>
        </div>
      </div>
    </section>
    @endforeach
    <!-- End Urgensi Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ Storage::url('img/nova.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Novala Arum Salsabillah</h4>
                <span>214110402300</span>
                <p>Pendidikan Agama Islam - 	
                  Universitas Islam Negeri Profesor Kiai Haji Saifuddin Zuhri Purwokerto</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ Storage::url('img/gina.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Gina Farhanah Jauza</h4>
                <span>2017104083</span>
                <p>Pengembangan Masyarakat Islam - 	
                  Universitas Islam Negeri Profesor Kiai Haji Saifuddin Zuhri Purwokerto</p>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ Storage::url('img/dwi.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dwi Aryanti</h4>
                <span>214110102055</span>
                <p>Komunikasi Penyiaran Islam - 	
                  Universitas Islam Negeri Profesor Kiai Haji Saifuddin Zuhri Purwokerto</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Universitas Islam Negeri Profesor Kiai Haji Saifuddin Zuhri Purwokerto</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ Storage::url('/Arsha/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ Storage::url('/Arsha/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ Storage::url('/Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ Storage::url('/Arsha/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ Storage::url('/Arsha/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ Storage::url('/Arsha/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ Storage::url('/Arsha/assets/js/main.js') }}"></script>

</body>

</html>