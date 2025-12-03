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
						<?php if ($this->session->userdata('uroleid') != USER) { ?>
							<a href="<?php echo site_url('manage/illustration/add') ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</a>
						<?php } ?>
						<!-- /.box-header -->
						<div class="box-body table-responsive">
							<table id="dtable" class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($illustrations)) {
										$i = 1;
										foreach ($illustrations as $row) :
									?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><img src="<?= base_url() . 'uploads/illustrations/' . $row['img']; ?>" alt="" width="50px"></td>
												<td>
													<a href="#delModal<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" title="Hapus"></i></a>
												</td>
											</tr>
											<div class="modal modal-default fade" id="delModal<?php echo $row['id']; ?>">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span></button>
															<h3 class="modal-title"><span class="fa fa-warning"></span> Konfirmasi Hapus</h3>
														</div>
														<div class="modal-body">
															<p>Apakah anda yakin akan menghapus data ini?</p>
															<p><img src="<?= base_url() . 'uploads/illustrations/' . $row['img']; ?>" alt="" width="70%"></p>
														</div>
														<div class="modal-footer">
															<?php echo form_open('manage/illustration/delete'); ?>
															<input type="hidden" name="id" value="<?= $row['id'] ?>">
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
											<td colspan="5" align="center">Data Kosong</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
	</section>
	<!-- /.content -->
</div>