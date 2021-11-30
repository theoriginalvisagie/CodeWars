<?php
    function XO($s) {
        return (substr_count(strtolower($s), 'x')===substr_count(strtolower($s), 'o')) ? true : false;
    }

    echo XO('ooxx');
?>