<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Login or Signup</title>
</head>
<body>
<div class="wrapper">
    

    <!-- Form Box -->
    <div class="form-box">
        <!-- Login Form -->
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mx-1 mx-md-4">
                <input type="hidden" name="action" value="login">
                <div class="input-box">
                    <input type="email" class="input-field" placeholder="Email" name="emailName" />
                    <i class="bx bx-user"></i>
                    <span><?php if (isset($loginError)) echo $loginError; ?></span>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="passName" />
                    <i class="bx bx-lock-alt"></i>
                    <span><?php if (isset($loginError)) echo $loginError; ?></span>
                </div>
                <div class="input-box">
                    <input type="submit" name="submit" class="submit" value="Sign In 【≽ܫ≼】">
                </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>

        <!-- Registration Form -->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="action" value="signup">
                <div class="input-box">
                    <input type="email" class="input-field" placeholder="Email" name="emailName" />
                    <i class="bx bx-envelope"></i>
                    <span><?php if (isset($signupError)) echo $signupError; ?></span>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="passName">
                    <i class="bx bx-lock-alt"></i>
                    <span><?php if (isset($signupError)) echo $signupError; ?></span>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Register 【≽ܫ≼】">
                </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function myMenuFunction() {
    var i = document.getElementById("navMenu");
    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
}

function login() {
    document.getElementById("login").style.left = "4px";
    document.getElementById("register").style.right = "-520px";
    document.getElementById("loginBtn").classList.add("white-btn");
    document.getElementById("registerBtn").classList.remove("white-btn");
}

function register() {
    document.getElementById("login").style.left = "-510px";
    document.getElementById("register").style.right = "5px";
    document.getElementById("registerBtn").classList.add("white-btn");
    document.getElementById("loginBtn").classList.remove("white-btn");
}
</script>

</body>
</html>
