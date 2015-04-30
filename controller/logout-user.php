<!DOCTYPE html>
<html>
<head>
	 <button type="button">
        <a href="<?php echo $path . "index.php"?>">Blog</a>
    </button>
    <button type="button">
        <a href="<?php echo $path . "login.php"?>">login</a>
    </button>
	<title></title>
</head>
<body>

</body>
</html>
<?php
    require_once(__DIR__ . "/../model/config.php");
    
    unset($_SESSION["authenticated"]);

    session_destroy();