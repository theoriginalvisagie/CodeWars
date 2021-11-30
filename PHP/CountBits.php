<?
    /**
     * @param int $n - number to convert to binary
     * returns numer of 1's found in binary representation of $n
     */
    function countBits($n){
        $binary = decbin($n);
        
        return substr_count($binary, '1');
    }

    echo countBits(12);
      
?>