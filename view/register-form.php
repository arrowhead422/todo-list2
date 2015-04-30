<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<head><link rel="stylesheet" type="text/css" href="css/login-form.css">
<link rel="stylesheet" type="text/css" href="css/login-form.css"></head>
<h1>Register</h1>
<header>
     <nav>
       <ul class="navbar">
         <li><a href="house.php">Home</a></li>
         <li><a href="login.php">Login</a></li>
         <li><a href="index.php">Blog</a></li>
       </ul>
     </nav>
</header>
<body id="homer">
<form method="POST" action="<?php echo $path . "controller/create-user.php"; ?>">
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
<footer>
    <script type="text/javascript" src="javascrip/login-form.js"></script>
</footer>