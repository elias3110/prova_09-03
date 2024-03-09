(3)
<?php

$a_t1=$_POST['a_t1'];
$b_t1=$_POST['b_t1'];
$a_t2=$_POST['a_t2'];
$b_t2=$_POST['b_t2'];
$lado=$_POST['lado'];

$area_t1= ($a_t1*$b_t1)/2;
$area_t2= ($a_t2*$b_t2)/2;
$area_quadrado= $lado*$lado;

if($area_t1+$area_t2 == $area_quadrado){
    echo "A area dos dois triangulos somadas é igual a area do quadrado";
}

else {
    echo "A area dos dois triangulos somadas não é igual a area do quadrado";
}


?>