<?php

include "../conn.php";

		if (isset($_POST['submit'])){
			$user_id = $_POST['user_id'];
			$username= $_POST['username'];
			$password1=$_POST['password'];
			$password=sha1($password1);
			$fullname=$_POST['fullname'];
				
				
				$tambah = mysqli_query($koneksi, "INSERT INTO user(user_id,username,password,fullname) VALUES
				('$user_id','$username','$password','$fullname') ") or die(mysqli_error($koneksi));
				if($tambah){
					echo "<script>alert('Data Admin berhasil dimasukan!'); window.location = 'admin.php'</script>";
				}else{
					echo "<script>alert('Data Admin gagal dimasukan!')";
				}
			}

?>