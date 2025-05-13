<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="login-container">

         <!--Icon Theme Toggle-->
        <a href="#" id="theme-toggle">
            <i class="bx bx-sun" id="moon-icon">☀️</i>
            <i class="bx bx-moon" id="sun-icon" style="display:none;">🌙</i>
        </a>

        <form id="registerForm" action="../Connection/signup.php" method="POST">
            <h2 class="text">Signup</h2>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="show-password">
                <input type="checkbox" id="showPassword" onclick="togglePassword()">
                <label for="showPassword">Show Password</label>
            </div>
            <button type="submit">Login</button>

            <div class="signup-link">
                Already have an account? <a href="index.php">Sign In</a>
            </div>
        </form>
    </div>

    <script>

        //show password function
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
    <script src="../JS/darkmode.js"></script>
</body>

</html>