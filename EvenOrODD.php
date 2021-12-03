<?php  
 
 function Check(){
    $a=$_POST['a'];
    echo"<form method=POST action=''>
    <input type=text name=a value='$a'>
    <input type=submit value=Submit> ";
     if($a%2==0 ) echo "\n Even";
     
     else echo"\n Odd";
 }

 check();
 ?>