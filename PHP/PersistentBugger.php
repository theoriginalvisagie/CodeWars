<?php
    /**
     * Resturns Multiplicative Persistence
     */
    $cnt=0;
    $cnt = persistence(4,$cnt);
    return $cnt;
    
    function persistence(int $num,$cnt=0): int {
      if(strlen($num)>1){
        $num = str_split($num);
        print_r($num);
        $newNum = array_product($num);
        $cnt ++ ;
        if(strlen($newNum)>1){
          return persistence($newNum,$cnt);
        }else{
          $newNum = $newNum;
          return $cnt;
        }
      }else{
        return 0;
      }
    }
?>