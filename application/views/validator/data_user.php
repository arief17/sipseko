        <!-- isi content -->
        <div class="container-fluid">

		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Administrator</a></li>
			<li class="breadcrumb-item"><a href="#">Data Users</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tabel Data User</li>
		</ol>
		</nav>
			<div class="card" style="padding: 20px;">
				<div class="row">
					<div class="col-sm-8">
					
					</div>
				<div class="col-sm">
				<a href="#" class="btn btn-success btn-sm col-sm-12" style="margin-left:auto;" data-toggle="modal" data-target="#Inpt-user"><i class="fa fa-plus"></i>	Tambah User</a>
				</div>
			</div>
			<br>

			<table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                <th scope="col" style="width: 20px;">#</th>
                <th scope="col">Nama User</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Level User</th>
                <th scope="col" style="width: 80px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
					<?php
						$no = 1;
						foreach ($user as $us)  {

							$id_user =$us->id_user;
					?>
                <tr>
                <th scope="row"><?= $no++?></th>
                <td><?php echo $us->nama_user ?></td>
                <td><?php echo $us->username ?></td>
                <td><?php echo $us->password ?></td>
                <td><?php
					if ($us->id_level == "1") {
						echo "Validator Guru";
					}elseif ($us->id_level == "2") {
						echo "Validator TU";
					}elseif ($us->id_level == "3") {
						echo "Guru";
					}else{
						echo "TU";
					}
				?></td>
                <td>
					<a href="#" data-toggle="modal" data-target="#edit-user<?= $id_user?>"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
					<a href="#" data-toggle="modal" data-target="#hapus-user<?= $id_user?>"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
				</td>
                </tr>



				<!-- Modal hapus user -->
				<div class="modal fade" id="hapus-user<?= $id_user?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" id="exampleModalLabel">Apakah Anda Yakin Ingin Menghapus data <?= $us->nama_user?> ?	</h5>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="data_user/hapus_user">
						<input type="hidden"  name="id_user" value="<?php echo $us->id_user;?>">
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-danger">Hapus</button>
							</div>
						</form>		
					</div>
					</div>
				</div>
				</div>
				<!-- akhir modal hapus user -->


				<!-- Modal edit sasaran -->
				<div class="modal fade" id="edit-user<?= $id_user?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" id="exampleModalLabel"><img src="<?= base_url() ?>assets/img/icon/team.png" width="40px" alt=""> Form Edit User</h5>
						</button>
					</div>
					<div class="modal-body">
						<div class="error"></div>
						<form method="post" action="data_user/edit_user">
						<input type="hidden" name="id_user" value="<?= $us->id_user?>" class="form-control" id="inputuser">
							<div class="container">
							<div class="form-group row">
								<label for="inputuser" class="col-sm-2 col-form-label">Nama User</label>
								<div class="col-sm-5">
								<input type="text" name="nama_user" value="<?= $us->nama_user?>" class="form-control" id="inputuser">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputusername" class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-8">
								<input type="text" name="username" value="<?= $us->username?>" class="form-control" id="inputusername">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-8">
								<input type="text" name="password" value="<?= $us->password?>" class="form-control" id="inputPassword">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 col-form-label">Level</label>
								<div class="col-sm-4">
								<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="level">
									<option selected>Pilih Level...</option>
									<option value="1">Vaidator Guru</option>
									<option value="2">Validator TU</option>
									<option value="3">Guru</option>
									<option value="4">TU</option>
								</select>
								</div>
							</div>


							</div>
							
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success">Simpan Sasaran</button>
							</div>
						</form>
					</div>
					</div>
				</div>
				</div>
				<!-- akhir modal edit sasaran -->

					<?php
						}
					?>
            </tbody>
            </table>
	</div>
	</div>
		

	<!-- Modal input sasaran -->
	<div class="modal fade" id="Inpt-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header bg-success">
			<h5 class="modal-title text-white" id="exampleModalLabel"><img src="<?= base_url() ?>assets/img/icon/team.png" width="40px" alt=""> Form Tambah User</h5>
			</button>
		</div>
		<div class="modal-body">
				<?php echo form_open_multipart('index.php/validator/data_user/tambah_user'); ?>
				<div class="container">
				<div class="form-group row">
					<label for="inputuser" class="col-sm-2 col-form-label">Nama User</label>
					<div class="col-sm-5">
					<input type="text" name="nama_user" class="form-control" id="inputuser">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputusername" class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-8">
					<input type="text" name="username" class="form-control" id="inputusername">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-8">
					<input type="password" name="password" class="form-control" id="inputPassword">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Level</label>
					<div class="col-sm-4">
					<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="level">
						<option selected>Pilih Level...</option>
						<option value="1">Vaidator Guru</option>
						<option value="2">Validator TU</option>
						<option value="3">Guru</option>
						<option value="4">TU</option>
					</select>
					</div>
				</div>


				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Simpan Sasaran</button>
				</div>
			<?php echo form_close() ?>
		</div>
		</div>
	</div>
	</div>
	<!-- akhir modal input sasaran -->


	