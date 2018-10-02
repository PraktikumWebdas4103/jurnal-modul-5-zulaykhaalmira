<form action="" method="POST">
	<center>
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" minlength="10" maxlength="10" required=""></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" maxlength="25" required=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" maxlength="30" required="" placeholder="@gmail.com"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
</center>
</form>

<?php
 	$servername = "localhost";
 	$nim = "root";
 	$nama = "";
 	$db = "jurnal";
 	$con = new mysqli($servername, $nim, $nama, $db);

 	if($con==false){
 		die("Koneksi Gagal" . $con->connect_error);
 	
 	}
 	if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$sql = "INSERT INTO regist (nim,nama,email) values ('$nim','$nama','$email')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "<center>ERROR<center>";
	}
	}
?>
