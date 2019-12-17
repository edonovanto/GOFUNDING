<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gofunding - Langkah pengajuan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- slonlsd -->
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="/landing/css/style.css">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="/landing/css/style.css">
</head>
<body>
  <nav class="navbar px-md-0 navbar-expand-md navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/">
				<!-- Logo icon --><b>
				<!-- Light Logo icon -->
					<img src="a/images/logo-icon.png" alt="GOFUNDING" class="light-logo" style="height: 65px;"/>
				</b>
				<!--End Logo icon -->
				<!-- Logo text --><span>
				<!-- Light Logo text -->    
					<img src="a/images/logo-light-text.png" class="light-logo" id="light-logo" alt="GOFUNDING" style="height: 60px;"/></span> </a>
			<button class="navbar-toggler navbar-nav mr-auto mt-md-0" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
			@if (Route::has('login'))
				<ul class="navbar-nav my-lg-0">
					<li class="nav-item active"><a href="/" class="nav-link">Beranda</a></li>
					<li class="nav-item"><a href="/langkah_pengajuan" class="nav-link">Langkah Pengajuan</a></li>
					<li class="nav-item"><a href="/tentang" class="nav-link">Tentang</a></li>
					@auth
					<li class="nav-item cta"><a href="{{ url('/dashboard') }}" class="nav-link">{{ Auth::user()->name }}</a></li>
					@else
					<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Masuk</a></li>
					@if (Route::has('register'))
					<li class="nav-item cta"><a href="{{ route('register') }}" class="nav-link">Daftar</a></li>
					@endif
          @endauth
				</ul>
			@endif
			</div>
		</div>
	</nav>
	<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg300.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Langkah Pengajuan</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Langkah pengajuan <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="cd-timeline js-cd-timeline">
  <div class="container max-width-lg cd-timeline__container">
    <div class="cd-timeline__block">
      <div class="cd-timeline__img cd-timeline__img--picture" style="background-color: #6646a3">
        <h1 class="numb-timeline" style="font-family: sans-serif; color: #15bdeb">1</h1>
      </div> <!-- cd-timeline__img -->

      <div class="cd-timeline__content">
        <h2 style="color: #15bded">Masuk</h2>
        <p class="color-contrast-medium" style="font-size: 15px">Belum punya akun?
          daftar dan masuklah untuk menjadi bagian dari kami.
        </p>

        <div class="flex justify-between items-center">
          <span class="cd-timeline__date">langkah Pertama</span>

        </div>
      </div> <!-- cd-timeline__content -->
    </div> <!-- cd-timeline__block -->

    <div class="cd-timeline__block">
      <div class="cd-timeline__img cd-timeline__img--movie" style="background-color: #6646a3">
        <h1 class="numb-timeline" style="font-family: sans-serif; color: #15bdeb">2</h1>          
      </div> <!-- cd-timeline__img -->

      <div class="cd-timeline__content text-component">
        <h2 style="color: #15bded">download template</h2>
        <p class="color-contrast-medium">Bagian ini bersifat opsional, silahkan skip langkah ini kemudian lanjut ke langkah berikutnya kalau anda sudah mempunyai format sendiri. Namun apabila anda belum memiliki format sendiri, kami menyediakan template sesuai format akademik. </p>

        <div class="flex justify-between items-center">
          <span class="cd-timeline__date">Langkah kedua</span>
        </div>
      </div> <!-- cd-timeline__content -->
    </div> <!-- cd-timeline__block -->

    <div class="cd-timeline__block">
      <div class="cd-timeline__img cd-timeline__img--picture" style="background-color: #6646a3" >
        <h1 class="numb-timeline" style="font-family: sans-serif; color: #15bdeb">3</h1> 
      </div> <!-- cd-timeline__img -->

      <div class="cd-timeline__content text-component">
        <h2 style="color: #15bded">Upload File</h2>
        <p class="color-contrast-medium">Upload proposal ataupun LPJ anda untuk dikirim ke bagian akademik.</p>

        <div class="flex justify-between items-center">
          <span class="cd-timeline__date">langkah ketiga</span>
        </div>
      </div> <!-- cd-timeline__content -->
    </div> <!-- cd-timeline__block -->

    <div class="cd-timeline__block">
      <div class="cd-timeline__img cd-timeline__img--location" style="background-color: #6646a3">
       <h1 class="numb-timeline" style="font-family: sans-serif; color: #15bdeb">4</h1> 
     </div> <!-- cd-timeline__img -->

     <div class="cd-timeline__content text-component">
      <h2 style="color: #15bded">Edit hasil evaluasi</h2>
      <p class="color-contrast-medium">Setelah anda upload proposal, anda akan mendapat balasan dari pihak akademik diminta untuk revisi ataupun sudah diterima. Silahkan download kembali proposal anda kemudian revisi </p>

      <div class="flex justify-between items-center">
        <span class="cd-timeline__date">langkah keempat</span>
      </div>
    </div> <!-- cd-timeline__content -->
  </div> <!-- cd-timeline__block -->


  <div class="cd-timeline__block">
    <div class="cd-timeline__img cd-timeline__img--movie" style="background-color: #6646a3">
      <h1 class="numb-timeline" style="font-family: sans-serif; color: #15bdeb">5</h1>
    </div> <!-- cd-timeline__img -->

    <div class="cd-timeline__content text-component">
      <h2 style="color: #15bded">Cetak file</h2>
      <p class="color-contrast-medium">File yang telah direvisi silahkan diupload ulang untuk mendapat evaluasi kembali oleh akademik.</p>

      <div class="flex justify-between items-center">
        <span class="cd-timeline__date">langkah terakhir</span>
        <a href="#0" class="btn btn--subtle" style="background-color: #15bded;color: #6646a3;font-family: poppins;">Mulai</a>
      </div>
    </div> <!-- cd-timeline__content -->
  </div> <!-- cd-timeline__block -->
</div>
</section> <!-- cd-timeline -->
<script src="assets/js/main.js"></script>


<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="logo"><a href="#">GOFUNDING <span>Kemudahan Mencari Dana</span></a></h2>
          <p>Membantu dan memudahkan anda dalam mencari bantuan dana ke akademik.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
         <h2 class="ftco-heading-2">Butuh Bantuan?</h2>
         <div class="block-23 mb-3">
           <ul>
             <li><span class="icon icon-map-marker"></span><span class="text">Sekip Unit 1 Catur Tunggal,Depok Sleman Yogyakarta, Indonesia. 55281</span></li>
             <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
             <li><a href="#"><span class="icon icon-envelope"></span><span class="text">gofunding@mail.com</span></a></li>
           </ul>
         </div>
       </div>
     </div>
     <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Jam Kerja</h2>
        <div class="opening-hours">
         <h4>Jam Buka:</h4>
         <p class="pl-3">
          <span>Senin – Jum'at : 8.00 - 15.00</span>
          <br>
          <span>Sabtu, Minggu, : Libur</span>
        </p>
        <h4>Hari libur Nasional:</h4>
        <p class="pl-3">
          <span>Libur</span>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-center">


    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>