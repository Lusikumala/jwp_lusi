<?php
    //Fungsi luas lingkaran
    function luasLingkaran($jari){
    $luasLingkaran= (3.14*$jari*$jari);
    return $luasLingkaran;
    }
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINGKARAN</title>
    <link rel="stylesheet" href="../vendors/css/bootstrap.min.css">
</head>
<body>
    <!--nAV bAR  -->
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
                    <td><b>Jari-Jari Lingkaran</td>
                    <td>:</td>
                    <td><br><input type="text" onkeypress="return isNumberKey(event)" name="jari" required class="form-control"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><br><input type="submit" name="submit" value="Hitung" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
        <br>   

        <?php 
        if(isset($_POST['submit'])){
        $jari=$_POST['jari'];

            // menghitung luas lingkaran
            $luasLingkaran= (3.14*$jari*$jari); 

            //Tanggal dan waktu sekarang
            date_default_timezone_set('Asia/Jakarta');
            $tgl=date("l,d-m-Y H:i:s");  
        
            // Format data yang akan diparsing
            $data = "\n $jari|$luasLingkaran|$tgl";

            // Buka file lingkaran.txt, kemudian tuliskan isi variabel di atas kedalam lingkaran.txt
            $fh = fopen("../output/lingkaran.txt", "a");
            fwrite($fh, $data);

            // Tutup file data.txt
            fclose($fh);

            echo "Diketahui : <br />";
            echo "Hasil hitung dari Lingkaran yaitu sebagai berikut <br />";
            echo "Pada $tgl  <br />";
            echo "Jari-jari = $jari<br />";
            echo "Maka luas lingkaran [ (3.14*$jari*$jari)] = $luasLingkaran <br />";
        
    } ?>
    </div>

    <script src="assets/vendors/js/bootstrap.min.js"></script>
    <script language=Javascript>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>
</body>
</html>