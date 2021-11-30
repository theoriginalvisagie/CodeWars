<?php
    function accum($s) {
        $arr = str_split(strtolower($s));
        $newStr = '';
        foreach($arr as $key=>$value){
          $amount = $key;
          for($i=0; $i<=$amount; $i++){
            ($i==0) ? $newStr .= ucwords($value): $newStr .= $value ;
          }
          $newStr .="-";
        }
      return rtrim($newStr,"-");
    }

    echo accum("abcd");
?>