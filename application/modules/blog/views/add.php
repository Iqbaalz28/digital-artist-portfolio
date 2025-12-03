<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<?php

if (isset($blog)) {

	$JudulValue = $blog['judul'];
	$KontenValue = $blog['konten'];
} else {
	$JudulValue = set_value('judul');
	$KontenValue = set_value('konten');
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
			<li><a href="<?php echo site_url('manage/blog') ?>">Blog</a></li>
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
							<?php if (isset($blog)) { ?>
								<input type="hidden" name="id" value="<?php echo $blog['id']; ?>">
							<?php } ?>

							<div class="form-group">
								<label>Gambar</label>
								<input type="file" id="foto" name="foto" class="form-control">
							</div>
							<div class="form-group">
								<label>Judul <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
								<input name="judul" type="text" class="form-control" value="<?php echo $JudulValue ?>">
							</div>
							<div class="form-group">
								<label>Konten <small data-toggle="tooltip" title="Wajib diisi">*</small></label></label>
								<textarea name="konten" id="konten" class="form-control  ckeditor"><?php echo $KontenValue ?></textarea>
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
						<a href="<?php echo site_url('manage/blog'); ?>" class="btn btn-block btn-info">Batal</a>
						<?php if (isset($blog)) { ?>
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
<?php if (isset($blog)) { ?>
	<div class="modal fade" id="deleteStudent">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Konfirmasi Hapus</h4>
				</div>
				<form action="<?php echo site_url('manage/blog/delete') ?>" method="POST">
					<div class="modal-body">
						<p>Apakah anda akan menghapus data ini?</p>
						<input type="hidden" name="id" value="<?= $blog['id'] ?>">
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

<script>
	CKEDITOR.replace('konten', {
		extraPlugins: 'autoembed',
		autoEmbed_widget: 'img',
		height: 300,
		filebrowserUploadUrl: "<?= site_url('manage/blog/upload_konten') ?>"
	});
</script>