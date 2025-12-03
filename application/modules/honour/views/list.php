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
							<a href="<?php echo site_url('manage/honour/add') ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</a>
						<?php } ?>
						<!-- /.box-header -->
						<div class="box-body table-responsive">
							<table id="dtable" class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Penghargaan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($honour)) {
										$i = 1;
										foreach ($honour as $row) :
									?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row['name']; ?></td>
												<td>
													<a href="<?php echo site_url('manage/honour/edit/' . $row['id']) ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
												</td>
											</tr>
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