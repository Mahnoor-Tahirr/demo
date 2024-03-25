<?php
$cookie_name = "user";
$cookie_value = "admin";
setcookie($cookie_name,$cookie_value,time()+(60),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE[$cookie_name])){
        echo $_COOKIE[$cookie_name];
    }else{
        echo "cookie is not set";
    }
    ?>

</body>
</html>