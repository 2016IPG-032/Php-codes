<?php  
 $a=$_POST['a'];
 echo"<form method=POST action=''>
 <input type=text name=a value='$a'>
 <input type=submit value=Submit> ";
 function series($a){  
    if($a == 0){  
    return 0;  
    }else if( $a == 1){  
return 1;  
}  else {  
return (series($a-1) + series($a-2));  
}   
}  

for ($i = 0; $i < $a; $i++){  
echo series($i);  
echo "\n";  
}  
 ?>