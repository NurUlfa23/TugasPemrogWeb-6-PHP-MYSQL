<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">KEMBALI</a>
	<br>
	<br>
	<h3>EDIT DATA PEGAWAI</h3>
 
	<?php
	$host = "localhost"; // Nama hostnya
	$username = "root"; // Username
	$password = ""; // Password 
	$database = "db_pegawai"; // 

	$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
	// Check Connection
	if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
		echo "Failed to connect to MySQL ". mysqli_connect_error();
	};

	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from tb_pegawai where id_pegawai='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id_pegawai']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Departemen</td>
					<td><input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>