(6)
<?php

$salario_bruto=$_POST['salario'];
$salario_liquido="";


if($salario_bruto>1500 && $salario_bruto<2000){
    $salario_liquido = $salario_bruto*(90/100) ;
   echo "O salario liquido do funcionário será de R$$salario_liquido";
}

else if($salario_bruto>2000 && $salario_bruto<5000){
    $salario_liquido = $salario_bruto*(80/100) ;
    echo " <br> O salário liquido funcionário será de R$ $salario_liquido";
}
if ($salario_bruto>5000){
    $salario_liquido = $salario_bruto*(70/100) ;
    echo "<br>O salário liquido funcionário será de R$ $salario_liquido";
}
if ($salario_bruto<1500){
    echo " <br> O valor deve ser acrescentado, pois o mesmo é muito baixo";
}


?>