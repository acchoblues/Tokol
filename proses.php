<? 

$hr=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari_ini=date("w");
$hari_ini=$hr[$hari_ini];

$tgl=date("d/m/Y");
$aktif="1";
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];


$fp = fopen("guestbook.txt","a+");
fputs($fp,"$hari_ini|$tgl|$nama|$email|$komentar\n");
fclose($fp);
echo("<script>alert('Komentar anda telah berhasil ditambahkan.'); window.location = 'testimoni.php'</script>");


?>
