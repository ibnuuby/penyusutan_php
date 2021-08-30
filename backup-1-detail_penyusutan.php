<section class="section">
	<div class="card">
		<section class="content">

			<div class="box">
                <div class="card-header">
                    <center>
                    <h2 class="box-title"><b>Penyusutan Metode Garis Lurus</b></h2>
                    </center>
					<div class="float-end">
						<a type="button" class="btn btn-primary btn-sm" href="<?= site_url('penyusutan'); ?>"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
								<path
									d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
							</svg> Kembali</a>
					</div>
                    <?php 
                
                    
                foreach($result as $data){

                }
?>

                    <a href="<?= site_url("laporan/print_penyusutan/").$data->id_kir ?>" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-printer"></i> Print</a>
						<a href="http://localhost/sisapras/laporan/excel_penyusutan" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-file-earmark-spreadsheet"></i> Excel</a>
					<br><br>
					<div class="table-responsive" style="margin-top: 10px;">

						<table class="table table-bordered">
							<thead>
								<tr>
									<td>Tahun</td>
									<th>Harga</th>
									<th>Penyusutan</th>
									<th>Akumulasi</th>
									<th>Nilai Buku Akhir</th>
									
								</tr>
							<tbody>
		                 <?php
                        $akumulasi    = 0;
                        $harga        = $data->harga;
                        $nilai_residu = $data->nilai_residu;
                        $umur         = $data->umur;
						foreach($result as $data){
                        
                            $penyusutan = ($harga - $nilai_residu) / $umur;
                            $akumulasi += $penyusutan;
                            $nilaiBuku  = $harga - $akumulasi;
                            echo "<tr>
                                <td>$data->tahun</td>
                                <td>".rupiah($harga)."</td>
                                <td>".rupiah($penyusutan)."</td>
                                <td>".rupiah($akumulasi)."</td>
                                <td>".rupiah($nilaiBuku)."</td>
                                ";

                        }
                    
                 ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<!-- <script src="http://jqueryfiledownload.apphb.com/Scripts/jquery.fileDownload.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
