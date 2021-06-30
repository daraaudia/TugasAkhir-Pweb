<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap">
  </style>
  </head>
  <body>
    <div class="card">
        <center>
      <div class="lihat">
      <?php
      echo "<h1> Guest Book List </h1>";
          $fp = fopen("bukutamu.txt","r");
          echo "<table border=0";

          while ($isi = fgets($fp,80)){

            $pisah = explode("|",$isi);

            echo "<tr><td> NAMA </td><td>: <b>$pisah[0]</b></td></tr>";
            echo "<tr><td> ALAMAT </td><td>: <b>$pisah[1]</b></td></tr>";
            echo "<tr><td> EMAIL </td><td>: <b>$pisah[2]</b></tr>";
            echo "<tr><td> JENIS KELAMIN </td><td>: <b>$pisah[3]</b></td></tr>";
            echo "<tr><td> KRITIK </td><td>: <b>$pisah[4]</b></td></tr> <tr><td> &nbsp; <hr></td> <td> &nbsp; <hr></td></tr>";
          }

          echo "</table>";
          echo "<br> <br>";
          echo "<a href=bukutamu.php> Klik Di sini </a> Isi Form Buku Tamu";
      ?>
    </div>
    </center>
    </div>
    <div class="footer" align="center">
      <p>Copy Right @dara.audia</p>
    </div>
  </body>
</html>
