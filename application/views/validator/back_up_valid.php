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
				<a href="#" class="btn btn-success btn-sm col-sm-12" style="margin-left:auto;" data-toggle="modal" data-target="#Inpt-kegiatan"><i class="fa fa-plus"></i>	Tambah Kegiatan</a>
				</div>
			</div>
			<br>
        	<table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                <th scope="col" style="width: 20px;">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Sasaran Kegiatan</th>
                <th scope="col" style="width: 80px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reprehenderit labore odio tempore inventore.</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reprehenderit labore odio tempore inventore.</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reprehenderit labore odio tempore inventore.</td>
                <td>
					<a href="#"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
					<a href="#"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
				</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quasi aliquid placeat cumque, saepe inventore.</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quasi aliquid placeat cumque, saepe inventore.</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quasi aliquid placeat cumque, saepe inventore.</td>
                <td>
					<a href="#"><i class="fa fa-pencil btn btn-success btn-sm"></i></a> |
					<a href="#"><i class="fa fa-trash btn btn-danger btn-sm"></i></a>
				</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae cumque, debitis ut labore odio aperiam mollitia sunt ducimus quas incidunt.</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae cumque, debitis ut labore odio aperiam mollitia sunt ducimus quas incidunt.</td>
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



			<!-- Modal input kegiatan -->
			<div class="modal fade" id="Inpt-kegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white" id="exampleModalLabel"><img src="<?= base_url() ?>assets/img/icon/data1.png" width="40px" alt=""> Form Input Kegiatan</h5>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleInputPassword1">Tanggal Kegiatan</label>
							<input class="form-control col-sm-5" id="exampleFormControlTextarea1" type="date">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Sasaran Kerja Pegawai</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Kegiatan Yang Dilakukan</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Sasaran Kerja Pegawai Anda"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success">Simpan Kegiatan</button>
				</div>
				</div>
			</div>
			</div>
			<!-- akhir modal input kegiatan -->
		
