<div class="modern-container">
    <section class="modern-gallery">
        <?php foreach ($illustrations as $index => $data) : ?>
            <div class="gallery-card">
                <a class="fresco" href="<?= base_url('uploads/illustrations/' . $data['img']) ?>" data-fresco-group="illustrations">
                    <img src="<?= base_url('uploads/illustrations/' . $data['img']) ?>" alt="Illustration <?= $index + 1 ?>">
                    <div class="card-overlay">
                        <h4>Illustration #<?= $index + 1 ?></h4>
                        <p>Click to view full size</p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </section>
</div>