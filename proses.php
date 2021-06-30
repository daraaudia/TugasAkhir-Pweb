<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap">
  </head>
  <body>
   <div class="card">
        <center>
          <div class="lihat">
      <?php

        echo "My Guest Book <br>";
        $fp = fopen("Bukutamu.txt","a+");
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['mail'];
        $jenis = $_POST['jenis'];
        $kritik = $_POST['kritik'];

        fputs($fp, "$nama|$alamat|$email|$jenis|$kritik \n");
        fclose($fp);

        echo "<h1> Terimakasih Telah Mengisi Buku Tamu </h1> <br>";
        echo "<a href=bukutamu.php> Isi Buku Tamu || </a>";
        echo "<a href=lihat.php> Lihat Buku Tamu </a> <br>";
       ?>
    </div>
  </center>
  </div>
  <div class="footer" align="center">
      <p>Copy Right @dara.audia</p>
    </div>
  </body>
</html>
