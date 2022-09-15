<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php";?>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-usd ico-white"></i>Metode Pembayaran</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!-- start: Container -->
		<div class="container">
 
			<!-- start: Table -->
            <!-- <div class="title"><h1 class="text-center">Total Belanja :</h1></div> -->
<table class="table table-hover table-condensed">
			    <?php
         
                    $sql = mysqli_query($koneksi, "SELECT * FROM cart WHERE kd_cus='$_SESSION[user_id]'");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                    $no++; 
            ?>
            					
                         <?php
                         }
                         $sqlku = mysqli_query($koneksi, "SELECT SUM(jumlah) AS total FROM cart WHERE kd_cus='$_SESSION[user_id]'");
                         $dataku = mysqli_fetch_array($sqlku);
                         $total = $dataku['total'] + 10000;
				if($total == 0){
					echo '<tr><td colspan="5" align="center">Cart Empty!</td></tr></table>';
					echo '<p><div align="right">
						<a href="produk.php" class="btn btn-primary btn-lg">&laquo; Continue Shopping</a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #DDD;"><td colspan="6" align="right"><h1>Total Belanja:</h1></td><td align="right"><h1>Rp. '.number_format($total,2,",",".").'</h1></td></td></td><td></td></tr></table>
						<p><div align="right">
						<a href="detail.php" class="btn">&laquo; Go Back To Cart</a>
                        <a href="checkout.php?total='.$total.'" class="btn"></i> Pay Online </a>
						<a href="checkout2.php?total='.$total.'" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> Cash On Delivery (COD) &raquo;</a>
						</div></p>
					';
				}
				
					
				
				?>

</table>
			
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
	<!-- end: Wrapper  -->			

	<?php include "footer-menu.php"; ?>
	<?php include "footer.php"; ?>
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.8.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/flexslider.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/jquery.cslider.js"></script>
<script src="../js/slider.js"></script>
<script defer="defer" src="../js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>