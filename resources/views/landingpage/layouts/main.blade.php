<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT i-Trust Data Teknologi</title>
    <link rel="icon" href="../img/itrust_icon.ico" />

    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/slider.css" rel="stylesheet">
	<link href="../assets/css/newsevent.css" rel="stylesheet">
	<link href="../assets/css/contactus.css" rel="stylesheet">
	<link href="../assets/css/whyidt.css" rel="stylesheet">
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

	<style>
	.contact-button {
		position: fixed;
		bottom: 20px;
		right: 20px;
		/* background-color: #EC2D7C; */
		background-color: #FFD4F5;
		color: #EC2D7C;
		border: none;
		border-radius: 50px;
		padding: 15px 20px;
		font-size: 16px;
		cursor: pointer;
		/* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
		align-items: center;
		transition: background-color 0.3s ease, transform 0.3s ease;
		display: flex;
		flex-direction: column;
	}
	.contact-button:hover {
		color: #EC2D7C;
		background-color: #FFD4F5;
		transform: scale(1.1);
	}
	.contact-button i {
		margin-right: 10px;
		transition: transform 0.3s ease;
	}
	.contact-button:hover i {
		color: #EC2D7C;
		transform: rotate(-20deg);
	}
	</style>
</head>
<body>
  
  @include('landingpage.partials.header')
  {{-- @include('landingpage.partials.hero')   --}}
  {{-- @include('landingpage.sectionnews') --}}
  {{-- @include('landingpage.solutions') --}}

  <main id="main">
  <div>
    @yield('container')
  </div>
 
  </main>

  <a class="contact-button" href="<?php echo "https://api.whatsapp.com/send?phone=&text=Halo"; ?>" target="_blank" rel="noopener noreferrer" class = "ahref_costum" >
	{{-- <img src="../assets/img/callcenter2.png" alt="" style="width: 70px; mb-3"> --}}
	<div>

		<i class="fas fa-phone"></i>	
		Chat with US! 
	</div>
	</a>

	@include('landingpage.partials.footer')

 
	<!------------------------------------------------------------------------------------------------->
	<!-- JAVA SCRIPT / BOOTSTRAP / ETC -->
	<!-- Vendor JS Files -->
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="../assets/vendor/aos/aos.js"></script>
	<script src="../assets/vendor/php-email-form/validate.js"></script>
	<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="../assets/vendor/purecounter/purecounter.js"></script>
	<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>
	<!------------------------------------------------------------------------------------------------->

	<!-- Swiper JS -->
	<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

	<script>

	function slideSlider(){
		$("#slider-scroller").css({"left":"0%","transition":"all 0s linear"});
		$("#slider-scroller").css({"left": String(parseInt($("#slider-scroller").css("left")) - 500) + "px","transition":"all 5s linear"});
		setTimeout(function(){moveSliderItem()}, 2635);
	}

	function slideSliderClient(){
		$("#slider-scroller-client").css({"left":"0%","transition":"all 0s linear"});
		$("#slider-scroller-client").css({"left": String(parseInt($("#slider-scroller-client").css("left")) - 500) + "px","transition":"all 5s linear"});
		setTimeout(function(){moveSliderItemClient()}, 2635);
	}


	function moveSliderItem(){
		$("#slider-scroller div").first().detach().appendTo($("#slider-scroller"));
		slideSlider();
	}

	function moveSliderItemClient(){
		$("#slider-scroller-client div").first().detach().appendTo($("#slider-scroller-client"));
		slideSliderClient();
	}

	slideSlider();
	slideSliderClient();
			
	var swiper = new Swiper(".slide-content", {
		slidesPerView: 3,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
		el: ".swiper-pagination",
		clickable: true,
		dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 3,
			}
		},
	});

	</script>
</body>
</html>