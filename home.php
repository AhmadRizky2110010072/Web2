<?php

session_start();
if ($_SESSION['username']!='' and $_SESSION['level']!='') {
	echo "Koneksi berhasil<br/>";
	echo "Selamat Datang  ". $_SESSION['username']." Level ".$_SESSION['level'];
	echo "<br/><br><a href='logout.php'><button>Logout</button></a>";
}else{
	echo "Anda tidak diperbolehkan mengakses halaman ini.";
	echo'<meta http-equiv="refresh" content="3;url=index.php">';
}
?>