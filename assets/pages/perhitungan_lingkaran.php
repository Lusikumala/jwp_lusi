<!-- Menampilkan Tabel Perhitungan Persegi Panjang -->

<div class="container">                  
            <div class="row justify-content-center">
			<div class="col-md-8">
				<h4 class="text-center">TABEL LINGKARAN</h4>
				<table border="1px" width="800px"  class="table table-bordered table-grey table-striped table-hover">
					<thead>
						<tr>
                        <th>Nomor</th>
                        <th>Jari - jari</th>
                        <th>Luas Lingkaran</th>
                        <th>Waktu</th>						
						</tr>
					</thead>
					<tbody>
						<!-- Perulangan untuk menampilkan isi Array Data Persegi Panjang -->
						<?php

                        $txt_file    = file_get_contents('../output/lingkaran.txt');//untuk membaca 
                        $rowsLingkaran = explode("\n", $txt_file);
                        // array_shift($rowsLingkaran);
                        $hit=count($rowsLingkaran);
                        // echo $hit;

                        $i=1;
						// foreach ($rowsLingkaran as $row => $data) {
//untuk menampilkan perulangan data
                        for ($j=$hit-1; 0 <=$j ; $j--) { 
                        	
                            // Explode digunakan untuk memisahkan Item Data dari Pemisah |, array pada PHP dimulaipada index ke-0
                            $rowDataLingkaran = explode('|', $rowsLingkaran[$j]);
                            // $dt=ksort($rowDataLingkaran, true);
                            // echo "<pre>";

                            // print_r($rowDataLingkaran);
                            // echo "</pre>";
                            // var_dump($dt);
							echo "<tr>";
                            echo "<td> $i </td>";
							echo "<td> $rowDataLingkaran[0] </td>"; 
							echo "<td> $rowDataLingkaran[1] </td>";
							echo "<td> $rowDataLingkaran[2] </td>";
							$lingkaran[]=$rowDataLingkaran[1];
							echo "</tr>";

                            $i++;
						}
                        $jumLingkaran =$hit;
						?>

					</tbody>
				</table>
                
			</div>
		</div>
	</div>