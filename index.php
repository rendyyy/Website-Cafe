<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>
    
	<?php include "header.php"; ?>
	
	<div class="container">

	</div>
			
	<!--start: Wrapper-->
	<div id="wrapper">
        
		<!--start: Container -->
    	<div class="container">
			<div class="row">
                <div class="span6">
                    <h1 class="text-home">
                        We Serve <br><br> Delicious Foods !
                    </h1>
                    <a class="btn-head btn-shadow btn-lg" href="makanan.php" role="button">Explore Menu</a>

					
                </div>
            
                <div class="span6" style="margin: 30px 0 30px 0;">
					<div class="owl-carousel owl-theme hero-carousel">
                            <div class="item">
                                <img class="img-fluid" src="img/home/smoothie1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/home/waffle.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/home/chicken.jpg" alt="">
                            </div>
                	</div>
            	</div>
			</div>
		</div>

		<div class="boxed-page">
			<div class="container">
				<div class="row" >
					<div class="span6" style="margin: 30px 0 150px 0;">
						<img src="img/home/beku1.jpg" alt="">
					</div>

					<div class="span5 offset1">
						<h5 class="subheading">About</h5>
						<h1 class="text-desc">
							Welcome To Cafe Titik Beku
						</h1>
						<p style="font-size: 17px;">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, reprehenderit eveniet? Minima illum nostrum sed necessitatibus velit consequuntur eligendi similique, praesentium a, cum earum placeat! Doloribus consequuntur est rerum ipsam.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit accusamus aut vitae qui! Labore error, vero animi, repellat aliquid blanditiis modi nulla, distinctio aliquam dolor sit laboriosam impedit earum!
						</p>
					</div>
				</div>
			</div>

			<div class="container-fluid bg-grey">
				<div class="container">
				<div class="row " >
					<div class="span6" style="margin: 0 0 150px 0;" >
						<h2 class="special-number">01.</h2>
						<div class="dishes-text ">
							<h2 style="margin-bottom:30px;"><span class="subheading" >Beef</span><br> Miso Soup Ramen</h2>
							<p style="font-size: 17px;"> Ramen yang disajikan menggunakan kuah kaldu yang sangat gurih dan asin, serta diberikan toping beef, telur, sayuran dan taburan cabai & daun bawang diatas mienya yang membuat makan lebih nikmat.</p>
							<h3 class="special-dishes-price">Rp. 32.000</h3>
						</div>
					</div>
					<div class="span5 offset1">
						<img src="img/home/ramen.jpeg" alt="" class="img-fluid shadow w-100">	
					</div>
				</div>

				<div class="row" >
					<div class="span6" style="margin: 0 0 150px 0;">
						<img src="img/home/spaghetti.png" alt="" class="img-fluid shadow w-100">	
					</div>

					<div class="span5 offset1">
						<h2 class="special-number">02.</h2>
						<div class="dishes-text">
							<h2 style="margin-bottom:30px;"><span class="subheading">Spaghetti</span><br> Aglio Olio Smoked Ham</h2>
                            <p style="font-size: 17px;">Spaghetti yang disajikan dengan toping smoked ham akan membuatcipta rasa yang semakin enak untuk dimakan serta irisan cabai yang menjaditaburan akan membuat makanan semakin nikmat.</p>
                            <h3 class="special-dishes-price">Rp. 35.000</h3>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
			

			<div class="container">

				<div class="row">
            
                <div class="span6 " style="margin-left: -5px; margin-bottom:100px; margin-top:100px;" >
					<div class="owl-carousel owl-theme hero-carousel">
                            <div class="item">
                                <img class="img-fluid" src="img/home/smoothie1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/home/waffle.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/home/chicken.jpg" alt="">
                            </div>
                	</div>
            	</div>
				
				<div class="span5 offset1">
					<h5 class="subheading" style="padding-top: 175px;">Facility</h5>
						<h1 class="text-desc">
							at Cafe Titik Beku
						</h1>
						<p style="font-size: 17px;"> 
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, reprehenderit eveniet? Minima illum nostrum sed necessitatibus velit consequuntur eligendi similique, praesentium a, cum earum placeat! Doloribus consequuntur est rerum ipsam.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit accusamus aut vitae qui! Labore error, vero animi, repellat aliquid blanditiis modi nulla, distinctio aliquam dolor sit laboriosam impedit earum!
						</p>
                </div>

			</div>
						
			</div>

			<!-- Testimonial Section-->
			<div class="boxed-page">
			<section id="gtco-testimonial" class="overlay bg-fixed section-padding"
            style="background-image: url(img/home/Cover.jpg);">
            <div class="container">
                <div class="section-content">
                    <div class="row text-center">
                        <span class="subheading" >
                            Testimoni
                        </span>
                        <h2 style="color: white;">
                            Happy Customer
                        </h2>
                    </div>

                    <div class="row">
                        <!-- Testimonial -->
                        <div class="testi-content testi-carousel owl-carousel">
					<?php
						$testi= mysqli_query($koneksi, "SELECT * FROM customer");
						while($t = mysqli_fetch_array($testi)){
					?>
                            <div class="testi-item">
                                <p class="testi-text">"<?= $t['testi'];?>"</p>
                                <p style="font-size:20px"><?= $t['nama_cus'];?></p>
                            </div>
						<?php 
							}
						?>
                        </div>
                        <!-- End of Testimonial -->
                    </div>
                </div>
            </div>
        </section>
		</div>
        <!-- End of Testimonial Section-->
		
			
			<hr>
			
			<div class="container">
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
		
	<a href="https://api.whatsapp.com/send?phone=6281213978837" target="blank">
		<button class="btn-floating whatsapp">
			<img src="img/icons/social_big/whatsapp-white.png" alt="whatsapp" class="img-floating">
			<span class="text-floating">Whatsapp</span>
		</button>
	</a>

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
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>

<script src="js/app.min.js "></script>

<script src="vendor/owlcarousel/owl.carousel.min.js"></script>

<script src="js/app.min.js "></script>
<!-- end: Java Script -->

</body>
</html>