<?php
$servername = "localhost"; // Membuat variabel servername yang menyimpan nilai "localhost"
$username = "root"; // Membuat variabel servername yang menyimpan nilai "root"
$password = ""; // Membuat variabel servername yang menyimpan nilai ""
$dbname = "db_ligabola";
// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4')";


if (mysqli_query($conn, $sql)) {
	echo "New Record Created Succesfully"; // Jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka menampilkan pesan "New Record Created Succesfully"
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); // Jika tidak akan menampilkan pesan "Error"
}

mysqli_close($conn);
?>