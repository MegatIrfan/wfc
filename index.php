<?php
phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Platform Kad Digital | By Megat Irfan">
    <meta name="author" content="Megat Irfan">
    <meta name="keywords" content="platform, kad digital, whitefilms">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="canonical" href="wfcard.com">
    <title>Platform Kad Digital | WhiteFilms</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style_wedding.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-R/iQ+qmsXBqSTSpFAv8XF1Q/lP/leXv0V2gszGf8DizK6eF6b9TB0L7Ylxx6s6Ss" crossorigin="anonymous">


    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-lg-6 background-image p-0" data-background="url(img/main_img_1.jpg)">
	            <div class="content-left-wrapper opacity-mask d-flex align-items-center text-center justify-content-center" data-opacity-mask="rgba(0, 0, 0, 0.05)">
	                <a href="#0" id="logo"><img src="img/logo (2).png" alt="" width="20%" height="20%"></a>
	                <div class="social">
	                    <ul>
						<li><a href="https://www.facebook.com/profile.php?id=100002512391845"><i class="bi bi-facebook"></i></a></li>
				            
				            <li><a href="https://www.instagram.com/irfanncc_/"><i class="bi bi-instagram"></i></a></li>
	                    </ul>
	                </div>
					<br>
	                <!-- /social -->
	                <div>
	                    <h1><small>Selamat Datang</small>PLATFORM KAD DIGITAL <em><img src="img/logo (2).png"></em></h1>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

						<div class="countdown" style="text-align: left;">
							<h6>Pelbagai Pilihan Untuk Majlis Perkahwinan Anda</h6>
							<ul style="list-style: none; padding-left: 0;">
								<li><i class="fa fa-check me-2" style="color: green;"></i> Siap Dalam Masa 5 Minit.</li>
								<li><i class="fa fa-check me-2" style="color: green;"></i> Boleh Edit Bila-Bila Masa.</li>
								<li><i class="fa fa-check me-2" style="color: green;"></i> Boleh Tukar Design Ikut Kesesuaian Majlis. (Akan Datang)</li>
								<li><i class="fa fa-check me-2" style="color: green;"></i> Siap Dengan Skrip Dan Terus Hantar Ke WhatsApp. (Akan Datang)</li>
							</ul>
						</div>
						<br><br>
	                    <p> <a href="#panel_info" class="btn_info">Ciri-Ciri Menarik</a></p>
	                </div>
	                <a class="smoothscroll btn_scroll_to Bounce infinite" href="#wizard_container"><i class="bi bi-arrow-down-short"></i></a>
	            </div>
	        </div>
	        <div class="col-lg-6 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                        <div id="wizard_container">
	                            <div id="top-wizard">
	                                <span id="location"></span>
	                                <div id="progressbar"></div>
	                            </div>
	                            <!-- /top-wizard -->
	                            <form id="wrapped" method="POST" action="preview.php">
	                                <input id="website" name="website" type="text" value="">
	                                <!-- Leave for security protection, read docs for details -->
	                                <div id="middle-wizard">
	                                    <div class="step">
	                                        <h3 class="main_question">Sila Isikan Butiran Anda</h3>
	                                        <div class="mb-3 form-floating">
	                                            <input type="text" name="firstname" id="firstname" class="form-control required" placeholder="First Name">
	                                            <label for="firstname">Nama Anda </label>
	                                        </div>
	                                        <div class="mb-3 form-floating">
	                                            <input type="text" name="lastname" id="lastname" class="form-control required" placeholder="Last Name">
	                                            <label for="lastname">Nama Pasangan</label>
	                                        </div>
	                                        <div class="mb-3 form-floating">
	                                            <input type="date" name="date" id="email" class="form-control required" placeholder="Your Email">
	                                            <label for="email">Tarikh Majlis</label>
	                                        </div>
										</div>
											<!--div class="form-floating mb-4" id="map">
												<input type="text" name="location" id="location" class="form-control location-input" placeholder="Your Location" autocomplete="off">
												<label for="location">Lokasi Majlis</label>
												<div id="map-container"></div>
											  </div>
											  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMvEmFUkC2kolFZeOp8ghmwAncOHV2yhQ&libraries=places"></script>

											</div-->
											
											
	                                    <!-- /step-->
	                                    
	                                    <!-- /step-->
	                                    <div class="submit step">
	                                        <div class="summary">
	                                            <div class="wrapper">
	                                                <h3>Terima Kasih !<br>Kad anda dalam proses!</h3>
	                                                <p>Sila Tekan Butang Hantar untuk proses selanjutnya...</p>
	                                            </div>
	                                            <div class="text-center">
	                                                <div class="form-group terms">
	                                                    
	                                                    </label>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- /step-->
	                                </div>
	                                <!-- /middle-wizard -->
	                                <div id="bottom-wizard">
	                                    <button type="button" name="backward" class="backward">Kembali</button>
	                                    <button type="button" name="forward" class="forward">Seterusnya</button>
	                                    <button type="submit" name="process" class="submit">Hantar</button>
	                                </div>
	                                <!-- /bottom-wizard -->
	                            </form>
	                        </div>
	                        <!-- /Wizard container -->
	                    </div>
	                </div>
	           </div>
			   <div class="container pb-4 copy">
				    <span class="float-start">©irfanncc _</span>
				    <br>
				    <div class="social mobile ">
				        <ul>
				            <li><a href="https://www.facebook.com/profile.php?id=100002512391845"><i class="bi bi-facebook"></i></a></li>
				            
				            <li><a href="https://www.instagram.com/irfanncc_/"><i class="bi bi-instagram"></i></a></li>
				        </ul>
				    </div>
				    <!-- /social -->
				</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->
	
	<nav>
		<ul class="cd-primary-nav">
			<li><a href="index.php" class="animated_link">Platform Digital</a></li>
			
		</ul>
	</nav>
	<!-- /menu -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<div class="panel" id="panel_info">
	    <div class="panel__content">
	        <a href="#" class="close_panel">
	            <i class="bi bi-x-circle"></i>
	        </a>
	        <div class="container">
	            <h2 class="mb-5">Ciri-Ciri Menarik</h2>
	            <div class="strip_info">
	                <div class="row">
						<div class="col-lg-3">
							<h3>
								<i class="bi bi-bag-check"></i> Rekaan Menarik
							</h3>
						</div>
	                    
	                    <div class="col-lg-6">
	                        <p>Pilih dari pelbagai rekaan dilengkapi dengan animasi menarik sesuai dengan tema majlis perkahwinan anda.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="strip_info">
	                <div class="row">
	                    <div class="col-lg-3"><h3>
							<i class="bi bi-check-circle-fill"></i></i> Kustomisasi Mudah</h3>
	                    </div>
	                   
	                    <div class="col-lg-6">
	                        <p>Sesuaikan kad undangan anda dengan mudah sambil melihat preview kad anda secara live.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="strip_info">
	                <div class="row">
	                    <div class="col-lg-3"><h3>
							<i class="bi bi-emoji-laughing-fill"></i> Kustomisasi Mudah</h3>
	                    </div>
	                    
	                    <div class="col-lg-6">
	                        <p>Tetamu boleh mengesahkan kehadiran mereka dengan mudah dan memberi maklum balas melalui laman RSVP yang mudah digunakan.</p>
	                    </div>
	                </div>
	            </div>

	            
	                
	                        <div class="col-md-6">
	                            <h5 class="mb-3">Hubungi</h5>
	                            <div class="list_icons">
	                                <ul>
	                                    <li><i class="bi bi-telephone"></i> +60 162748214</li>
	                                    <li><i class="bi bi-envelope"></i> <a href="mailto:megatirfan52@gmail.com">megatirfan52@gmail.com</a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /panel_info  -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Privacy data terms</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Help form Popup -->

	</div>
	<!-- /Help form Popup -->
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="phpmailer/validate.js"></script>

</body>
</html>