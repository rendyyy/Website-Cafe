<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="index.php"><img src="../img/home/logo1.jpg" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li ><a href="index.php">Home</a></li>
                                    <li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="makanan.php">Menu Makanan</a></li>
			                  				<li><a href="minuman.php">Menu Minuman</a></li>
			                			</ul>
			              			</li>
			              
									<li><a href="profil.php">About Us</a></li>
									<li><a href="testimoni.php">Testimonial</a></li>
                                    <li><a href="detail.php">Cart</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: orange;"><b>Hi, <?php echo $_SESSION['username'] ?></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="index1.php">Dashboard Customer<b></b></a></li>
			                  				<li><a href="../logout.php">Logout</a></li>
			                			</ul>
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->