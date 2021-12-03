<?php  
 
 function CheckPrime(){
    $a=$_POST['a'];
    echo"<form method=POST action=''>
    <input type=text name=a value='$a'>
    <input type=submit value=Submit> ";
    if($a==1) echo "Not Prime";
    else if($a==2||$a==3) echo "Not Prime";
    else if($a%2==0 || $a%3==0)
    echo "Not Prime";
   
    for( $i=5; $i*$i<=$a;$i=$i+6)
    { if($a%$i==0 || $a%($i+2)==0)
        echo "Not Prime";
        break;
    }


 echo "Prime";


    
 }

 CheckPrime();
 ?>