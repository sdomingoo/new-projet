<?php
if (isset($_POST['submit'])) {
    $emailValue = isset($_POST['emailName']) ? $_POST['emailName'] : '';
    $passwordValue = isset($_POST['passName']) ? $_POST['passName'] : '';
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action === "signup") {

        if (empty($emailValue) || empty($passwordValue)) {
            $signupError = "<p style='color:red;'>Enter your email or password</p>";
        } elseif (!preg_match("/^\w+@emsi/.ma$/", $emailValue)) {
            $signupError = "<p style='color:red;'>Please enter a valid EMSI email.</p>";
        } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*\d).{6,}$/', $passwordValue)) {
            $signupError = "<p style='color:red;'>Password should be at least 6 characters and contain both letters and numbers.</p>";
        } else {
            
            $_SESSION['email'] = $emailValue;
            $_SESSION['password'] = $passwordValue;
            header("Location: login.php");
            exit();
        }
    } elseif ($action === "login") {
        
        if (empty($emailValue) || empty($passwordValue)) {
            $loginError = "<p style='color:red;'>Enter your email or password</p>";
        } elseif (isset($_SESSION['email']) && isset($_SESSION['password']) &&
                  $emailValue === $_SESSION['email'] && $passwordValue === $_SESSION['password']) {
            header("Location: home.php"); 
            exit();
        } else {
            $loginError = "<p style='color:red;'>Invalid login credentials</p>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup / Login Form</title>
</head>
<body>
    <form action="" method="post">
        <h2>Signup / Login</h2>

        <!-- Email Field -->
        <label for="email">Email:</label>
        <input type="text" name="emailName" id="email" value="<?php echo htmlspecialchars($emailValue ?? ''); ?>">
        <?php echo $emailError; ?>

        <!-- Password Field -->
        <label for="password">Password:</label>
        <input type="password" name="passName" id="password">
        <?php echo $passwordError; ?>

        <!-- Submit Button -->
        <button type="submit" name="submit">Submit</button>

        <!-- Signup Confirmation Message -->
        <?php echo $signupMessage; ?>
    </form>
</body>
</html>