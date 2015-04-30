
<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="css/login-form.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <header>
     <nav>
       <ul class="navbar">
         <li><a href="house.php">Home</a></li>
         <li><a href="register.php">Register</a></li>
         <li><a href="index.php">Blog</a></li>
       </ul>
     </nav>
</header>
</head>
<body>



<h1>Login</h1>

    
<form method="POST" action="<?php echo $path . "controller/login-user.php"; ?>">
<form>
    
  <div class="group">      
    <input type="text">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>E-mail</label>
  </div>
    
  <div class="group">      
    <input type="text">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Username</label>
  </div>

  <div class="group">      
    <input type="password">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Password</label>
  </div>
    

    
    <div>
        <input type="hidden" name="login" value="login" />
        <button type="submit" class="submit">Submit</button>
    </div>

</form>
</body>
</html>