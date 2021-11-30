<?php

    /**
     * @param $str = string to submit for reversal
     * Test to see if word contains 5 or more characters   
     * if count of word >= 5 word needs to reverersed
     * i.e. reverersed => desrerever
     */
    function spinWords(string $str): string {
        $arrString = explode(" ", $str);
        
        foreach($arrString as $str){
        if(strlen($str) >= 5){
            $revArray[] = strrev($str);
        }else{
            $revArray[] = $str;
        }
        }
        
        $revString = implode(" ",$revArray);
        
        return $revString;
    }
?>