<?php

if (isset($_POST['subm'])) {
    echo "Yes. It works.<br>";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validation
    if (strlen($username) < 5) {
        echo "<h1>Username has to be longer than 5</h1>";
    }
    printf("Username: %s Password: %s", $username, $password);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
</head>
<body>
    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password"> <br>
        <input type="submit" name="subm">
    </form>

</body>
</html>