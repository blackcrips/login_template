<?php

include_once('./includes/autoLoadClassesMain.inc.php');
$controller = new Controller();
$controller->redirectForeignUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    
    <form action="./includes/logout.inc.php" method="post">
        <button name="logout">Logout</button>
    </form>
</body>
</html>