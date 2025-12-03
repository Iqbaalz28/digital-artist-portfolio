<?php
$kontak = $this->db->query("SELECT instagram, linkedin FROM contacts WHERE id = 1")->row_array();
?>

<div class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand mt-3" href="<?= site_url('illustration') ?>">
                <img src="<?= base_url() . 'uploads/logo/' . 'digital-artist.png' ?>" alt="Your Logo" class="img-fluid" width="30%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-overlay justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('illustration') ?>">Illustrations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('gallery') ?>">Galleries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('blog') ?>">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item social ml-auto"> <!-- Menggunakan ml-auto untuk menggeser ke kanan -->
                    <a class="nav-link" href="<?= $kontak['instagram'] ?>" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a class="nav-link" href="<?= $kontak['linkedin'] ?>" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <div class="close-icon">
                    <i class="fas fa-times"></i>
                </div>
            </ul>
        </div>
    </nav>
</div>