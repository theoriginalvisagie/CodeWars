<?php
    function arrayDiff($a, $b) {
        for($i=0;$i<=count($a);$i++){
            foreach($b as $check){
                if(in_array($check, $a)){
                    $index = array_search($check,$a);
                    unset($a[$index]);
                    $a = array_values($a);
                }
            }  
        }
        return $a;
    }
?>