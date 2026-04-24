<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB Library Registration</title>
    <link rel="stylesheet" href="css/style_registration.css">
</head>

<body class="auth-page">
    <!-- NEW CODE - Proper Close Button that goes back to Home -->
    <div class="wrapper">
        <a href="Login.php" class="icon-close">
            <ion-icon name="close"></ion-icon>
        </a>
        <!-- Registration Form -->
        <div class="form-box register">
            <h2> Registration </h2>
            <form action="#">
                <!-- First Name -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text"required>
                    <label>First Name</label>
                </div>
                <!-- Last Name -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" required>
                    <label>Last name</label>
                </div>
                <!-- Gender -->
                <div class="input-box">
                    <select id="gender" name="gender" required>
                        <option value="">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
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
                <!-- Confirm Password -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Confirmed Password</label>
                </div>
            
                <button type="submit" class="btn">Register
                </button>
                <div class="login-register">
                    <p>Have an account? <a href="Login.php" class="register-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="login_reg.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>