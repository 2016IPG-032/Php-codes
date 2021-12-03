<?php  
 
 function Factorial(){
    $a=$_POST['a'];
    echo"<form method=POST action=''>
    <input type=text name=a value='$a'>
    <input type=submit value=Submit> ";
     $fact=1;
    for($i=1;$i<=$a;$i++)
    {
        $fact*=$i;
    }

    echo $fact;
 }

 Factorial();
 ?>