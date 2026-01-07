<div class="modern-container">
    <div class="contact-wrapper">
        <!-- Contact Heading -->
        <h1 class="glow-text">Get In Touch</h1>
        
        <!-- Contact Content from CMS -->
        <div class="contact-content">
            <?= str_replace('<img', '<img class="img-fluid" style="border-radius: 12px;"', $contact['konten']) ?>
        </div>
    </div>
</div>

<style>
    .contact-wrapper {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
        padding: 60px 0;
    }
    
    .contact-wrapper h1 {
        font-size: 48px;
        margin-bottom: 40px;
        background: linear-gradient(135deg, var(--accent-cyan), var(--accent-purple));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .contact-content {
        color: var(--text-secondary);
        line-height: 1.8;
    }
    
    .contact-content h1, .contact-content h2, .contact-content h3,
    .contact-content h4, .contact-content h5, .contact-content h6 {
        color: var(--text-primary);
        margin-bottom: 15px;
    }
    
    .contact-content p {
        color: var(--text-secondary);
        margin-bottom: 15px;
    }
    
    .contact-content a {
        color: var(--accent-cyan);
        text-decoration: none;
        transition: var(--transition-fast);
        padding: 5px 15px;
        border: 1px solid var(--accent-cyan);
        border-radius: 25px;
        display: inline-block;
        margin: 5px;
    }
    
    .contact-content a:hover {
        background: linear-gradient(135deg, var(--accent-cyan), var(--accent-purple));
        border-color: transparent;
        color: white;
        box-shadow: var(--glow-cyan);
    }
    
    .contact-content img {
        max-width: 100%;
        height: auto;
        margin: 20px 0;
    }
</style>
