<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Guest Book</title>
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
        <h4>Dara Audia</h4>
      </div>

      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="bukutamu.php">Buku Tamu</a></li>
        <li><a onclick="logout()">Logout</a></li>
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
      <div class="header">
        <center>
        <div class="card">
    <center>
      <h1>Buku tamu</h1>
    </center>

    <form class="input" action="proses.php" method="post">
      <table>
        <tr>
          <td>Nama Lengkap</td>
          <td><input type="text" name="nama" value=""></td>
        </tr>

        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" value=""></td>
        </tr>

        <tr>
          <td>E-Mail</td>
          <td><input type="email" name="mail" value=""></td>
        </tr>

        <tr>
          <td>Jenis Kelamin </td>
          <td><select class="" name="jenis">
            <option value="Laki - Laki" name="jenis">Laki Laki</option>
            <option value="Perempuan" name="jenis">Perempuan</option>
          </select></td>
        </tr>

        <tr>
          <td>Kritik Dan Saran </td>
          <td><textarea name="kritik" rows="4" cols="40"></textarea><br> <br></td>
        </tr>
        <tr class="tombol">
          <td><input type="submit" id="submitbtn" value="KIRIM"> <input type="reset" id="resetbtn" value="BATAL"></td>
        </tr>

      </table>
    </form>

    <div class="lihat" >
      <center>
      <a href="lihat.php">Lihat Buku Tamu</a>
    </center>
    </div>
    </center> 
    <div class="footer" align="center">
      <p>Copy Right @dara.audia</p>
    </div>
    <script type="script.js"></script>
  </body>
</html>
