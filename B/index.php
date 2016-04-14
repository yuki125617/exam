<?php
$start=$_POST["start"];
$end=$_POST["end"];

function add($x,$y) 
{ 
$a=$x+$y; 
return $a; 
} 

//減 
function sub($x,$y) 
{ 
$a=$x-$y; 
return $a; 
} 

//乘 
function mul($x,$y) 
{ 
$a=$x*$y; 
return $a; 
} 

//除 
function div($x,$y) 
{ 
$a=$x/$y; 
return $a; 
} 

//指數
//pow(x,y);

//巧合數
function b3($x,$y){
	$a=$x+$y;
        pow($a,2);
}
?>