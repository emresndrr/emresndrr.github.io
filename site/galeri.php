<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<title>Galeri</title>
<style type="text/css">
body {
	background-color: #343434;
}
</style>
<link href="stil.css" rel="stylesheet" type="text/css" />

<script language="javascript">
 
$(document).ready(function(){
 
$("#button1").click(function(){
    $("#resim1").fadeIn();
    $("#resim2, #resim3, #resim4, #resim5, #resim6, #resim7, #resim8, #resim9, #resim10").hide();
});

$("#button2").click(function(){//
    $("#resim2").fadeIn();
    $("#resim1, #resim3, #resim4, #resim5, #resim6, #resim7, #resim8, #resim9, #resim10").hide();
});

$("#button3").click(function(){
    $("#resim3").fadeIn();
    $("#resim1, #resim2, #resim4, #resim5, #resim6, #resim7, #resim8, #resim9, #resim10").hide();
});

$("#button4").click(function(){
    $("#resim4").fadeIn();
    $("#resim1, #resim2, #resim3, #resim5, #resim6, #resim7, #resim8, #resim9, #resim10").hide();
});

$("#button5").click(function(){
    $("#resim5").fadeIn();
    $("#resim1, #resim2, #resim3, #resim4, #resim6, #resim7, #resim8, #resim9, #resim10").hide();
});

$("#button6").click(function(){
    $("#resim6").fadeIn();
    $("#resim1, #resim2, #resim3, #resim4, #resim5, #resim7, #resim8, #resim9, #resim10").hide();
});

$("#button7").click(function(){
    $("#resim7").fadeIn();
    $("#resim1, #resim2, #resim3, #resim4, #resim5, #resim6, #resim8, #resim9, #resim10").hide();
});

$("#button8").click(function(){
    $("#resim8").fadeIn();
    $("#resim1, #resim2, #resim3, #resim4, #resim5, #resim6, #resim7, #resim9, #resim10").hide();
});

$("#button9").click(function(){
    $("#resim9").fadeIn();
    $("#resim1, #resim2, #resim3, #resim4, #resim5, #resim6, #resim7, #resim8, #resim10").hide();
});

$("#button10").click(function(){
    $("#resim10").fadeIn();
    $("#resim2, #resim3, #resim4, #resim5, #resim6, #resim7, #resim8, #resim9, #resim1").hide();
});
 
});
</script>

<style type="text/css">
#slideShow{ 
	width:150px;
	height:350px; 
	margin:0px; 
	padding:0px;}

#resim10,#resim9, #resim8, #resim7, #resim6, #resim5, #resim4, #resim3, #resim2{display:none;
}

#butonlar{
	position:relative;
	bottom:60px;
	width:458px;
	margin:0px auto;
	}
#slideShow img{	
	cursor:pointer;
	margin:0px;}

</style>
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
      <div id="ilk"><img src="sliderImages/1.jpeg" width="170" height="100" border="0" usemap="#Map" />
        <map name="Map" id="Map">
          
        </map>
      </div>
    <div id="orta"><img src="sliderImages/1.jpeg" width="170" height="100" border="0" usemap="#Map2" />
      <map name="Map2" id="Map2">
        
      </map>
    </div>
    <div id="alt"><img src="sliderImages/1.jpeg" width="170" height="100" border="0" usemap="#Map3" />
      <map name="Map3" id="Map3">
        
      </map>
    </div>
</div>
    <div class="solsidebar"><img src="sliderImages/1.jpeg" width="150" height="450" /></div>
    <div id="icerikrenk">
      <div id="resimalan">
      <div id="slideShow">
<img src="sliderImages/1.jpeg" width="460px" height="390px" id="resim1"  />
<img src="sliderImages/2.jpeg" width="460px" height="390px" id="resim2"  />
<img src="sliderImages/3.jpeg" width="460px" height="390px" id="resim3"  />
<img src="sliderImages/4.jpeg" width="460px" height="390px" id="resim4" />
<img src="sliderImages/5.jpeg" width="460px" height="390px" id="resim5" />
<img src="sliderImages/6.jpeg" width="460px" height="390px" id="resim6" />
<img src="sliderImages/7.jpeg" width="460px" height="390px" id="resim7" />
<img src="sliderImages/8.jpeg" width="460px" height="390px" id="resim8" />
<img src="sliderImages/9.jpeg" width="460px" height="390px" id="resim9" />
<img src="sliderImages/10.jpeg" width="460px" height="390px" id="resim10" />

<div id="butonlar">
<img src="sliderImages/buton.png" id="button1" />
<img src="sliderImages/buton.png" id="button2" />
<img src="sliderImages/buton.png" id="button3" />
<img src="sliderImages/buton.png" id="button4" />
<img src="sliderImages/buton.png" id="button5" />
<img src="sliderImages/buton.png" id="button6" />
<img src="sliderImages/buton.png" id="button7" />
<img src="sliderImages/buton.png" id="button8" />
<img src="sliderImages/buton.png" id="button9" />
<img src="sliderImages/buton.png" id="button10" />
</div>
</div>
    </div>
</div>
  </div>
  <div id="footer">Resimler Son</div>
</div>
</body>
</html>
