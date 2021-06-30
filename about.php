<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap">
	<style>
		.card1 {
                width: 700;
                margin: 0 auto 0 auto;
                border-radius: 7px;
                box-shadow: 0 2px 5px 0 rgba(0,0,0.5);
                padding: 30px;
                margin-top: 30px;
                background-color: #b3f0ff;
            }
        table th {
        	width: 300px;
        }

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
	<?php 
	$novels = [
		[
			"Judul Buku" => "Pulang",
			"Pengarang" => "Tereliye",
			"Penerbit" => "Republika",
			"Jumlah Halaman" => "415"
		],

		[
			"Judul Buku" => "Laskar Pelangi",
			"Pengarang" => "Andrea Hirata",
			"Penerbit" => "Benteng Pustaka",
			"Jumlah Halaman" => "529"
		],

		[
			"Judul Buku" => "Cinta Brontosaurus",
			"Pengarang" => "Raditya Dika",
			"Penerbit" => "Gagas Media",
			"Jumlah Halaman" => "160"
		],

		[
			"Judul Buku" => "Sepatu Dahlan",
			"Pengarang" => "Khrisna Pabichara",
			"Penerbit" => "Noura Books",
			"Jumlah Halaman" => "369"
		],

		[
			"Judul Buku" => "Sang Pemimpi",
			"Pengarang" => "Andrea Hirata",
			"Penerbit" => "Benteng Pustaka",
			"Jumlah Halaman" => "248"
		]
	]
	?>
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
		<div class="card1">
			<center>
			<table border="1">
			<tr>
				<th colspan="4">Daftar Buku</th>
			</tr>
			<tr>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Jumlah Halaman</th>
			</tr>
			<?php foreach ($novels as $novel) { ?>
				<tr>
					<td><?php echo $novel["Judul Buku"]; ?></td>
					<td><?php echo $novel["Pengarang"]; ?></td>
					<td><?php echo $novel["Penerbit"]; ?></td>
					<td><?php echo $novel["Jumlah Halaman"]; ?></td>
				</tr>
			<?php } ?>
			</table>
			</center>
		</div>
	</main>
</body>
</html>
