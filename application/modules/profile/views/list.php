<?php
function createSummary($text)
{
	$limit = 200;
	$textWithoutTags = strip_tags($text);
	$textWithoutImages = preg_replace('/<img[^>]*>/', '', $textWithoutTags);

	$visibleText = mb_substr($textWithoutImages, 0, $limit);

	$lastPeriodPos = mb_strrpos($visibleText, '.');

	if ($lastPeriodPos !== false) {
		$visibleText = mb_substr($visibleText, 0, $lastPeriodPos + 1);
	}

	return $visibleText;
}
?>

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
						<!-- /.box-header -->
						<div class="box-body table-responsive">
							<table id="dtable" class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Foto 1</th>
										<th>Foto 2</th>
										<th>Konten</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($profiles)) {
										$i = 1;
										foreach ($profiles as $row) :
									?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><img src="<?= base_url() . 'uploads/foto_1/' . $row['foto_1']; ?>" alt="" width="50px"></td>
												<td><img src="<?= base_url() . 'uploads/foto_2/' . $row['foto_2']; ?>" alt="" width="50px"></td>
												<td><?php echo createSummary($row['konten']); ?></td>
												<td>
													<a href="<?php echo site_url('manage/profile/edit/' . $row['id']) ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
												</td>
											</tr>
										<?php
											$i++;
										endforeach;
									} else {
										?>
										<tr id="row">
											<td colspan="7" align="center">Data Kosong</td>
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