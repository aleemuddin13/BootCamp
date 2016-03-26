<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function shift($string, $distance) {
    $distance = $distance % 26;
    $string = strtolower($string);
    $result = array();
    $characters = str_split($string);

    if ($distance < 0) {
        $distance += 26;
    }

    foreach ($characters as $idx => $char) {
        if($char==' ')
          $result[$idx] = chr(32);
        else
        $result[$idx] = chr(97 + (ord($char) - 97 + $distance) % 26);
    }   

    return join("", $result);
}
