<!DOCTYPE html>
<html>
<head><title>Kelompok Pustaka</title>
</head>
<body>
<form name="frmkriteria" method="post" action="">
Nama Kelompok :<br>
<input type="text" name="txtkelompok">
<input type="submit" value="Simpan" name="bSimpan">
<input type="submit" value="Cari" name="bCari">
</form>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])){
	$namakelompok=$_POST['txtkelompok'];
	$sql="insert into kelompokpustaka (namakelompok)
	      values ('".$namakelompok."');";
	$koneksi=mysqli_connect("localhost","root","","pustakac45");	
	$q=mysqli_query($koneksi,$sql);
	if ($q) {
		echo "<script>alert('Rekord sudah disimpan');</script>";
	} else {
		echo "<script>alert('Rekord tidak  tersimpan');</script>";
	}
}
?>