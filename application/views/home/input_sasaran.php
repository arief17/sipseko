        <!-- isi content -->
        <div class="container-fluid">

        	<nav aria-label="breadcrumb">
        		<ol class="breadcrumb">
        			<li class="breadcrumb-item"><a href="#">Menu</a></li>
        			<li class="breadcrumb-item"><a href="#">Input Sasaran Kegiatan</a></li>
        			<li class="breadcrumb-item active" aria-current="page">Tabel Sasaran Kegiatan</li>
        		</ol>
        	</nav>

        	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        	<?= $this->session->flashdata('message'); ?>


        	<div class="card" style="padding: 20px;">
        		<div class="row">
        			<div class="col-sm-8">

        			</div>
        			<div class="col-sm">
        				<a href="#" class="btn btn-success btn-sm col-sm-12" style="margin-left:auto;" data-toggle="modal" data-target="#Inpt-sasaran"><i class="fa fa-plus"></i> Tambah Sasaran</a>
        			</div>
        		</div>
        		<br>

        		<table id="example" class="table table-striped" style="width:100%">
        			<thead>
        				<tr>
        					<th scope="col" style="width: 20px;" class="text-center">#</th>
        					<th scope="col">Sasaran Kegiatan</th>
        					<th scope="col" style="width: 80px;" class="text-center">Aksi</th>
        				</tr>
        			</thead>
        			<tbody>
        				<?php
						$no = 1;
						foreach ($sasaran_keg as $sas) {


						?>
        					<tr>
        						<th scope="row" class="text-center"><?= $no++ ?></th>
        						<td>
        							<?= $sas->nama_sasaran ?>
        						<td>
        							<a href="#" data-toggle="modal" data-target="#update-sasaran<?= $sas->id_sasaran ?>"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
        							<a data-toggle="modal" data-target="#hapus-sasaran<?= $sas->id_sasaran ?>"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
        						</td>
        					</tr>

        					<!-- Modal Hapus Sasaran -->
        					<div class="modal fade" id="hapus-sasaran<?= $sas->id_sasaran ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        						<div class="modal-dialog">
        							<div class="modal-content">
        								<div class="modal-header bg-success">
        									<h5 class="modal-title text-white" id="exampleModalLabel">Apakah Anda Yakin Ingin Menghapus data <?= $sas->nama_sasaran ?> ? </h5>
        									</button>
        								</div>
        								<div class="modal-body">
        									<form method="post" action="Inp_sasaran/hapus_sasaran">
        										<input type="hidden" name="id_sasaran" value="<?php echo $sas->id_sasaran; ?>">
        										<div class="modal-footer">
        											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        											<button type="submit" class="btn btn-danger">Hapus</button>
        										</div>
        									</form>
        								</div>
        							</div>
        						</div>
        					</div>
        					<!-- akhir modal Hapus Sasaran -->

        					<!-- Modal input sasaran -->
        					<div class="modal fade" id="update-sasaran<?= $sas->id_sasaran ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        						<div class="modal-dialog modal-lg">
        							<div class="modal-content">
        								<div class="modal-header bg-success">
        									<h5 class="modal-title text-white" id="exampleModalLabel"><img src="<?= base_url() ?>assets/img/icon/data.png" width="40px" alt=""> Form Input Sasaran</h5>
        									</button>
        								</div>
        								<div class="modal-body">
        									<form action="inp_sasaran/update_sasaran" class="was-validated" method="post">
        										<input type="hidden" name="id_sasaran" value="<?= $sas->id_sasaran ?>" class="form-control" id="inputuser">
        										<div class="form-group">
        											<label for="exampleInputPassword1">Update Sasaran Kerja Pegawai</label>
        											<textarea class="form-control" name="nama_sasaran" rows="3" required oninvalid="this.setCustomValidity('Form Sasaran Kerja Pegawai Tidak Boleh Kosong')" oninput="setCustomValidity('')"><?= $sas->nama_sasaran ?></textarea>
        										</div>
        										<div class="modal-footer">
        											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        											<button type="submit" class="btn btn-success">Update Sasaran</button>
        										</div>
        									</form>
        								</div>

        							</div>
        						</div>
        					</div>
        					<!-- akhir modal input sasaran -->



        				<?php
						}
						?>
        			</tbody>
        		</table>
        	</div>
        </div>


        <!-- Modal input sasaran -->
        <div class="modal fade" id="Inpt-sasaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        	<div class="modal-dialog modal-lg">
        		<div class="modal-content">
        			<div class="modal-header bg-success">
        				<h5 class="modal-title text-white" id="exampleModalLabel"><img src="<?= base_url() ?>assets/img/icon/data.png" width="40px" alt=""> Form Input Sasaran</h5>
        				</button>
        			</div>
        			<div class="modal-body">
        				<form action="inp_sasaran/tambah_sasaran" class="was-validated" method="post">
        					<div class="form-group">
        						<label for="exampleInputPassword1">Sasaran Kerja Pegawai</label>
        						<textarea class="form-control" name="nama_sasaran" rows="3" placeholder="Masukan Sasaran Kerja Pegawai Anda" required oninvalid="this.setCustomValidity('Form Sasaran Kerja Pegawai Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
        					</div>
        					<div class="modal-footer">
        						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        						<button type="submit" class="btn btn-success">Simpan Sasaran</button>
        					</div>
        				</form>
        			</div>

        		</div>
        	</div>
        </div>
        <!-- akhir modal input sasaran -->
