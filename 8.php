<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
   $DayOfTheWeek = array(
     'Sunday' => "#FF53FF",
     'Monday' => "#FF5362",
     'Tuesday' => "#FF5378",
     'Wednesday' => "#FF97FF",
     'Thursday' => "#00798c",
     'Friday' => "#FF7802",
     'Saturday' => "#FF5390",
   );
   $currentDay = date("l");
   $backgroundColor = "#FFFFFF";
   if(array_key_exists($currentDay,$DayOfTheWeek)){
     $backgroundColor = $DayOfTheWeek[$currentDay];
   }
?>
<style>
    h1{
        color:<?php echo $backgroundColor ?>
    }
</style>
<body>
    <h1>Welcome the day of the Week is : <?php echo $currentDay ?></h1>
</body>
</html>