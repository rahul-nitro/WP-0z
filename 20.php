<!-- "Part A -->
<?php
echo "Part A Program";
try{
    $a = 10;
    $b = 0;
    $result = $a / $b;
    echo $result;


}catch(DivisionByZeroError $e){
    echo "<br>Division ByZero Is not possible <br>";
}

?>




<!-- Part B -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOOB 20</title>
</head>
<?php 
echo "Part B Program ";
 function check(){
    $x = checkdate(20,20,2005);
    echo $x;
    if($x == 1){
        echo "Date is correct";
    }else{
        throw new Exception("Date Format is Wrong");
    }
 }
 try{
    check();
 }catch(Exception $e){
    echo "<br>Date is wrong";
 }


?>
<body>
    
</body>
</html>