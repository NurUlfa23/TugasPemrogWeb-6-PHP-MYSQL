<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo "kode :" . $row["kode"] . " - Negara: " . $row["negara"]. " " . $row["champion"]. "<br>";
	}
	
} else {
	echo "0 results";
}

mysqli_close($conn); // Menutup koneksi database
?>

</body>
</html>