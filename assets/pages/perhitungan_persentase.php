<!-- Menghitung Persentase -->

<div class="container">
                
                <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="text-center">PERSENTASE</h3>
                    <table border="1px" width="800px" class="table table-grey table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                
                                <th>Persegi</th>
                                <th>Segitiga</th>
                                <th>Lingkaran</th>
                                <th>Total</th>		
                                <th>Persentase Persegi (%)</th>		
                                <th>Persentase Segitiga (%)</th>
                                <th>Persentase Lingkaran (%)</th>	
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Perulangan untuk menampilkan isi Array Daftar Maskapai beserta Rute Penerbangan -->
                            <?php
                                $Total= $jum_persegi + $jumSegitiga + $jumLingkaran;
                                $perP=$jum_persegi/$Total*100; 
                                $perS=$jumSegitiga/$Total*100;
                                $perL=$jumLingkaran/$Total*100;   
                                echo "<tr>";
                                echo "<td> $jum_persegi </td>";
                                echo "<td> $jumSegitiga </td>";		
                                echo "<td> $jumLingkaran </td>";	
                                echo "<td> $Total </td>";	
                                echo "<td>".round($perP,2)." </td>";//dua angka dibelakang ,
                                echo "<td>".round($perS,2)." </td>";
                                echo "<td>".round($perL,2)." </td>";
                                
                                echo "</tr>";
                            
                            ?>
    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
