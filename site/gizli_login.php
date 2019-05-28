<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gizli İçerik</title>
<style type="text/css">
body {
	background-color: #343434;
}
</style>
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="sayfa">
  <div id="logo"><img src="sliderImages/1.jpeg" width="1000" height="80" /></div>
  <div id="renkicin">
    <div id="menu">
      <ul class='dd_menu'>
        <li><a href='index.php'>Anasayfa</a> </li>
        <li><a href='neden.php'>Neden Boşluktayız</a> </li>
        <li><a href='yollar.php'>Boşluktan Kurtulma Yolları</a>
        </li>
        <li><a href='psikolojik.php'>Psikolojik Olarak Boşluk</a> </li>
		<li><a href='galeri.php'>Galeri</a> </li>
		<li><a href='gizli_login.php'>Gizli İçerik</a> </li>
      </ul>
      </div>
  </div>
  <div class="icerik">
    <div id="sagilk">
      <div id="ilk"><img src="sliderImages/1.jpeg" width="170" height="100" /></div>
    <div id="orta"><img src="sliderImages/1.jpeg" width="170" height="100" /></div>
    <div id="alt"><img src="sliderImages/1.jpeg" width="170" height="100" /></div>
</div>
    <div class="solsidebar"><img src="sliderImages/1.jpeg" width="150" height="450" /></div>
    <div id="icerikrenk">
      <div id="resimalan">
	  
	  <form accept-charset="utf-8"  method="post" action="">
					<table bgcolor="#ccc" align="center">

						<tr>
						<td colspan=2><center><font size=4><b>Kullanıcı Girişi</b></font></center></td>
						</tr>

						<tr>
						<td>kullanici adi:</td>
						<td><input type="text" size=25 name="kulad"></td>
						</tr>

						<tr>
						<td>Şifre:</td>
						<td><input type="password" size=25 name="sifre"></td>
						</tr>
						

						<tr>
						<td ><input type="Reset"></td>
						<td><input type="submit" value="Gonder" name="giris_yap"></td>
						</tr>

					</table>
				</form>
		<?php
		
		if(isset($_POST['giris_yap'])){
	$kullanici_adi = $_POST['kulad'];
	$sifrem = $_POST['sifre'];
	
	
	if($kullanici_adi=="admin" and $sifrem=="admin"){
		echo "<script>window.open('gizli_sayfa.php','_self')</script>";
	}
	else {
		echo "<script>alert('Tc yada Sifre Yanlis')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	}
		?>


    </div>
</div>
  </div>
  <div id="footer">
    Gizli İçerik
  </div>
</div>
</body>
</html>
