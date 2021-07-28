<!DOCTYPE html>
<html>
<head>
	<title>Hitung</title>
</head>
	<style>
		* {
			font-family:"times new roman",sans-sherif;
		}
		body{
			margin: 0;
			padding: 0;
			background-image: url(bg/p.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;

		}
		#header{
			font-family: sans-serif;
			font-size: medium;
			background-color: white;
			border-radius: 20px;
		}
		#konten{
			background: linear-gradient(#87CEFA,#FFFACD);
			border-radius: 11px;
			box-shadow: 2px 3px 9px rgba(0, 0, 0, 2.5);
			height: 900px;
			margin: 1rem auto 3.1rem auto;
			width: 900px;
		}
		.ngecek{
			background: linear-gradient(#f29b30,#7FFF00);
			border: none;
			border-radius: 12px;
			padding: 11px;
			width: 150px;
			align-items: center;
			font-size: medium;
		}
   		 textarea{
            border-radius: 20px;
            font-family: sans-serif;
            font-size: 12pt;
    	}
    
		

	</style>
<body>
	<div id="konten">
	<center>
		<div id="header">
			<br>
		<img src="bg/logo.png" height="100" width="100">	
		<h1>Menghitung Volume Bangun Ruang </h1>
		</p>
		</div>

		<form action="" method="post">
			<table>
		<tr><td>
			Masukan Rusuk : <input type="text" name="koif"><br>
		</td></tr>
		<tr><td>
			Masukan panjang: <input type="text" name="benda"><br>
		</td></tr>
		<tr><td>
			Masukan Lebar : <input type="text" name="delta"><br>
		</td></tr>
		<tr><td>
			Masukan jejari/tinggi : <input type="text" name="panjang"><br>
		</td></tr>
		
		
		</table>
		<input class="ngecek" type="Submit" name="submit" value="Menghitung">
	</form>

	<?php
		$koif=$_POST['koif'];
		$benda=$_POST['benda'];
		$delta=$_POST['delta'];
		$panjang=$_POST['panjang'];

		$hasil_hitung= $koif*$benda*$delta*$panjang;

		echo "Hasil Perhitungan : = $hasil_hitung <br>";

		echo ("<br><br>Tanggal dibuat : ");
		ini_set('date.timezone','Asia/Jakarta');
		echo date('l, d-m-Y, G:i:s a ');
		echo ("Waktu Setempat");

		?>
	</center>
	</div>
	</body>
</html>