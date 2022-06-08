<div class="container">     
        <div class="row justify-content-center">
			<div class="col-md-8">
				<h4 class="text-center">TABEL SEGITIGA</h4>
				<table border="1px"  width="800px" class="table table-bordered table-grey table-striped table-hover">
					<thead>
						<tr>
                                <th>Nomor</th>
                                <th>Alas</th>
                                <th>Tinggi</th>
                                <th>Luas Segitiga</th>
                                <th>Waktu</th>							
						</tr>
					</thead>
					<tbody>
						<!-- Perulangan untuk menampilkan isi Array Daftar Maskapai beserta Rute Penerbangan -->
						<?php
                        $txt_file    = file_get_contents('../output/segitiga.txt');
                        $rowsSegitiga= explode("\n", $txt_file);
                        $hit=count($rowsSegitiga);
                        // echo $hit;

                        $i=1;
						// foreach ($rowsLingkaran as $row => $data) {
                        // echo $hit;
                        //untuk menampilkan perulangan data
                        for ($j=$hit-1; 0 <=$j ; $j--) { 
                            // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
                            $rowDatasegitiga = explode('|', $rowsSegitiga[$j]);
							echo "<tr>";
                            echo "<td> $i </td>";
							echo "<td> $rowDatasegitiga[0] </td>";
							echo "<td> $rowDatasegitiga[1] </td>";
							echo "<td> $rowDatasegitiga[2] </td>";
							echo "<td> $rowDatasegitiga[3] </td>";
							$segitiga[]=$rowDatasegitiga[2];
							echo "</tr>";
                            $i++;
						}
                            $jumSegitiga=$hit;
						?>

					</tbody>
				</table>
		</div>
	</div>
</div>