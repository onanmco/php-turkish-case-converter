<?php
    function case_converter($str, $transform)
    {
        $lowercase = array('ç','ğ','ı','i','ö','ş','ü');
        $uppercase = array('Ç','Ğ','I','İ','Ö','Ş','Ü');
        if ($transform == 'uppercase') {
            $str = str_replace($lowercase, $uppercase, $str);
            $str = mb_strtoupper($str);
        }
        else if ($transform == 'lowercase') {
            $str = str_replace($uppercase, $lowercase, $str);
            $str = mb_strtolower($str);
        }
        return $str;
    }
    //test case
    $pangram = 'pİjamalı hasta yağız ŞofÖre çabucak gÜvendi.';
    $pangram_lowercase = case_converter($pangram, 'lowercase');
    $pangram_uppercase = case_converter($pangram, 'uppercase');

    print "<pre>";
    echo '<strong>Original string: </strong>' . '<br>' . $pangram;
    print "</pre>";

    print "<pre>";
    echo '<strong>Lowercase version: </strong>' . '<br>' . $pangram_lowercase;
    print "</pre>";

    print "<pre>";
    echo '<strong>Uppercase version: </strong>' . '<br>' . $pangram_uppercase;
    print "</pre>";
?>
