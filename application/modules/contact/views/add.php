<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<?php

if (isset($contact)) {

	$KontenValue = $contact['konten'];
} else {
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
			<li><a href="<?php echo site_url('manage/contact') ?>">Blog</a></li>
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
							<?php if (isset($contact)) { ?>
								<input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
							<?php } ?>

							<div class="form-group">
								<label>Instagram</label>
								<input type="text" id="instagram" name="instagram" class="form-control">
							</div>

							<div class="form-group">
								<label>LinkedIn</label>
								<input type="text" id="linkedin" name="linkedin" class="form-control">
							</div>

							<div class="form-group">
								<label>Kontak <small data-toggle="tooltip" title="Wajib diisi">*</small></label></label>
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
						<a href="<?php echo site_url('manage/contact'); ?>" class="btn btn-block btn-info">Batal</a>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
		<!-- /.row -->
	</section>
</div>

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
		filebrowserUploadUrl: "<?= site_url('manage/contact/upload_konten') ?>"
	});
</script>
