<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo isset($title) ? '' . $title : null; ?>
			<small>List</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('manage') ?>"><i class="fa fa-th"></i> Home</a></li>
			<li class="active"><?php echo isset($title) ? '' . $title : null; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<a href="<?php echo site_url('manage/users/add') ?>" class="btn btn-md btn-success" data-toggle="tooltip" title="Tambah"><i class="fa fa-plus"></i> Tambah</a>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table id="dtable" class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Email</th>
									<th>Nama</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (!empty($user)) {
									$i = 1;
									foreach ($user as $row) :
								?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['full_name']; ?></td>
											<td>
												<a href="<?php echo site_url('manage/users/edit/' . $row['id']) ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
												<a href="#delModal<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" title="Hapus"></i></a>
										</tr>
										<div class="modal modal-default fade" id="delModal<?php echo $row['id']; ?>">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														<h3 class="modal-title"><span class="fa fa-warning"></span> Konfirmasi penghapusan</h3>
													</div>
													<div class="modal-body">
														<p>Apakah anda yakin akan menghapus data ini?</p>
													</div>
													<div class="modal-footer">
														<?php echo form_open('manage/users/delete/' . $row['id']); ?>
														<input type="hidden" name="delName" value="<?php echo $row['full_name']; ?>">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal"><span class="fa fa-close"></span> Batal</button>
														<button type="submit" class="btn btn-danger"><span class="fa fa-check"></span> Hapus</button>
														<?php echo form_close(); ?>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
									<?php
										$i++;
									endforeach;
								} else {
									?>
									<tr id="row">
										<td colspan="6" align="center">Data Kosong</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<div>
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>