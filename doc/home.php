<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>





    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      
      
        <a class="nav-link" href="#">【≽ܫ≼】</a>
      </li>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <form action="login.php" method="post">
      <li class="nav-item"> 
      <a class="nav-link" href="login.php" style="color: red;">logout</a>
          
        </li>
    </form>
      
    </ul>
  </div>
</nav>
<style>
  body {
    background: url("cat.jpg") no-repeat center center fixed;
    background-size: cover;
    overflow: hidden;
    margin: 0;
    height: 100vh;
    width: 100%;   
}
</style>

</body>
</html> 