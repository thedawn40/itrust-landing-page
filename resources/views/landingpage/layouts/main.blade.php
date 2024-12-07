<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT i-Trust Data Teknologi</title>
    <link rel="icon" href="../../img/itrust_icon.ico" />

    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="../../assets/css/style.css" rel="stylesheet">
	<link href="../../assets/css/slider.css" rel="stylesheet">
	<link href="../../assets/css/newsevent.css" rel="stylesheet">
	<link href="../../assets/css/contactus.css" rel="stylesheet">
	<link href="../../assets/css/whyidt.css" rel="stylesheet">
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

	<link href="../../../../../assets-3/vendor/simple-datatables/style.css" rel="stylesheet">
	<link href="../../../../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">    
  
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

    .btn-pink{
        background-color: #ec2d7b; color:white; font-weight: bold;
    }

    .transparent-background {
        padding-top: 90px;
        background: 
            linear-gradient(to bottom, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 1) 100%),
            url('../../../assets/1414.jpg'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-bottom: 50px;
    }

	.card-2 {
		background-color: white;
		overflow: hidden;
		text-align: justify;
		/* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
		position: relative;
		border: 1px solid rgb(239, 239, 239);
		border-radius: 8px;
	}

	.card-2 a {
		color:#ec2d7b;
	}

	.card-2 a:hover {
		color:#c32567;
	}

	.card-2:hover {
		box-shadow: 0 8px 8px rgba(137, 137, 137, 0.2);
	}

	tbody, td, tfoot, th, thead, tr {
    border-color: inherit;
    /* border-style: solid; */
    border-width: 0;
	border-color: white;
}
	</style>
</head>
<body>
  
  @include('landingpage.partials.header')
  
  <main id="main">
  <div>
    @yield('container')
  </div>
 
  </main>

   <a class="contact-button" href="<?php echo "https://api.whatsapp.com/send?phone=&text=Halo saya memiliki pertanyaan"; ?>" target="_blank" rel="noopener noreferrer" class = "ahref_costum" >
	<div>

		<i class="fas fa-phone"></i>	
		Chat with US! 
	</div>
	</a> 

	@include('landingpage.partials.footer')

 
	<!------------------------------------------------------------------------------------------------->
	<!-- JAVA SCRIPT / BOOTSTRAP / ETC -->
	<!-- Vendor JS Files -->
	<script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="../../../assets/vendor/aos/aos.js"></script>
	<script src="../../../assets/vendor/php-email-form/validate.js"></script>
	<script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="../../../assets/vendor/purecounter/purecounter.js"></script>
	<script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="../../../../../assets-3/vendor/simple-datatables/simple-datatables.js"></script>
	<!-- Page level plugins -->
	<script src="../../../../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="../../../../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="../../../../../assets/js/demo/datatables-demo.js"></script>

	
	<!-- Template Main JS File -->
	<script src="../../../assets/js/main.js"></script>
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

	// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	// (function(){
	// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	// s1.async=true;
	// s1.src='https://embed.tawk.to/669bc565becc2fed69281b5c/1i387m5m0';
	// s1.charset='UTF-8';
	// s1.setAttribute('crossorigin','*');
	// s0.parentNode.insertBefore(s1,s0);
	// })();
	</script>

</body>
</html>