<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>Moja Prva Stranica</title>
   </head>

   <body>
   <?php
    $broj = 4/3;

    echo $broj . "<br/>";
    echo round ($broj, 2) . "<br/>";
    echo round ($broj) . "<br/>";
    echo ceil($broj) . "<br />";
    echo floor($broj);
    echo "<hr/>";
    $polje = array(1,3,7,2,5,6);
    echo "Min: ". min($polje) . "<br />";
    echo "Max: ". max($polje);
    echo "<hr/>";
    
    echo round (sqrt(3), 2);
    echo "<hr/>";
    
    echo pow(2,10);
    echo "<hr/>";

    for ($i = 1; $i < 6; $i++)
    {
    $broj = rand(1,50);
    echo $broj . " ";
    }
    echo "<hr/>";

    for ($i = 1; $i < 3; $i++)
    {
    $broj = rand(1,10);
    echo $broj . " ";
    }




   ?>
  
   </body>

</html>
