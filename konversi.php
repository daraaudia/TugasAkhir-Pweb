<html> 
    <head> 
        <title>Konversi Nilai</title> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap">
        <style>
            .back {
                width: 400px;
                margin: 0 auto 0 auto;
                border-radius: 7px;
                box-shadow: 0 2px 5px 0 rgba(0,0,0.5);
                padding: 30px;
                margin-top: 30px;
                background-color: #b3f0ff;
            }
            .card1 {
                width: 700;
                margin: 0 auto 0 auto;
                border-radius: 7px;
                box-shadow: 0 2px 5px 0 rgba(0,0,0.5);
                padding: 30px;
                margin-top: 30px;
                background-color: #b3f0ff;
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
                    <li><?php echo "Konversi Nilai Dan Bilangan Prima" ?></li>
                </ul>
            </nav>
        </header>

        <div class="card1">
            <center>
            <form method="post" action=""> 
                <h1 style="font-family: 'Patrick Hand', cursive;">Konversi Nilai</h1>
                Input Nilai Anda : <input type="text" name="nilai" placeholder="Input Nilai" />
                <br />
                <input type="submit" name="submit" value="Submit" id="submitbtn" /> 
                <br>
                <br>
            </form> 
            <?php 
                $nilai = $_POST['nilai'];
                $nilaihuruf = $_POST['nilai'];
                $submit = $_POST['submit'];


                if(($submit<0)|| ($nilai > 100))
                {
                echo "Nilai angka yang diberikan salah";
                }
                else
                {
                if (($nilai >= 80) && ($nilai <= 100))
                {
                $nilaihuruf = "A";
                }
                else if (($nilai >= 70) && ($nilai <= 79))
                {
                $nilaihuruf = "B";
                }
                else if (($nilai >= 60) && ($nilai <= 69))
                {
                $nilaihuruf = "C";
                }
                else if (($nilai >= 50) && ($nilai <= 59))
                {
                $nilaihuruf = "D";
                }
                else if (($nilai >= 0) && ($nilai <= 49))
                {
                $nilaihuruf = "E";
                }
                echo "-----NILAI SISWA-----<br>";
                echo "Nilai Angka   : $nilai   <br>";
                echo "Nilai Huruf : $nilaihuruf <br>";
                echo "---------------------------<br>";
                }
            ?>
            </center>
            <br>
        </div>

        <div class="card1">
            <form method="POST" id="form" action="<?php print $_SERVER['PHP_SELF']?>" >
                <center>
                <table>
                <tr>
                    <td colspan="3" align="center">
                        <h1 style="font-family: 'Patrick Hand', cursive;">Menentukan Bilangan Prima</h1>
                    </td>
                </tr>

                <tr>
                    <td style="font-family: 'Indie Flower', cursive;">Bilangan yang ingin diketahui</td>
                    <td>:</td>
                    <td><input name="bilprima" type="text" placeholder="Input Angka" ></td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <input type="Submit" name="submit" value="cek" id="submitbtn" />
                    </td>
                </tr>
                </table>
                </center>
            </form>
            <?php

            if(!empty ($_POST['bilprima'])){
                $bil = $_POST['bilprima'];
                $statusbil = "PRIMA";
                if($bil == 1){
                        $statusbil="Tidak Prima";
                    }
                for($i=2;$i<=$bil-1;$i++){
                    if($bil % $i ==0){
                        $statusbil="Tidak Prima";
                        break;
                    }
        
            }

            echo "<center><strong><font color=black font face='Segoe Script' size='4pt'>Angka ".$bil." adalah Bilangan $statusbil</font></strong></center>";
            }

            ?>
        </div>
        <div class="back">
            <center>
                <h4>Ingin Kembali Ke Home?</h4>
                <p><button type="submit" id="submitbtn"><a href="home.php" style="text-decoration: none;">Click</a></button></p>
            </center>
        </div>
        <div class="footerr" align="center">
            <p><?php echo "Copy Right @dara.audia"; ?></p>
        </div>
</body> 
</html> 
