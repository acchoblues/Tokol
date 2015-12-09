 <?php
 require_once("cart.php");
include "koneksi.php";
        $bayar           = abs((int)$_GET['total']);
        $nm_usr          = $_POST['nm_usr'];
        $log_usr		 = $_POST['log_usr'];
        $pas_usr 	     = $_POST['pas_usr'];
        $email_usr	     = $_POST['email_usr'];
        $almt_usr 	     = $_POST['almt_usr'];
        $kp_usr          = $_POST['kp_usr'];
        $kota_usr        = $_POST['kota_usr'];
        $tlp             = $_POST['tlp'];
        $rek             = $_POST['rek'];
        $nmrek           = $_POST['nmrek'];
        $bank            = $_POST['bank'];

$query = mysql_query("INSERT INTO user (nm_usr, log_usr, pas_usr, email_usr, almt_usr, kp_usr, kota_usr, tlp, rek, nmrek, bank) 
VALUES ('$nm_usr', '$log_usr', '$pas_usr', '$email_usr', '$almt_usr', '$kp_usr', '$kota_usr', '$tlp', '$rek', '$nmrek', '$bank')");
if ($query){
	echo "<script>alert('Anda berhasil checkout, Silahkan lakukan pembayaran Rp. $bayar; '); window.location = 'selesai.php'</script>";	
} else {
	echo "<script>alert('Anda gagal checkout, silahkan ulangi!'); window.location = 'checkout.php'</script>";	
}
?>