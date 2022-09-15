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
<?php include "head.php"; ?>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-book-open ico-white"></i>Buku Tamu</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">

		<?php
            $query = mysqli_query($koneksi, "SELECT * FROM customer WHERE username = '$_SESSION[username]' ");
            $data  = mysqli_fetch_array($query);


			if (isset($_POST['ubah'])){
				$testi	= $_POST['testi'];
				
				
				$update = mysqli_query($koneksi, "UPDATE customer SET testi='$testi' WHERE testi='' ") or die(mysqli_error($koneksi));
				if($update){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
        ?>
				
		<!--start: Container -->
    	<div class="container"> 
        <center><div class="title" ><h3>Isi Testimonial</h3></div></center>
            <form id="formku" method="post" action="testimoni.php" onsubmit="return formCheck(this);">
<table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
<tr>
<td width="150">Nama</td>
<td width="30">:</td>
<td width="550"><input type="text" name="nama" size="30" class="required" minlength="3" placeholder= <?php echo $data['nama_cus']; ?> disabled/></td>
</tr>
<tr>
<td width="150">Komentar</td>
<td width="30">:</td>
<td width="550"><input type="text" name="testi" size="30" class="required" minlength="3" placeholder="Komentar Anda " /></td>
</tr>
<tr>
<td width="150"></td>
<td width="30"></td>
<td width="550">
<input class="button" type="submit" name = "ubah" value="Kirim"/>
</td>
</tr>
</table>
</form>
</div>


    	<div class="container">	
      		
			<hr>
		
		
					
		</div>
		<!--end: Container-->	

	</div>
	<!-- end: Wrapper  -->			

    <?php include "footer-menu.php";?>

	<?php include "footer.php"; ?>


<!-- end: Java Script -->
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