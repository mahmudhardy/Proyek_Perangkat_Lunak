<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Proyek Perangkat Lunak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style_login.css" />

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/Logo_baru.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/Logo_baru.png">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="register.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="status" placeholder="Status (Mahasiswa/Penyewa)" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit" name="register" value="Daftar">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your account</span>
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="login" value="Masuk">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Untuk tetap terhubung dengan kami, silakan login dengan informasi pribadi Anda</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello!,</h1>
                    <p>Masukkan detail pribadi Anda dan mulailah perjalanan bersama kami</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/script_login.js"></script>
</body>

</html>