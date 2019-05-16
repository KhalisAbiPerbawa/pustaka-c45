<!DOCTYPE html>
<html>
 <head>
  <title>Manajemen Tabel Pengguna</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 
  <div class="box">
   <h2>Input Pengguna Baru</h2>
    <form method="post" name="formlogin">
	 <div class="inputBox">
	  <input type="text" required="" name="username" autocomplete="off">
	  <label>Username</label>
	 </div>
	 <div class="inputBox">
	  <input type="password" required="" name="password">
	  <label>Password</label>
	 </div>

	 </div>
	 <input type="submit" value="Submit" name="bSubmit">&nbsp;
	 <input type="submit" value="Hapus" name="bHapus" onclick="return confirm('Yakin mau dihapus ?');">&nbsp;
	</form>
  </div>
 </body>
</html>
<?php if (isset($_POST['bSubmit'])) {
  $Username=$_POST['username'];
  $Password=$_POST['password'];
  if ((empty($Username)) OR (empty($Password))) exit;
  $koneksi=mysqli_connect("localhost","root","","pustakac45");
  $sql="insert into pengguna (username,password) values('".$_POST['username']."','".$_POST['password']."');";
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