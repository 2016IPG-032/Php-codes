<form method="post">        
Enter a Number: <input type="text" name="string"/><br>  
<button type="submit">Check</button>  
</form>  
<?php  
$string = $_POST['string'];  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  
?>  