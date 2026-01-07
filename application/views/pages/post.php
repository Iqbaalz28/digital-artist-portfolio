<div class="modern-container">
    <!-- Blog Post Header -->
    <article class="blog-post">
        <header class="blog-post-header">
            <h1 class="blog-post-title"><?= $blog['judul'] ?></h1>
            <div class="blog-post-meta">
                <span><i class="far fa-calendar"></i> <?= pretty_date($blog['created_at'], 'd F Y', false) ?></span>
                <span><i class="far fa-user"></i> <?= $blog['full_name'] ?></span>
            </div>
        </header>

        <!-- Blog Content -->
        <div class="blog-post-content ck-editor-content">
            <?= $blog['konten'] ?>
        </div>

        <!-- Back Button -->
        <div class="blog-post-footer">
            <a href="<?= site_url('blog') ?>" class="back-btn">
                <i class="fas fa-arrow-left"></i> Back to Blogs
            </a>
        </div>
    </article>
</div>

<style>
    .blog-post {
        max-width: 900px;
        margin: 0 auto;
    }
    
    .blog-post-header {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 30px;
        border-bottom: 1px solid var(--glass-border);
    }
    
    .blog-post-title {
        font-size: 42px;
        margin-bottom: 20px;
        background: linear-gradient(135deg, var(--accent-cyan), var(--accent-purple));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1.3;
    }
    
    .blog-post-meta {
        color: var(--text-secondary);
        font-size: 14px;
    }
    
    .blog-post-meta span {
        margin: 0 15px;
    }
    
    .blog-post-meta i {
        color: var(--accent-cyan);
        margin-right: 5px;
    }
    
    .blog-post-content {
        color: var(--text-secondary);
        line-height: 1.9;
        font-size: 16px;
    }
    
    .blog-post-content h1, .blog-post-content h2, .blog-post-content h3,
    .blog-post-content h4, .blog-post-content h5, .blog-post-content h6 {
        color: var(--text-primary);
        margin: 30px 0 15px;
    }
    
    .blog-post-content p {
        margin-bottom: 20px;
    }
    
    .blog-post-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 20px 0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }
    
    .blog-post-content a {
        color: var(--accent-cyan);
        text-decoration: none;
        transition: var(--transition-fast);
    }
    
    .blog-post-content a:hover {
        color: var(--accent-purple);
        text-shadow: var(--glow-cyan);
    }
    
    .blog-post-content blockquote {
        border-left: 4px solid var(--accent-cyan);
        padding-left: 20px;
        margin: 30px 0;
        font-style: italic;
        color: var(--text-primary);
    }
    
    .blog-post-content code {
        background: var(--bg-secondary);
        padding: 3px 8px;
        border-radius: 4px;
        color: var(--accent-cyan);
    }
    
    .blog-post-content pre {
        background: var(--bg-secondary);
        padding: 20px;
        border-radius: 12px;
        overflow-x: auto;
        margin: 20px 0;
    }
    
    .blog-post-footer {
        margin-top: 50px;
        padding-top: 30px;
        border-top: 1px solid var(--glass-border);
    }
    
    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: var(--accent-cyan);
        text-decoration: none;
        padding: 12px 25px;
        border: 1px solid var(--accent-cyan);
        border-radius: 30px;
        transition: var(--transition-fast);
    }
    
    .back-btn:hover {
        background: linear-gradient(135deg, var(--accent-cyan), var(--accent-purple));
        border-color: transparent;
        color: white;
        box-shadow: var(--glow-cyan);
    }
</style>