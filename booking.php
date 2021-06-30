<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap">
	<style>
		.warper{
		    background-color: skyblue;
		    background: rgba(4, 29, 23, 0.5);
			text-align: center;
			height: 70px;
			width: 200px;
			border: 1px solid gray;
			box-shadow: 0px 0px 20px 5px #00B4FF;
			float: right;
			margin-top: 20px;
		 	margin-right: 20px;
		}

		.h1a{
			background-color: seagreen;
			background: rgba(4, 29, 23, 0.5);
			margin-left: 0px;
			margin-bottom: 3px;
			color: white;
			border-bottom: 2px solid white;
		}

	</style>
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				<h4><?php echo "Dara Audia"; ?></h4>
			</div>

			<ul>
				<li><a href="home.php"><?php echo "Home"; ?></a></li>
				<li><a href="booking.php"><?php echo "Booking"; ?></a></li>
				<li><a href="about.php"><?php echo "About"; ?></a></li>
				<li><a href="bukutamu.php">Buku Tamu</a></li>
				<li><a onclick="logout()"><?php echo "Logout"; ?></a></li>
			</ul>
		</nav>
	</header>
	<div class="hitcounter">
      <div class="warper">
        <h1 class="h1a">Visit Count</h1>
        <div class="data">
          <?php

              $filecounter = "counter.txt";
              $fi=fopen($filecounter, "r+");

              $hit = fread($fi, filesize($filecounter));

              echo("<h3>$hit</h3>");

              fclose($fi);

              $fi = fopen($filecounter, "w+");

              $hit = $hit+1;

              fwrite($fi,$hit,strlen($hit));

              fclose($fi);

          ?>
        </div>
      </div>
    </div>
	<main>
	<div class="container">
		<article class="cardd">
			<table border="1">
				<tr>
					<td colspan="3" align="center" width="1000px"><?php echo "Daftar Barang Dan Harga"; ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo "Nama Barang"; ?></td>
					<td><?php echo ":"; ?></td>
					<td align="center"><?php echo "Harga"; ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo "CPU"; ?></td>
					<td><?php echo ":" ?></td>
					<td align="center"><?php echo "5000000"; ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo "Monitor"; ?></td>
					<td><?php echo ":" ?></td>
					<td align="center"><?php echo "3000000"; ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo "Keyboard"; ?></td>
					<td><?php echo ":"; ?></td>
					<td align="center">500000</td>
				</tr>
				<tr>
					<td align="center">RAM</td>
					<td>:</td>
					<td align="center">500000</td>
				</tr>
				<tr>
					<td align="center">SSD</td>
					<td>:</td>
					<td align="center">1500000</td>
				</tr>
				<tr>
					<td align="center">Hardisk</td>
					<td>:</td>
					<td align="center">2000000</td>
				</tr>
				<tr>
					<td align="center">Mouse</td>
					<td>:</td>
					<td align="center">300000</td>
				</tr>
				<tr>
					<td align="center">Komputer</td>
					<td>:</td>
					<td align="center">25000000</td>
				</tr>
			</table>
		</article>		
		<article class="cardd">
			<form name="fform">
				<section>
					<table align="center">
						<tr>
							<td colspan="2" align="center" width="1000px">Menu Pemesanan</td>
						</tr>
						<tr>
							<td align="center">
								Nama Pemesan <br>
								<input type="text" name="inama" placeholder="Masukkan Nama"><br>
								Barang <br>
								<select name="ipesan">
								<option value="">Pilih Barang</option>
								<option value="CPU">CPU</option>
								<option value="Monitor">Monitor</option>
								<option value="Keyboard">Keyboard</option>
								<option value="RAM">RAM</option>
								<option value="SSD">SSD</option>
								<option value="Hardisk">Hardisk</option>
								<option value="Mouse">Mouse</option>
								<option value="Komputer">Komputer Satu Paket</option>
							 	</select><br>
							 	Jumlah Barang <br>
								<input type="text" name="ijumlah" placeholder="Masukkan Jumlah Barang"><br>
							</td>
							<td align="center">
								Nama Barang <br>
								<input type="text" name="opesan">
								<br>Harga Barang<br>
								<input type="text" name="oharga">
								<br>Jumlah Barang<br>
								<input type="text" name="ojml">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" style="padding-top: 20px">Total Harga <input type="text" name="ototal"></td>
						</tr>
						<tr>
							<td align="center">
								<input type="button" name="Hitung" value="hitung" onclick="hitungbarang()" id="submitbtn">
							</td>
							<td align="center">
								<input type="reset" name="reset" id="resetbtn">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="button" name="Pesan" value="pesan" onclick="pesanbarang()" id="submitbtn">
							</td>
						</tr>
					</table>
				</section>
			</form>
		</article>
		</div>
	</main>
	<div class="footer" align="center">
    	<p>Copy Right @dara.audia</p>
    </div>
    <script src="script.js"></script>
</body>
</html>
