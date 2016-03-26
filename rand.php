<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'dh.php';
$id = rand(1, 7);
$query = mysql_query("select question from question where id = '$id'");
$row = mysql_fetch_array($query);
//print_r($row);
$que = $row[0];
$quel = strtolower($que);
a:
$i = rand(-3, 3);
if($i==0)
    goto a;
$j= -$i;
include 'shift.php';
$ans = shift($que, $i);
