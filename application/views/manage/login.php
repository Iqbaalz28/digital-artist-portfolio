<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login</title>
    <link rel="icon" href="<?= base_url('uploads/') ?>logo/digital-artist.png" type="image/png">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/851712c570.js" crossorigin="anonymous"></script>

    <style>
        :root {
            --bg-primary: #0a0a0f;
            --bg-secondary: #12121a;
            --accent-cyan: #00d4ff;
            --accent-purple: #7c3aed;
            --text-primary: #ffffff;
            --text-secondary: #a0a0b0;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--bg-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(124, 58, 237, 0.15) 0%, transparent 50%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Floating Particles */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--accent-cyan);
            border-radius: 50%;
            opacity: 0.5;
            animation: float 15s infinite ease-in-out;
        }

        .particle:nth-child(1) { left: 10%; top: 20%; animation-delay: 0s; }
        .particle:nth-child(2) { left: 20%; top: 80%; animation-delay: 2s; background: var(--accent-purple); }
        .particle:nth-child(3) { left: 50%; top: 30%; animation-delay: 4s; }
        .particle:nth-child(4) { left: 70%; top: 70%; animation-delay: 6s; background: var(--accent-purple); }
        .particle:nth-child(5) { left: 85%; top: 40%; animation-delay: 8s; }
        .particle:nth-child(6) { left: 30%; top: 60%; animation-delay: 10s; background: var(--accent-purple); }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); opacity: 0.5; }
            25% { transform: translateY(-30px) translateX(20px); opacity: 1; }
            50% { transform: translateY(-20px) translateX(-20px); opacity: 0.5; }
            75% { transform: translateY(30px) translateX(10px); opacity: 1; }
        }

        /* Login Container */
        .login-container {
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }

        /* Login Card */
        .login-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 50px 40px;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-cyan), var(--accent-purple), var(--accent-cyan));
            background-size: 200% 100%;
            animation: gradient-move 3s ease infinite;
        }

        @keyframes gradient-move {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Logo */
        .login-logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-logo img {
            height: 80px;
            filter: drop-shadow(0 0 20px rgba(0, 212, 255, 0.5));
            transition: all 0.3s ease;
        }

        .login-logo img:hover {
            filter: drop-shadow(0 0 30px rgba(0, 212, 255, 0.8));
            transform: scale(1.05);
        }

        .login-logo h1 {
            font-size: 24px;
            font-weight: 700;
            margin-top: 15px;
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .login-logo p {
            color: var(--text-secondary);
            font-size: 14px;
            margin-top: 5px;
        }

        /* Form Group */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            color: var(--text-secondary);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .form-group .input-wrapper {
            position: relative;
        }

        .form-group .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent-cyan);
            font-size: 16px;
        }

        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="text"] {
            width: 100%;
            padding: 16px 20px 16px 50px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: var(--text-primary);
            font-size: 15px;
            font-family: 'Montserrat', sans-serif;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder {
            color: var(--text-secondary);
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--accent-cyan);
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.2);
            background: rgba(255, 255, 255, 0.05);
        }

        /* Checkbox */
        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--accent-cyan);
            cursor: pointer;
        }

        .checkbox-wrapper label {
            color: var(--text-secondary);
            font-size: 13px;
            cursor: pointer;
            margin: 0;
            text-transform: none;
            letter-spacing: normal;
        }

        /* Submit Button */
        .btn-login {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-purple));
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 10px;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.4);
        }

        .btn-login:active {
            transform: translateY(-1px);
        }

        /* Error Alert */
        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            border-radius: 12px;
            padding: 15px 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .alert-error i {
            color: #ef4444;
            font-size: 18px;
        }

        .alert-error span {
            color: #fca5a5;
            font-size: 14px;
        }

        /* Back Link */
        .back-link {
            text-align: center;
            margin-top: 30px;
        }

        .back-link a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .back-link a:hover {
            color: var(--accent-cyan);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-card {
                padding: 40px 25px;
            }
        }
    </style>
</head>

<body>
    <!-- Background Animation -->
    <div class="bg-animation">
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </div>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <!-- Logo -->
            <div class="login-logo">
                <img src="<?= base_url() . 'uploads/logo/' . 'digital-artist.png' ?>" alt="Digital Artist">
                <h1>Admin Panel</h1>
                <p>Sign in to your account</p>
            </div>

            <!-- Error Alert -->
            <?php if ($this->session->flashdata('failed')) { ?>
                <div class="alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Email atau Password salah!</span>
                </div>
            <?php } ?>

            <!-- Login Form -->
            <?php echo form_open('manage/auth/login'); ?>
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email" placeholder="Enter your email" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="showPass" onclick="togglePassword()">
                        <label for="showPass">Show password</label>
                    </div>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            <?php echo form_close(); ?>

            <!-- Back Link -->
            <div class="back-link">
                <a href="<?= site_url('illustration') ?>">
                    <i class="fas fa-arrow-left"></i> Back to Website
                </a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            var input = document.getElementById("password");
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>
</body>

</html>