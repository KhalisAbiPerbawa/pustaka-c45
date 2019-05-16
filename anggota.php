<!DOCTYPE html>
<html>
<head><title>Table Anggota</title>
</head>
<body>
<form name="frmkriteria" method="post" action="">
Nama Anggota :<br>
<input type="text" name="txtAnggota">
<input type="submit" value="Simpan" name="bSimpan">
<input type="submit" value="Cari" name="bCari">
</form>
</body>
</html>

<?php if (isset($_POST['bSimpan'])) {
  $NamaAnggota=$_POST['namaanggota'];
  if ((empty($NamaAnggota))) exit;
  $koneksi=mysqli_connect("localhost","root","","pustakac45");
  $sql="insert into anggota (namaanggota) values('".$_POST['namaanggota']."');";
  $q=mysqli_query($koneksi,$sql);
  if ($q) {
    echo '
   <div class="boxerror">
    <h2>Penyimpaman Rekord</h2>
	<div class="message">
	 Rekord sudah tersimpan !
	</div>
   </div>
   ';
  } else {
    echo '
   <div class="boxerror">
    <h2>Penyimpaman Rekord</h2>
	<div class="message">
	 Rekord belum tersimpan !
	</div>
   </div>
   ';
  }	  
} // end if bSubmit
if (isset($_POST['bHapus'])) {
	echo "Proses Hapussss";
} //end if bHapus
if (isset($_POST['bCari'])) {
	echo "Proses Cari";
} //end if bHapus
?>