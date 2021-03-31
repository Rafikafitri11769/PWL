<?php
$transport = array('sunglass', 'motorcycle', 'car', 'plane');
echo "<pre>";
print_r ($transport);
echo "</pre>";
$mode = current($transport);
echo $mode."<br>"; // $mode = 'sunglass';
$mode = next($transport);
echo $mode."<br>"; // $mode = 'motorcycle';
$mode = current($transport);
echo $mode."<br>"; // $mode = 'motorcycle';
$mode = prev($transport);
echo $mode."<br>"; // $mode = 'sunglass';
$mode = end($transport);
echo $mode."<br>"; // $mode = 'plane';
$mode = current($transport);
echo $mode."<br>"; // $mode = 'plane';
?>