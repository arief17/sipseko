        <!-- isi content -->
        <div class="container-fluid">

		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Menu</a></li>
			<li class="breadcrumb-item"><a href="#">Input Sasaran Kegiatan</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tabel Sasaran Kegiatan</li>
		</ol>
		</nav>
			<div class="card" style="padding: 20px;">
				<div class="row">
					<div class="col-sm-8">
					
					</div>
				<div class="col-sm">
				<a href="#" class="btn btn-success btn-sm col-sm-12" style="margin-left:auto;" data-toggle="modal" data-target="#Inpt-sasaran"><i class="fa fa-plus"></i>	Tambah Sasaran</a>
				</div>
			</div>
			<br>

			<table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                <th scope="col" style="width: 20px;">#</th>
                <th scope="col">Sasaran Kegiatan</th>
                <th scope="col" style="width: 80px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reprehenderit labore odio tempore inventore.</td>
                <td>
					<a href="#"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
					<a href="#"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
				</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quasi aliquid placeat cumque, saepe inventore.</td>
                <td>
					<a href="#"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
					<a href="#"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
				</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae cumque, debitis ut labore odio aperiam mollitia sunt ducimus quas incidunt.</td>
				<td>
					<a href="#"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
					<a href="#"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
				</td>
                </tr>
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
					<form>
						<div class="form-group">
							<label for="exampleInputPassword1">Sasaran Kerja Pegawai</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Sasaran Kerja Pegawai Anda"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success">Simpan Sasaran</button>
				</div>
				</div>
			</div>
			</div>
			<!-- akhir modal input sasaran -->
		
