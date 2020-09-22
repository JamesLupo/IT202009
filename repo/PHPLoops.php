<!DOCTYPE html>
<html>
<body>

<?php

 $arr1 = array("1", "2", "3", "4", "5", "6");
 foreach ($arr1 as $out){
  if ($out % 2 == 0){
   echo $out;
   }
  }
 # I made a foreach loop that goes through the array I created
 # I then nested an if statement in the foreach loop
 # The if loop then takes the number in the loop and divides by 2 
 # If the number is divisable by 2 then it gets printed out
?> 

</body>
</html>