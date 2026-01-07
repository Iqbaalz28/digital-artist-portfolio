<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->config->item('app_name') ?></title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/851712c570.js" crossorigin="anonymous"></script>
    
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('uploads/') ?>logo/digital-artist.png" type="image/png">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fresco Lightbox (for gallery) -->
    <?php if ($this->uri->segment('1') == '' || $this->uri->segment('1') == 'illustration' || $this->uri->segment('1') == 'gallery') { ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/fresco.css" />
    <?php } ?>
    
    <!-- Modern 3D Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/modern.css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-spinner"></div>
    </div>

    <!-- 3D Canvas Background -->
    <div id="canvas-container"></div>

    <!-- Modern Navigation -->
    <nav class="modern-navbar">
        <div class="navbar-content">
            <!-- Logo -->
            <a class="modern-logo" href="<?= site_url('illustration') ?>">
                <img src="<?= base_url() . 'uploads/logo/' . 'digital-artist.png' ?>" alt="Digital Artist Logo">
            </a>

            <!-- Navigation Links -->
            <?php 
            $kontak = $this->db->query("SELECT instagram, linkedin FROM contacts WHERE id = 1")->row_array();
            $currentPage = $this->uri->segment('1');
            ?>
            <ul class="modern-nav-links">
                <li>
                    <a href="<?= site_url('illustration') ?>" class="<?= ($currentPage == '' || $currentPage == 'illustration') ? 'active' : '' ?>">
                        Illustrations
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('gallery') ?>" class="<?= $currentPage == 'gallery' ? 'active' : '' ?>">
                        Galleries
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('about') ?>" class="<?= $currentPage == 'about' ? 'active' : '' ?>">
                        About
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('blog') ?>" class="<?= $currentPage == 'blog' ? 'active' : '' ?>">
                        Blogs
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('contact') ?>" class="<?= $currentPage == 'contact' ? 'active' : '' ?>">
                        Contact
                    </a>
                </li>
            </ul>

            <!-- Social Links -->
            <div class="modern-social-links">
                <a href="<?= $kontak['instagram'] ?>" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="<?= $kontak['linkedin'] ?>" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="modern-content">
        <?php isset($page) ? $this->load->view($page) : null; ?>
    </main>

    <!-- Footer -->
    <footer class="modern-footer">
        <p>&copy; <?= date('Y') ?> Digital Artist. All rights reserved.</p>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" title="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    
    <!-- Fresco Lightbox -->
    <?php if ($this->uri->segment('1') == '' || $this->uri->segment('1') == 'illustration' || $this->uri->segment('1') == 'gallery') { ?>
        <script src="<?= base_url() ?>assets/js/fresco.min.js"></script>
    <?php } ?>
    
    <!-- Modern JS -->
    <script src="<?= base_url() ?>assets/js/modern.js"></script>
</body>

</html>