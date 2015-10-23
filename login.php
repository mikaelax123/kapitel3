<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <h3>Login</h3>
    <?php
    $user = "";
    $pass = "";
    if (!empty($_REQUEST['username']) && !empty($_REQUEST['pass'])) {
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['pass'];
    }
    if ($user != "PANNKAKA" && $pass != "pannkaka") {
        ?>
        <form action="login.php" method="post">
            <fieldset>
                <label>Username: </label>
                <input type="text" name="username">
                <br>
                <label>Password: </label>
                <input type="password" name="pass">
                <br>
                <input type="submit" value="Login">
            </fieldset>
        </form>
        <?php
            }
    else {
        echo "<p>du är inloggad</p>";
    }

    ?>

</body>

</html>
