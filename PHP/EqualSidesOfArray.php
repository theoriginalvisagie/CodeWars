<?php
    function find_even_index($arr){
        $n = sizeof($arr);
        $i=0; 
        $j=0; 
        $leftsum=0;
        $rightsum=0; 
      
        for ($i = 0; $i < $n; ++$i){     
      
          $leftsum = 0; 
          for ($j = 0; $j < $i; $j++){
              $leftsum += $arr[$j]; 
          } 
      
          $rightsum = 0; 
          for ($j = $i + 1; $j < $n; $j++){
              $rightsum += $arr[$j]; 
          }
      
          if ($leftsum == $rightsum) 
            return $i; 
        } 
      
        return -1; 
    }

    $arr = array(1, 2, 3, 4, 3, 2, 1);
    echo find_even_index($arr);
?>