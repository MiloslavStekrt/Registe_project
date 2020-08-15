<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $password = $_POST['pass'];
        $name = $_POST['name'];
        $age = $_POST['age'];

        $user = $name." your age is ".$age." and password is ".$password;
        echo($user)
    ?>
</body>
</html>