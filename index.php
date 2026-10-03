<?php
$username = "BSIT BA 3101";
$user_id = 12345;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo BA 01</title>
</head>

<body>
     <h1>Hello, World!</h1>
    <?php echo "hello, world!"; ?>

    <h2>username: <u><?php echo  $username;?></u></h2>   

<button type= "button" onclick="greetUser()">Greet User</button>

<script>
    var userName = "<?php echo $username; ?>";
    var userID = "<?php echo $user_id; ?>";

    function greetUser() {
        alert("Hello " + userName + " Your user ID is: " + userID);
    }
</script>
</body>
</html>

