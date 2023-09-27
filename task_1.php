<?php 

$text = "The quick brown fox jumps over the lazy dog.";

function strManipulation($text){
    
$lowerText = strtolower($text);
$replacedText = str_replace("brown",'red',$lowerText);
echo $replacedText;

} 

strManipulation($text);