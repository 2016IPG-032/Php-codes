<?php  
 
 function Table(){
    $a=$_POST['a'];
    echo"<form method=POST action=''>
    <input type=text name=a value='$a'>
    <input type=submit value=Submit> ";
   
    for( $i=1; $i<=10;$i++)
    {echo $a*$i." ";}
 }

 Table();
 ?>