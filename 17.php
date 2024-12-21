<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="name"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="email"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
<?php

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    if(empty($name)){
        echo "please Enter name";
    }else{
        echo "Name is".$name."Thank you";
    }
    if(empty($email)){
    echo "Please enter a valid mail";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a proper Email";
        
    }else{
        echo "Mail is has sent Thank you";
    }

 }
?>
</html>