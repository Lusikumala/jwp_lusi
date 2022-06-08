<?php 
    // Fungsi untuk menghitung Luas Persegi
    function lPersegi($s){
        $luas=$s*$s;
        return $luas;
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSEGI</title>
    <link rel="stylesheet" href="../vendors/css/bootstrap.min.css">
</head>
<body>
    <!--navbar  -->
    <?php include 'navbar.php';?>   
    <br><br><br>
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <br>
        <br>     
            <!-- FORM INPUT -->
            <form action=""method="POST">
                <table>            
                    <tr class="form-group">
                        <td><b>Panjang Sisi</td>
                        <td>:</td>
                        <td><input type="text" id="sisi" onkeypress="return isNumberKey(event)" name="sisi" required class="form-control"></td>

                    </tr>         

                    <tr>
                        <td></td>
                        <td></td>
                        <td><br><input type="submit" name="submit" value="Hitung" class="btn btn-success" ></td>
                    </tr>
                </table>
            </form>     

            <?php 
        if(isset($_POST['submit'])){ //proses setelah hitung di klik

        $sisi=$_POST['sisi']; //melakukan pengecekan apakah data itu ada isinya     

           //menghitung luas persegi
            $luas_persegi=lPersegi($sisi);

            //Tanggal dan waktu sekarang
            date_default_timezone_set('Asia/Jakarta');
            $tgl=date("l,d-m-Y H:i:s");  
    
            // Format data yang akan diparsing
            $data = "\n $sisi|$sisi|$luas_persegi|$tgl";

            // Buka file persegi.txt, kemudian tuliskan isi variabel di atas kedalam persegi.txt
            $fh = fopen("../output/persegi.txt", "a"); // fopen pre-existing  file txt
            fwrite($fh, $data); // di tulis

            // Tutup file data.txt
            fclose($fh);
            // menampilkan hasil perhitungan
            echo "Diketahui :<br />";
            echo "Hasil hitung luas persegi yaitu sebagai berikut <br />";
            echo "Pada $tgl <br />";
            echo "Sisi = $sisi <br />";       
            echo "Maka Luas Persegi [ $sisi x $sisi ] = $luas_persegi <br />";

    }  ?>
    </div>


    <script src="assets/vendors/js/bootstrap.min.js"></script>
</body>
<script language=Javascript>
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode == 188 && charCode > 31 
        && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>
</html>