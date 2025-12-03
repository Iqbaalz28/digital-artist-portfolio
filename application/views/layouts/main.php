<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->config->item('app_name') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('uploads/') ?>logo/digital-artist.png" type="image/png">
    <script src="https://kit.fontawesome.com/851712c570.js" crossorigin="anonymous"></script>


    <style>
        body {
            background-color: #fff;
            font-family: 'Montserrat', sans-serif;
            margin: 5px;
        }

        .navbar {
            font-weight: 800;
            margin-top: 20px;
            margin-bottom: -20px;
        }

        .navbar-expand-lg {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar-brand {
            margin-bottom: -5px;
        }

        .close-icon {
            display: none;
        }

        @media (max-width: 767px) {
            .header {
                text-align: center;
                margin-top: -15px;
                z-index: 2;
            }

            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                background-color: white;
                z-index: 1;
            }

            .navbar-expand-lg {
                display: flex;
                flex-direction: row;
                align-items: center;
                position: relative;
            }

            .navbar-brand {
                order: 1;
                text-align: left;
                flex-grow: 1;
            }

            .navbar-toggler {
                order: 2;
                margin-top: 20px;
                margin-right: 25px;
                margin-left: -25px;
            }

            .navbar-collapse {
                background-color: black;
                padding: 50px;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                overflow-y: auto;
            }

            .navbar-nav {
                flex-direction: column;
            }

            .navbar-nav .nav-link {
                color: white;
            }

            .close-icon {
                display: block;
                position: absolute;
                top: -10px;
                right: 10px;
                padding: 40px;
                cursor: pointer;
            }

            .close-icon i {
                font-size: 28px;
            }

        }

        @media (min-width: 768px) {
            .header {
                text-align: center;
                margin-top: -80px;
                margin-bottom: -30px;
            }

            .navbar-brand {
                text-align: center;
                order: 2;
                flex-grow: 1;
            }
        }




        .footer {
            text-align: center;
            background-color: #fff;
            padding: 10px 0;
        }

        .ck-editor-content img {
            max-width: 100%;
            height: auto;
        }

        <?php if ($this->uri->segment('1') == 'about') {  ?>.vertical-images {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        <?php

        }
        ?>
    </style>

    <?php if ($this->uri->segment('1') == '' || $this->uri->segment('1') == 'illustration' || $this->uri->segment('1') == 'gallery') {  ?>

        <link rel="stylesheet" href="<?= base_url() ?>assets/css/fresco.css" />

        <!-- Main Stylesheets -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />


    <?php } ?>

</head>

<body>
    <?php $this->load->view('layouts/header') ?>

    <?php isset($page) ? $this->load->view($page) : null; ?>
  
    <?php $this->load->view('layouts/footer') ?>

    <!-- Back to Top Button -->
    <button id="back-to-top" title="Back to Top">↑</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script> -->

    <?php if ($this->uri->segment('1') == '' || $this->uri->segment('1') == 'illustration' || $this->uri->segment('1') == 'gallery') {  ?>

        <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/js/masonry.pkgd.min.js"></script>
        <script src="<?= base_url() ?>assets/js/fresco.min.js"></script>
        <script src="<?= base_url() ?>assets/js/main.js"></script>

    <?php } ?>

    <script>
        $(document).ready(function() {
            $('.close-icon').click(function() {
                $('.navbar-collapse').collapse('hide');
            });
        });

        // Back to Top Button
        var backToTopButton = $('#back-to-top');

        // Hide the button initially
        backToTopButton.hide();

        // Show/hide the button based on scroll position
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                backToTopButton.fadeIn();
            } else {
                backToTopButton.fadeOut();
            }
        });

        // Scroll to top when the button is clicked
        backToTopButton.click(function() {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });
    </script>

    <style>
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
        }

        @media (max-width: 767px) {
            #back-to-top {
                font-size: 20px;
                padding: 8px;
                margin-bottom: 25px;
                margin-right: 35px;
            }
        }
    </style>


</body>

</html>