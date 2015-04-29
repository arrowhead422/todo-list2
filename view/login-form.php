
<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<head><link rel="stylesheet" type="text/css" href="css/login-form.css"></head>
<h1>Login</h1>
<button type="button">
        <a href="<?php echo $path . "register.php"?>">register</a>
    </button>

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
    <input type="text">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Password</label>
  </div>
    

    
    <div>
        <input type="hidden" name="login" value="login" />
        <button type="submit">Submit</button>
    </div>

</form>
