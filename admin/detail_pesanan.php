<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
?>
<!DOCTYPE html>
<html>
<?php include "head.php"; ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Administrator
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['fullname']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/user.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $_SESSION['fullname']; ?>
                                    
                                    </p>
                                </li>
                                <?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                
                                    <div class="pull-right">
                                        <a href="../logout.php" class="btn btn-default btn-flat" onclick="return confirm ('Apakah Anda Akan Keluar.?');"> Keluar </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <div class="pull-left info">
                            <p>Selamat Datang,<br /><?php echo $_SESSION['fullname']; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <?php include "menu.php"; ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Pesanan
                        <small>Administrator</small>
                    </h1>
             <?php
            
			?>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Pesanan</a></li>
                        <li class="active">Detail Pesanan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Data Produk </h3> 
                        </div>
                        <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE id_kon='$_GET[kd]'");
                    $data  = mysqli_fetch_array($query);
                    $query1 = mysqli_query($koneksi, "SELECT konfirmasi.id_kon, konfirmasi.kd_cus, customer.nama_cus, customer.alamat, customer.no_telp, konfirmasi.bayar_via, konfirmasi.tanggal, konfirmasi.jumlah, konfirmasi.rekening, konfirmasi.bukti_transfer, konfirmasi.status FROM konfirmasi JOIN customer ON konfirmasi.kd_cus = customer.kd_cus  WHERE id_kon='$_GET[kd]'");
                    $data1  = mysqli_fetch_array($query1);
                    $bayar_via = $data1['bayar_via'];
                    ?>
                                <!-- </div> -->
                                <div class="panel-body">
                      <table id="example" class="table table-hover table-bordered">
                    <tr>
                    <td>Nomor Pesanan</td>
                    <td><?php echo $data1['id_kon']; ?></td>
                    </tr>
                    <tr>
                    <td>Kode Customer</td>
                    <td><?php echo $data1['kd_cus']; ?></td>
                    </tr>
                    <tr>
                    <td>Nama Customer</td>
                    <td><?php echo $data1['nama_cus']; ?></td>
                    </tr>
                    <tr>
                    <td>Alamat Customer</td>
                    <td><?php echo $data1['alamat']; ?></td>
                    </tr>
                    <tr>
                    <td>Nomor Telepon Customer</td>
                    <td><?php echo $data1['no_telp']; ?></td>
                    </tr>
                    <tr>
                    <td>Bayar Via</td>
                    <td><?php echo $data1['bayar_via']; ?></td>
                    </tr>
                    <tr>
                    <td>Tanggal Pemesanan</td>
                    <td><?php echo $data1['tanggal']; ?></td>
                    </tr>
                    <tr>
                    <td>Total Harga</td>
                    <td>Rp <?php echo number_format($data1['jumlah'],2,",",".");?></td>
                    </tr>
                    <tr>
                    <td>Status Pemesanan</td>
                    <td><?php
                            if($data1['status'] == 'Selesai'){
								echo '<span class="label label-success">Pesanan Sudah Selesai</span>';
                                
							}else if ($data1['status'] == 'Kirim' ){
								echo '<span class="label label-primary">Pesanan Sedang Di Kirim</span>';

							}else if ($data1['status'] == 'Proses' ){
                                echo '<span class="label label-warning">Pesanan Sedang Di proses</span>';

                            } else {
                                echo '<span class="label label-danger">Pesanan Belum Di Bayar</span>';
                            }
                    ?></td>
                    </tr>
                    <?php if($bayar_via =='Payment Online'){ ?>
                    <tr>
                    <td>Rekening</td>
                    <td><?php echo $data1['rekening']; ?></td>
                    </tr>
                    <tr>
                    <td>Bukti Transfer</td>
                    <td><img src="../customer/<?php echo $data1['bukti_transfer']; ?>" alt=""></td>
                    </tr>
                    <?php } ?>
                   </table>
                        

                <?php 
				if(isset($_POST['proses'])){
				$sql = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE id_kon='$_GET[kd]'");
				$data = mysqli_fetch_array($sql);
				$id = $data['id_kon'];
                $status = "Proses";
				
				$update = mysqli_query($koneksi, "UPDATE konfirmasi SET status ='$status' WHERE id_kon='$id'") or die(mysqli_error($koneksi));	
                    if($update){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Status berhasil Diubah.</div> <meta http-equiv="refresh" content="2; url= pesanan.php"/>';
                    }else{
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ubah Status Gagal, silahkan coba lagi.</div>';
				    }
			}else if(isset($_POST['selesai'])){
				$sql1 = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE id_kon='$_GET[kd]'");
				$data1 = mysqli_fetch_array($sql1);
				$id1 = $data['id_kon'];
                $status1 = "Selesai";
				
				$update1 = mysqli_query($koneksi, "UPDATE konfirmasi SET status ='$status1' WHERE id_kon='$id1'") or die(mysqli_error($koneksi));	
                    if($update1){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Status berhasil Diubah.</div> <meta http-equiv="refresh" content="2; url= pesanan.php"/>';
                    }else{
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
                    }
                }else if(isset($_POST['kirim'])){
                    $sql1 = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE id_kon='$_GET[kd]'");
                    $data1 = mysqli_fetch_array($sql1);
                    $id1 = $data['id_kon'];
                    $status1 = "Kirim";
                    
                    $update1 = mysqli_query($koneksi, "UPDATE konfirmasi SET status ='$status1' WHERE id_kon='$id1'") or die(mysqli_error($koneksi));	
                        if($update1){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Status berhasil Diubah.</div> <meta http-equiv="refresh" content="2; url= pesanan.php"/>';
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
                        }
                    }
					
				?>
                
                  
                <div class="text-right">
                <form method="post" action="">
					<input class="btn btn-primary" type="submit" name = "proses" value="Proses Pesanan"/>
					<input class="btn btn-info" type="submit" name = "kirim" value="Pengiriman Pesanan"/>
					<input class="btn btn-success" type="submit" name = "selesai" value="Pesanan Selesai"/>
                    <a href="pesanan.php" class="btn btn-warning"> Kembali </a>
				</form>
                
                </div>  
                                </div> 
              </div>
            </div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <script src="../dist/jquery.js"></script>
        <script src="../dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery-ui.core.js" type="text/javascript"></script>
        
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="../js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>
        
    </body>
</html>
