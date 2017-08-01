<?php

 $a = 10;
 $b = 30;

 $operator = '/';

 switch ($operator){
     case "+" :
         echo $a + $b;
         break;
     case "-" :
         echo $a - $b;
         break;
     case "*" :
         echo $a*$b;
         break;
     case "/" :
         if ($b>0){ echo $a/$b;}
         else
         {echo "деление на 0 невозможно!";}
         break;
     case "%":
         if ($b>0){ echo $a%$b;}
         else
         {echo "деление на 0 невозможно!";}
         break;
 }
