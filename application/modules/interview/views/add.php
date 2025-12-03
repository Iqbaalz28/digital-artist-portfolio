<?php

if (isset($interview)) {

	$InterviewValue = $interview['name'];
} else {
	$InterviewValue = set_value('name');
}
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo isset($title) ? '' . $title : null; ?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('manage') ?>"><i class="fa fa-th"></i> Home</a></li>
			<li><a href="<?php echo site_url('manage/interview') ?>">Interview</a></li>
			<li class="active"><?php echo isset($title) ? '' . $title : null; ?></li>
		</ol>
	</section>

	<!-- Main content -->
	<!-- Main content -->
	<section class="content">
		<?php echo form_open_multipart(current_url()); ?>
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-9">
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<div class="nav-tabs-custom">
							<?php if (isset($interview)) { ?>
								<input type="hidden" name="id" value="<?php echo $interview['id']; ?>">
							<?php } ?>

							<div class="form-group">
								<label>Interview <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
								<input name="name" type="text" class="form-control" value="<?php echo $InterviewValue ?>">
							</div>

						</div>
					</div>


					<p class="text-muted">*) Kolom wajib diisi.</p>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="col-md-3">
				<div class="box box-primary">
					<!-- /.box-header -->
					<div class="box-body">
						<button type="submit" class="btn btn-block btn-success">Simpan</button>
						<a href="<?php echo site_url('manage/interview'); ?>" class="btn btn-block btn-info">Batal</a>
						<?php if (isset($interview)) { ?>
							<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteStudent">Hapus
							</button>
						<?php } ?>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
		<!-- /.row -->
	</section>
</div>
<?php if (isset($interview)) { ?>
	<div class="modal fade" id="deleteStudent">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Konfirmasi Hapus</h4>
				</div>
				<form action="<?php echo site_url('manage/interview/delete') ?>" method="POST">
					<div class="modal-body">
						<p>Apakah anda akan menghapus data ini?</p>
						<input type="hidden" name="id" value="<?= $interview['id'] ?>">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Hapus</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>

<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#target').attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#img").change(function() {
		readURL(this);
	});
</script>