<div class="modern-container">
    <section class="modern-gallery">
        <?php foreach ($galleries as $index => $data) : ?>
            <div class="gallery-card">
                <a class="fresco" href="<?= base_url('uploads/galleries/' . $data['img']) ?>" data-fresco-group="galleries">
                    <img src="<?= base_url('uploads/galleries/' . $data['img']) ?>" alt="Gallery <?= $index + 1 ?>">
                    <div class="card-overlay">
                        <h4>Gallery #<?= $index + 1 ?></h4>
                        <p>Click to view full size</p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </section>
</div>