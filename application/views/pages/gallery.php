<div class="container mt-5">
    <section class="gallery-section">
        <div class="row gallery-gird" style="margin-top: -30px;">
            <?php foreach ($galleries as $index => $data) : ?>
                <div class="col-lg-4 col-xl-3 col-sm-6">
                    <a class="gallery-item fresco" href="<?= base_url('uploads/galleries/' . $data['img']) ?>" data-fresco-group="projects">
                        <img src="<?= base_url('uploads/galleries/' . $data['img']) ?>" alt="<?= "Image " . $index ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>