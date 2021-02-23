        <!-- isi content -->
        <div class="container-fluid">

        	<nav aria-label="breadcrumb">
        		<ol class="breadcrumb">
        			<li class="breadcrumb-item"><a href="#">Menu</a></li>
        			<li class="breadcrumb-item"><a href="#">Input Kegiatan</a></li>
        			<li class="breadcrumb-item active" aria-current="page">Tabel Input Kegiatan</li>
        		</ol>
        	</nav>

        	<div class="card" style="padding: 20px;">
        		<div class="row">
        			<div class="col-sm-8">
        				<select class="form-select col-sm-4" aria-label="Default select example">
        					<option selected>Oktober</option>
        					<option value="1">Januari</option>
        					<option value="2">Februari</option>
        					<option value="3">Maret</option>
        					<option value="1">April</option>
        					<option value="2">Mei</option>
        					<option value="3">Juni</option>
        				</select>
        			</div>
        			<div class="col-sm">
        				<a href="#" class="btn btn-success btn-sm col-sm-12" style="margin-left:auto;" data-toggle="modal" data-target="#Inpt-kegiatan"><i class="fa fa-plus"></i> Tambah Kegiatan</a>
        			</div>
        		</div>
        		<br>
        		<div class="table-responsive">
        			<table id="example" class="table table-striped" style="width:100%">
        				<thead>
        					<tr>
        						<th scope="col" style="width: 20px;">#</th>
        						<th scope="col">Tanggal</th>
        						<th scope="col">Uraian Kegiatan</th>
        						<th scope="col">Sasaran Kegiatan</th>
        						<th scope="col">Catatan</th>
        						<th scope="col" style="width: 80px;" class="text-center">Status</th>
        					</tr>
        				</thead>
        				<tbody>
        					<?php

							$no = 1;
							$id_us = $user['id_user'];
							$Querytampiluser = "SELECT * from sasaran,kegiatan WHERE sasaran.id_sasaran = kegiatan.id_sasaran AND kegiatan.id_user = $id_us";
							$sis      = $this->db->query($Querytampiluser)->result_array();

							foreach ($sis as $keg) {

							?>
        						<tr>
        							<th scope="row"><?= $no++ ?></th>
        							<td><?= $keg['tgl_kegiatan'] ?></td>
        							<td><?= $keg['nama_kegiatan'] ?></td>
        							<td><?= $keg['nama_sasaran'] ?></td>
        							<td><?= $keg['catatan'] ?></td>
        							<!-- <td>
        							<a href="#" data-toggle="modal" data-target="#update-sasaran<?= $keg->id_keg ?>"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
        							<a data-toggle="modal" data-target="#hapus-sasaran<?= $keg->id_keg ?>"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
        						</td> -->
        							<td>
        								<?php
										if ($keg['status_keg'] == 0) {
											echo "<h8 class='text-primary text-center'>Menunggu Validasi</h8>";
										} elseif ($keg['status_keg'] == 1) {
											echo "<h8 class='text-success text-center'>Kegiatan Tervalidasi</h8>";
										} elseif ($keg['status_keg'] == 2) {
										?>
        									<h8 class='text-danger text-center'>Kegiatan ditolak <i class='fa fa-info-circle'></i></h8></br>
        									<a href='#' data-toggle='modal' data-target='#update-kegiatan<?= $keg['id_keg'] ?>'><i class='fa fa-pencil btn btn-success btn-sm'></i></a> | <a><i class='fa fa-trash btn btn-danger btn-sm' data-toggle='modal' data-target='#hapus-kegiatan<?= $keg['id_keg'] ?>'></i></a>

        								<?php
										}

										?>

        							</td>

        						</tr>

        						<!-- Modal Update Kegiatan -->
        						<div class="modal fade" id="update-kegiatan<?= $keg['id_keg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        							<div class="modal-dialog modal-lg">
        								<div class="modal-content">
        									<div class="modal-header bg-success">
        										<h5 class="modal-title text-white" id="exampleModalLabel"><img src="<?= base_url() ?>assets/img/icon/data1.png" width="40px" alt=""> Form Update Kegiatan</h5>
        										</button>
        									</div>
        									<div class="modal-body">
        										<form action="inp_kegiatan/update_kegiatan" class="was-validated" method="post">
        											<input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
        											<input type="hidden" name="id_keg" value="<?= $keg['id_keg'] ?>">
        											<div class="form-group row">
        												<label class="col-sm-3 col-form-label">Tanggal Kegiatan</label>
        												<div class="col-sm-4">
        													<input type="date" name="tgl_keg" value="<?= $keg['tgl_kegiatan'] ?>" class="form-control" required oninvalid="this.setCustomValidity('Tanggal Harus Di isi')">
        												</div>
        											</div>
        											<div class="form-group row">
        												<label for="inputPassword" class="col-sm-3 col-form-label">Sasaran kegiatan</label>
        												<div class="col-sm-8">
        													<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="sasaran_keg" id="level" required oninvalid="this.setCustomValidity('Sasaran Kerja Harus di Pilih')" oninput="setCustomValidity('')">
        														<option selected value=""><?= $keg['nama_sasaran'] ?></option>
        														<?php
																$id_us = $user['id_user'];
																$Querytampiluser = "SELECT * from sasaran WHERE id_user = $id_us";
																$sis1      = $this->db->query($Querytampiluser)->result_array();

																foreach ($sis1 as $sasa) {

																?>
        															<option value="<?= $sasa['id_sasaran'] ?>"><?= $sasa['nama_sasaran'] ?></option>

        														<?php
																}
																?>
        													</select>
        												</div>
        											</div>
        											<div class="form-group row">
        												<label class="col-sm-3 col-form-label">Uraian Kegiatan</label>
        												<div class="col-sm-8">
        													<textarea class="form-control" name="uraian_keg" rows="5" required oninvalid="this.setCustomValidity('Uraian Kegiatan Pegawai Tidak Boleh Kosong')" oninput="setCustomValidity('')"><?= $keg['nama_kegiatan'] ?></textarea>

        												</div>
        											</div>
        											<div class="modal-footer">
        												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        												<button type="submit" class="btn btn-success">Update Kegiatan</button>
        											</div>

        										</form>
        									</div>
        								</div>
        							</div>
        						</div>
        						<!-- akhir modal Update Kegiatan -->

        						<!-- Modal Hapus Kegiatan -->
        						<div class="modal fade" id="hapus-kegiatan<?= $keg['id_keg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        							<div class="modal-dialog">
        								<div class="modal-content">
        									<div class="modal-header bg-success">
        										<h5 class="modal-title text-white" id="exampleModalLabel">Apakah Anda Yakin Ingin Menghapus data <?= $keg['nama_kegiatan'] ?> ? </h5>
        										</button>
        									</div>
        									<div class="modal-body">
        										<form method="post" action="Inp_kegiatan/hapus_kegiatan">
        											<input type="hidden" name="id_keg" value="<?php echo $keg['id_keg']; ?>">
        											<div class="modal-footer">
        												<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        												<button type="submit" class="btn btn-danger">Hapus</button>
        											</div>
        										</form>
        									</div>
        								</div>
        							</div>
        						</div>
        						<!-- akhir modal Hapus Kegiatan -->



        					<?php
							}
							?>

        				</tbody>
        			</table>
        		</div>
        	</div>
        </div>



        <!-- Modal input kegiatan -->
        <div class="modal fade" id="Inpt-kegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        	<div class="modal-dialog modal-lg">
        		<div class="modal-content">
        			<div class="modal-header bg-success">
        				<h5 class="modal-title text-white" id="exampleModalLabel"><img src="<?= base_url() ?>assets/img/icon/data1.png" width="40px" alt=""> Form Input Kegiatan</h5>
        				</button>
        			</div>
        			<div class="modal-body">
        				<form action="inp_kegiatan/input_kegiatan" class="was-validated" method="post">
        					<input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
        					<div class="form-group row">
        						<label class="col-sm-3 col-form-label">Tanggal Kegiatan</label>
        						<div class="col-sm-4">
        							<input type="date" name="tgl_keg" class="form-control" required oninvalid="this.setCustomValidity('Tanggal Harus Di isi')">
        						</div>
        					</div>
        					<div class="form-group row">
        						<label for="inputPassword" class="col-sm-3 col-form-label">Sasaran kegiatan</label>
        						<div class="col-sm-8">
        							<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="sasaran_keg" id="level" required oninvalid="this.setCustomValidity('Sasaran Kerja Harus di Pilih')" oninput="setCustomValidity('')">
        								<option selected value="">Pilih Sasaran Kegiatan...</option>
        								<?php
										$id_us = $user['id_user'];
										$Querytampiluser = "SELECT * from sasaran WHERE id_user = $id_us";
										$sis1      = $this->db->query($Querytampiluser)->result_array();

										foreach ($sis1 as $sasa) {

										?>
        									<option value="<?= $sasa['id_sasaran'] ?>"><?= $sasa['nama_sasaran'] ?></option>

        								<?php
										}
										?>
        							</select>
        						</div>
        					</div>
        					<div class="form-group row">
        						<label class="col-sm-3 col-form-label">Uraian Kegiatan</label>
        						<div class="col-sm-8">
        							<textarea class="form-control" name="uraian_keg" rows="5" placeholder="Masukan Uraian Kegiatan Anda" required oninvalid="this.setCustomValidity('Uraian Kegiatan Pegawai Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>

        						</div>
        					</div>
        					<div class="modal-footer">
        						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        						<button type="submit" class="btn btn-success">Simpan Kegiatan</button>
        					</div>

        				</form>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- akhir modal input kegiatan -->