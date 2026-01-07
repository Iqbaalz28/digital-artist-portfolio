<?php
function createSummary($text)
{
    $limit = 150;
    $textWithoutTags = strip_tags($text);
    $textWithoutImages = preg_replace('/<img[^>]*>/', '', $textWithoutTags);
    $visibleText = mb_substr($textWithoutImages, 0, $limit);
    $lastPeriodPos = mb_strrpos($visibleText, '.');
    if ($lastPeriodPos !== false) {
        $visibleText = mb_substr($visibleText, 0, $lastPeriodPos + 1);
    } else {
        $visibleText .= '...';
    }
    return $visibleText;
}
?>

<div class="modern-container">
    <!-- Section Heading -->
    <div class="section-heading">
        <h1>Latest Blogs</h1>
        <p>Insights, tutorials, and creative thoughts</p>
    </div>

    <!-- Blog Grid -->
    <div class="blog-grid">
        <?php foreach ($blogs as $blog) : ?>
            <article class="blog-card">
                <div class="blog-card-image">
                    <img src="<?= base_url() . 'uploads/blogs/' . $blog['foto'] ?>" alt="<?= $blog['judul'] ?>">
                </div>
                <div class="blog-card-content">
                    <h3><?= $blog['judul'] ?></h3>
                    <p><?= createSummary($blog['konten']) ?></p>
                    <div class="blog-card-meta">
                        <span><i class="far fa-calendar"></i> <?= date('M d, Y', strtotime($blog['created_at'] ?? 'now')) ?></span>
                        <a href="<?= base_url() . 'blog/post/?title=' . $blog['slug'] ?>" class="read-more-btn">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>
        <?php endforeach ?>
    </div>
</div>

<style>
    .read-more-btn {
        color: var(--accent-cyan);
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition-fast);
    }
    
    .read-more-btn:hover {
        color: var(--accent-purple);
        text-shadow: var(--glow-cyan);
    }
    
    .read-more-btn i {
        margin-left: 5px;
        transition: var(--transition-fast);
    }
    
    .read-more-btn:hover i {
        transform: translateX(5px);
    }
    
    .blog-card-meta i {
        margin-right: 5px;
        color: var(--accent-cyan);
    }
</style>