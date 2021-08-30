<section class="section">
	<div class="card">
		<section class="content">
			
			<div class="box">

				<div class="card-header">
					<div class="float-end">
						<a type="button" class="btn btn-primary btn-sm" href="<?= site_url('penyusutan'); ?>"><svg
							xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
							d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
							<path
							d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
						</svg>  Kembali</a>
					</div>
					<br><br>
					<div class="table-responsive" style="margin-top: 10px;">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Tahun</th>
									<th>Nama Barang</th>
									<th>Jenis</th>
									<th>Umur</th>
									<th>Harga</th>
									<th>Penyusutan</th>
									<th>Nilai Residu</th>
									<th>Akumulasi</th>
									<th>Nilai Buku Akhir</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$akumulasi  = 0;
								foreach($result as $data){
									for ($date=1; $date <= 5 ; $date++) { 
										
										$penyusutan = ($data->harga - $data->nilai_residu) / 5;
										$akumulasi += $penyusutan;
										$nilaiBuku  = $data->harga - $akumulasi;

                            // $penyusutan = $data->harga / $data->umur;
                            // $akumulasi  = $data->harga - $data->nilai_residu;
                            // $nilaiBuku  = $data->harga - $penyusutan;

										
										if ($date % 2 == 0) {
											echo "<tr>
											<td>$date</td>
											<td>$data->nama_barang</td>
											<td>$data->jenis</td>
											<td>$data->umur</td>
											<td>$data->harga</td>
											<td>$penyusutan</td>
											<td>$data->nilai_residu</td>
											<td>$akumulasi</td>
											<td>$nilaiBuku</td>
											<td>$data->ket</td>
											";
										}else {
											echo "<tr>
											<td>$date</td>
											<td>$data->nama_barang</td>
											<td>$data->jenis</td>
											<td>$data->umur</td>
											<td>$data->harga</td>
											<td>$penyusutan</td>
											<td>$data->nilai_residu</td>
											<td>$akumulasi</td>
											<td>$nilaiBuku</td>
											<td>$data->ket</td>
											</tr>";
										}

									}
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
