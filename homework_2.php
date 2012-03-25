<html>
<header>
<style type="text/css">
p.orange{
color:orange;
}
p.blue{
color:blue;
}
</style>
</header>
<body>
<?php

$myarray=range(20,1000,37);
find_3_prime($myarray);
check_exist($myarray);


function find_3_prime($arr){
$count=0;
foreach($arr as $value){
if(is_prime($value)){
$count++;
}
if($count==3){
$count=0;
printf("<p class=orange>The third prime number is %d</p>",$value);
}
}
}
function is_prime($var){
$maxDevider=(int)sqrt($var);
for($devider=2;$devider<=$maxDevider;$devider++){
if ($var % $devider == 0){
return false;
}
}
 return true;
 }
 
 function check_exist($arr){
 $temparr=array(146,284,871);
 foreach($temparr as $value){
 if(in_array($value,$arr)){
 printf("<p class=blue>The number %d exist in the array</p>",$value);
 }else printf("<p class=blue>The number %d  NOT exist in the array</p>",$value);
 }
 
}
?>
</html>