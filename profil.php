<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php";?>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Slider -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-home ico-white"></i>Profil</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>

	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main herounit for a primary marketing message or call to action -->

            <blockquote style="font-size: medium;">
            <b>Profil Kami : </b>
            <br />
            <b>Cafe Titik Beku</b> merupakan cafe yang menyediakan tempat yang nyaman dan menyediakan berbagai makanan seperti Indonesian Food, Japanese Food, Western Food, Healthy Food, dan Dessert. Selain itu menyediakan aneka minuman Coffee dan Non Coffee. Yang berlokasi di Ruko Regency Blok BF No. 20 Jl. Harapan Indah, RT.009/RW.017, Pejuang, Kecamatan Medan Satria, Kota Bks, Jawa Barat 17131
            
            
            </blockquote>
  
            
		
		
			<hr>

			<div class="container mb-5">
                <h2>Maps Cafe Titik Beku</h2>
                <div class="embed-responsive embed-responsive-21by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.612910023993!2d106.9754316145886!3d-6.182532595524077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bb9f6e63ef3%3A0x4e87b2181bf14d82!2sCafe%20Titik%20Beku!5e0!3m2!1sid!2sid!4v1648312090564!5m2!1sid!2sid" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Pengiriman Cepat</h3>
								<p>Cafe Titik Beku siap mengirim pesanan anda secara cepat.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Rasa Juara</h3>
								<p>Cafe Titik Beku memiliki cita rasa yang berbeda dari cafe lainnya, di proses higienis dan dari bahan berkualitas.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			
	<?php include "footer-menu.php";?>
    
	<?php include "footer.php"; ?>

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>