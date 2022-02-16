<?php
    /**
     * @param string $s String to turn into camelCase
     * @return string camelCased string
     * @example camelCase('hello world') // returns 'HelloWorld'
     */
    function camel_case(string $s): string {
        if($s != ""){
          $arrString = array_filter(explode(" ",$s));
          foreach($arrString as $s=>$r){
            $arrString[$s] = ucwords($r);
          }
          
          $s = implode($arrString);
        } 
        return $s;
    }
?>