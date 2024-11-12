<?php


$emailError = $passwordError = $signupMessage = '';

if (isset($_POST['submit'])) {
    $emailValue = isset($_POST['emailName']) ? $_POST['emailName'] : '';
    $passwordValue = isset($_POST['passName']) ? $_POST['passName'] : '';

    
    if (empty($emailValue)) {
        $emailError = "<p style='color:red;'>Enter your email</p>";
    } elseif (!preg_match("/^\w+@emsi\.ma$/", $emailValue)) {
        $emailError = "<p style='color:red;'>Please enter a valid EMSI email.</p>";
    }

    if (empty($passwordValue)) {
        $passwordError = "<p style='color:red;'>Enter your password</p>";
    } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*\d).{6,}$/', $passwordValue)) {
        $passwordError = "<p style='color:red;'>Password should be at least 6 characters and contain both letters and numbers.</p>";
    }

    
    if (empty($emailError) && empty($passwordError)) {
        if (!isset($_SESSION['email'])) {
            // Signup process
            $_SESSION['email'] = $emailValue;
            $_SESSION['password'] = $passwordValue;
            $signupMessage = "<p style='color:green;'>Signup successful! You can now log in.</p>";
        } else {
            // Login process
            if ($emailValue === $_SESSION['email'] && $passwordValue === $_SESSION['password']) {
                header("Location: home.php");
                exit();
            } else {
                $emailError = "<p style='color:red;'>Invalid login credentials</p>";
            }
        }
    }
}
?>



