<div class="modern-container">
    <!-- About Hero Section -->
    <div class="about-hero">
        <!-- Profile Images Slideshow -->
        <div class="about-slideshow">
            <div class="slideshow-container">
                <div class="slide active">
                    <img src="<?= base_url('uploads/foto_1/') . $profile['foto_1'] ?>" alt="Profile Photo 1">
                </div>
                <div class="slide">
                    <img src="<?= base_url('uploads/foto_2/') . $profile['foto_2'] ?>" alt="Profile Photo 2">
                </div>
                
                <!-- Navigation Arrows -->
                <button class="slide-arrow prev" onclick="changeSlide(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slide-arrow next" onclick="changeSlide(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <!-- Dots Navigation -->
            <div class="slide-dots">
                <span class="dot active" onclick="goToSlide(0)"></span>
                <span class="dot" onclick="goToSlide(1)"></span>
            </div>
        </div>

        <!-- About Content -->
        <div class="about-content">
            <div class="ck-editor-content">
                <?= $profile['konten'] ?>
            </div>
        </div>
    </div>

    <!-- Info Cards Section -->
    <div class="info-cards">
        <?php if (!empty($clients)) { ?>
            <div class="info-card">
                <h5><i class="fas fa-briefcase"></i> Selected Clients</h5>
                <ul>
                    <?php foreach ($clients as $value) { ?>
                        <li><?= $value['name'] ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if (!empty($interviews)) { ?>
            <div class="info-card">
                <h5><i class="fas fa-microphone"></i> Interviews</h5>
                <ul>
                    <?php foreach ($interviews as $value) { ?>
                        <li><em><?= $value['name'] ?></em></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if (!empty($honours)) { ?>
            <div class="info-card">
                <h5><i class="fas fa-trophy"></i> Honors & Awards</h5>
                <ul>
                    <?php foreach ($honours as $value) { ?>
                        <li><?= $value['name'] ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>

<style>
    /* Slideshow Styles */
    .about-slideshow {
        position: relative;
        width: 100%;
        max-width: 550px;
        margin-top: 110px;
    }
    
    .slideshow-container {
        position: relative;
        width: 100%;
        border-radius: 20px;
        overflow: hidden;
        border: 2px solid var(--glass-border);
        background: var(--bg-card);
    }
    
    .slide {
        display: none;
        width: 100%;
    }
    
    .slide.active {
        display: block;
        animation: fadeIn 0.5s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.98); }
        to { opacity: 1; transform: scale(1); }
    }
    
    .slide img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        display: block;
    }
    
    /* Navigation Arrows */
    .slide-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border: 1px solid var(--glass-border);
        color: var(--text-primary);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
        transition: var(--transition-fast);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        z-index: 10;
    }
    
    .slide-arrow.prev {
        left: 15px;
    }
    
    .slide-arrow.next {
        right: 15px;
    }
    
    .slide-arrow:hover {
        background: var(--accent-cyan);
        border-color: var(--accent-cyan);
        color: var(--bg-primary);
        box-shadow: var(--glow-cyan);
    }
    
    /* Dots Navigation */
    .slide-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 15px;
    }
    
    .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--glass-border);
        cursor: pointer;
        transition: var(--transition-fast);
    }
    
    .dot.active {
        background: linear-gradient(135deg, var(--accent-cyan), var(--accent-purple));
        box-shadow: var(--glow-cyan);
    }
    
    .dot:hover {
        background: var(--accent-cyan);
    }
    
    /* About page specific styles */
    .about-content {
        color: var(--text-secondary);
    }
    
    .about-content h1, .about-content h2, .about-content h3, 
    .about-content h4, .about-content h5, .about-content h6 {
        color: var(--text-primary);
        margin-bottom: 15px;
    }
    
    .about-content p {
        color: var(--text-secondary);
        line-height: 1.8;
        margin-bottom: 15px;
    }
    
    .about-content a {
        color: var(--accent-cyan);
        text-decoration: none;
        transition: var(--transition-fast);
    }
    
    .about-content a:hover {
        color: var(--accent-purple);
        text-shadow: var(--glow-cyan);
    }
    
    .ck-editor-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 15px 0;
    }
    
    @media (max-width: 768px) {
        .slide img {
            height: 300px;
        }
    }
</style>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
    if (index >= slides.length) currentSlide = 0;
    if (index < 0) currentSlide = slides.length - 1;
    
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}

function changeSlide(direction) {
    currentSlide += direction;
    showSlide(currentSlide);
}

function goToSlide(index) {
    currentSlide = index;
    showSlide(currentSlide);
}

// Auto slideshow (optional - every 5 seconds)
setInterval(() => {
    changeSlide(1);
}, 5000);
</script>