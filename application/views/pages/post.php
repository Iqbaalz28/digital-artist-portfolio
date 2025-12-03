<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4"><?= $blog['judul'] ?></h1>
            <p class="text-muted"><?= pretty_date($blog['created_at'], 'd F Y H:i:s', false) ?> | By <?= $blog['full_name'] ?></p>
            <hr class="my-4">
            <div class="ck-editor-content">
                <?= $blog['konten'] ?>
            </div>
        </div>
    </div>
</div>