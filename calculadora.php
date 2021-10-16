<?php 
//obtenemos los valores enviado desde el metodo GET
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$suma=$num1+$num2;
@$respuesta.="";
//verificamos si son números
if (!ctype_digit($num1) || !ctype_digit($num2)) {
$respuesta.= "Porfavor ingrese 2 numeros";
}
else
{
    
    $respuesta.= "<table>";
    $respuesta.="<tr><td>".$num1."+".$num2."=".($num1+$num2)."</td></tr>";
    $respuesta.="<tr><td>".$num1."-".$num2."=".($num1-$num2)."</td></tr>";
    $respuesta.="<tr><td>".$num1."*".$num2."=".($num1*$num2)."</td></tr>";
    $respuesta.="<tr><td>".$num1."/".$num2."=".($num1/$num2)."</td></tr>";
    $respuesta.="</table>";


}
//esta echo sera lo que veremos en el div  con id info en el archivo .html
echo $respuesta;

?>