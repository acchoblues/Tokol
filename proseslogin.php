<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysql_query("SELECT COUNT(username) AS jumlah FROM admin 
                    WHERE username='$username' AND password='$password'");
$data = mysql_fetch_array($query);

if ($data['jumlah'] >= 1){
	session_start();
	$_SESSION['username']    = $username;
    //$_SESSION['password']    = $password;

	echo "<script>alert('Selamat datang $username'); window.location = 'admin/tambah.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'index.html'</script>";	
}
?>