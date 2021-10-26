<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<title>Documento sin título</title>
<style>
.button {
	background-color: #315ba7; /* Green */
  border: none;
  color: white;
  padding: 20px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  font-size: 14px;} /* Blue */

  .button2 {
	background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  font-size: 12px;} /* Blue */
  .box {
	background-color: rgb(238, 238, 238); /* Green */
  border: none;
  color: #315ba7;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  width: 400px;
  font-size: 12px;} /* Blue */
  .box2 {
	background-color: rgb(238, 238, 238); /* Green */
  border: none;
  color: #315ba7;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  width: 300px;
  height: 35px;
  font-size: 12px;} /* Blue */
  .titulo {
  background-color: #fff;
  border: 2px solid #315ba7;
  color: #315ba7;
  padding: 10px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  font-weight: bold;
  font-size: 15px;} /* Blue */
  
  .tabla {
	background-color: #fff; /* Green */
  border: none;
  color: #3f3f3f;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  font-size: 12px;} /* Blue */
    
</style>
</head>



<body>
<table width="500" border="0" align="center" >
  <tr>
    <td class="tabla">&nbsp;</td>
  </tr>
  <tr>
    <td class="tabla"><?php 

$numero3 = $_POST['numero3'];
$numero4 = $_POST['numero4'];
$numero5 = $_POST['numero5'];
$numero1 = 53;
$numero2 = 100;
$numero6 = 65;
$numero7 = 785172;

$operacion1 = $numero5 *53;
$operacion2 = $numero4 /100;
$operacion3 = 65/ $numero3;
$operacion4 = $operacion1 * $operacion2 * $operacion3 * 0.20 ;
$operacion5 = $operacion4 + $numero5 * $numero1 * $operacion2 * $operacion3;
$operacion6 = $operacion5 + $numero7;
$operacion7 = sprintf('%.2f', $operacion6);

?>
      Edad al momento del accidente: <?php echo $numero3 ?><br />
      Porcentaje de incapacidad: <?php echo $numero4 ?><br />
      Ingreso Base: $<?php echo $numero5 ?><br />
      <br />
      <span class="button"> Indemnización Correspondiente: $<?php echo $operacion7 ?></span><br />
      <br />
      <br />
      <a href="1.php" class="button2">Limpiar Filtros</a><br />
    <br /></td>
  </tr>
</table>


</body>
</html>