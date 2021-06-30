<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
		<div>
			<article class="card">
				<center><h2><?php echo "Biodata"; ?></h2></center>
				<section>
					<table>
						<tr>
							<td><?php echo "Nama"; ?></td>
							<td><?php echo ":"; ?></td>
							<td><?php echo "Dara Audia Diliano"?></td>
						</tr>
						<tr>
							<td><?php echo "NIM"; ?></td>
							<td><?php echo ":"; ?></td>
							<td><?php echo "1900018359"; ?></td>
						</tr>
						<tr>
							<td><?php echo "Alamat"; ?></td>
							<td><?php echo ":"; ?></td>
							<td><?php echo "Pekanbaru, Riau"; ?></td>
						</tr>
						<tr>
							<td><?php echo "Cita-Cita" ?></td>
							<td><?php echo ":"; ?></td>
							<td><?php echo "Web Developer"; ?></td>
						</tr>
						<tr>
							<td><?php echo "Social Media"; ?></td>
							<td><?php echo ":"; ?></td>
							<td><?php echo "@dara.audia (instagram)"; ?></td>
						</tr>
						<tr>
							<td><?php echo "Email"; ?></td>
							<td><?php echo ":"; ?></td>
							<td><?php echo "daraaudiad18@gmail.com"; ?></td>
						</tr>
						<tr>
							<td><?php echo "Semester 6"; ?></td>
							<td><?php echo ":"; ?></td>
							<td><?php echo "Relata"; ?></td>
						</tr>
					</table>
				</section>
			</article>
			<article class="card">
				<h2><?php echo "Alasan Masuk Teknik Informatika"; ?></h2>
				<p><?php echo "Alasan saya masuk teknik informatika karena prospek kerjanya luas dan banyak diperlukan."; ?></p>
			</article>
			<article class="card">
				<h2><?php echo "Belajar Bahasa Pemrograman Selanjutnya"; ?></h2>
				<p><?php echo "Bahasa pemrograman yang ingin saya pelajari untuk kedepannya yaitu bahasa pemrograman Python dan Java"; ?></p>
			</article>
			<article class="card">
				<h2><?php echo "Asisten Menyebalkan"; ?></h2>
				<p><?php echo "Menurut saya, selama mengikuti praktikum, saya tidak merasa bahwa asisten itu menyebalkan. adanya asisten yang membuat kita suasana menjadi tegang dengan cara dia menyampaikan materi. selama praktikum yang saya jalani dari semester 1 hingga saat ini pun saya tidak pernah membenci atau tidak suka dengan asisten"; ?></p>
			</article>
			<article class="card">
				<h2><?php echo "Konversi Nilai Dan Bilangan Prima" ?></h2>
				<br>
				<p><?php echo "Klik Button Dibawah Ini!"; ?></p>
				<p><button type="submit" id="submitbtn"><a href="konversi.php" style="text-decoration: none;">Click</a></button></p>
			</article>
		</div>
	</main>
	<div align="center">
		<a href="https://www.instagram.com/dara.audia/?hl=id"><img src="img/ig.jfif" width="30" height="30"></a>
        <a href="https://mail.google.com/mail/u/0/#inbox"><img src="img/gmail.png" width="30" height="30"></a>
        <a href="https://www.youtube.com/channel/UCBR8-60-B28hp2BmDPdntcQ"><img src="img/youtube.jfif" width="30" height="30"></a>
        <img src="img/facebook.png" width="30" height="30">
        <img src="img/twitter.jfif" width="30" height="30">
	</div>
	<div class="footerr" align="center">
    	<p><?php echo "Copy Right @dara.audia"; ?></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
