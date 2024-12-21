<?php 
  function remove_D_arr($array){
    $result = array_values(array_unique($array));
    return $result;
  }
  $sortedList = [10,20,20,30,30,40,50,50,60,70,80,80];
  $uniquesList = remove_D_arr($sortedList);
  echo "The Sorted List is :";
  print_r($sortedList);
  echo "<br>UniqueList";
  print_r($uniquesList)
?>