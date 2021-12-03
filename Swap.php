<?php
 
 function Swap2(){
    $a=$_POST['a'];
    echo"<form method=POST action=''>
    <input type=text name=a value='$a'>";
    $b=$_POST['b'];
    echo"<form method=POST action=''>
    <input type=text name=b value='$b'>
    <input type=submit value=Submit> ";

    $a=$a+$b;
    $b=$a-$b;
    $a=$a-$b;

    echo $a." ".$b;


 }
 Swap2();


?>