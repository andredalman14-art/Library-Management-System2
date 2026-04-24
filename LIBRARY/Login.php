<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB Library Login</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body class="auth-page">
     <div class="wrapper">
        <a href="home.php" class="icon-close">
            <ion-icon name="close"></ion-icon>
        </a>
        <!-- Login Form -->
        <div class="form-box login">
            <h2> Login</h2>
            <form action="#">
                <!-- Email -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span> 
                    <input type="email"required>
                    <label>Email</label>
                </div>
                <!-- Password -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="forgot_password.php">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login
                </button>
                <div class="login-register">
                    <p>Don't have an account? <a href="Reg.php" class="register-link">Register Now</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="login_reg.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>