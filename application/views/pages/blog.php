    <?php
    function createSummary($text)
    {
        $limit = 300;
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

    <div class="container mt-5">
        <div class="row" style="text-align: left; margin-bottom: 100px; margin-top: -30px;" >
            <div class="col-md-12 col-sm-12">
                <?php foreach ($blogs as $blog) : ?>
                    <div class="card" style="border: 0;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img src="<?= base_url() . 'uploads/blogs/' . $blog['foto'] ?>" alt="" class="img-fluid" style="max-height: 250px; width: 100%; margin-bottom: 20px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h5 class="card-title"><?= $blog['judul'] ?></h5>
                                    <p class="card-text"><?= createSummary($blog['konten']) ?></p>
                                    <a href="<?= base_url() . 'blog/post/?title=' . $blog['slug'] ?>" class="btn btn-secondary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>