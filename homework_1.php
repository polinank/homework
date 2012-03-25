<html>
<header>
<style type="text/css">
p.red{
color:red;
}
p.blue{
color:blue;
}
</style>
</header>
<body>
<?php

if(!isset($_GET['number'])){
echo "unexisted variable";
}else{
if(!is_numeric($_GET['number'])){
echo "<p class=red>The parameter is not a number</p>";
}else{
if(!($_GET['number']>=0 and $_GET['number']<=19999)){
echo "<p class=red> The parameter is not in range[0,19999] </p> ";
}
if(is_prime($_GET['number'])){
printf ("<p >The number %d is prime</p>",$_GET['number']);
} else{
printf ("<p class=blue>The number %d is  NOT prime</p>",$_GET['number']);
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


?>
</body>
</html>

