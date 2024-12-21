<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("username", $_POST["username"], time() + (10 * 30), "/");
    echo "<p>cookie are set . Reload the page to set the cookie value</p>";
}
if (isset($_COOKIE["username"])) {
    echo "<p>Welcome back  </p>" . htmlspecialchars($_COOKIE["username"]) . "!!</p>";
} else {
    echo "welcome guest";
}
?>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Enter your Name:</label>
        <input type="text" id="username" name="username"><br>
        <input type="submit" value="Set Cookie">
    </form>
</body>

</html>