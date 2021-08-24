<?php

function calc (int|float $x , int|float $y , string $op) : int|float
{

    switch ($op) {
        case 'add':
            return $x + $y ;
        case 'sub':
                return $x - $y ;
        case 'mul':
                    return $x * $y ;   
        case 'div':
                        return $x / $y ;
    }
}
  
      if (isset($_GET['submit'])) {
          
    //    echo '<pre>' ;
    //    print_r($_GET) ;
    //    echo '</pre>' ;

    $x = $_GET['x'];
    $y = $_GET['y'];
    $operation = $_GET['operation'];

      
      $result =  calc($x , $y , $operation);
      header("location: calculate.php?result=$result");
    
    
    
    }else {
          header("location: calculate.php");
      }



?>