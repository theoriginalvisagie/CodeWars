<?php
    /**
     * @return array of anagrams of the given word
     */
    function anagrams(string $word, array $words): array {
        $anagrams = array();
        $wordArray = str_split($word); sort($wordArray); implode($wordArray);
        
          foreach($words as $w){
            $anagramsArraySort = str_split($w); sort($anagramsArraySort); implode($anagramsArraySort);
            if($wordArray == $anagramsArraySort){
              $anagrams[] = $w;
            }
          }
        return $anagrams;
      }
?>
