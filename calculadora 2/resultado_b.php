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
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  font-size: 14px;} /* Blue */
    
</style>
</head>

<body>  
    
<table width="400" border="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="tabla">    
        <?php 

$numero1 = $_POST['a'];
$numero2 = $_POST['b'];
$numero3 = $_POST['c'];
$numero6 = $_POST['e'];
$numero7 = $_POST['f'];


$operacion1 = $numero1 * $numero2;
$operacion1b = sprintf('%.2f', $operacion1);
$operacion2 = $numero1;
$operacion2b = sprintf('%.2f', $operacion2);
$operacion3 = ($numero1/30) * (30-$numero3);
$operacion3b = sprintf('%.2f', $operacion3);
$operacion4 = ($numero1/30) * $numero3;
$operacion4b = sprintf('%.2f', $operacion4);
$operacion5 = ($numero1/25);
$operacion5b = sprintf('%.2f', $operacion5);
$operacion6 = ($numero6/360)*$numero7;
$operacion6b = sprintf('%.2f', $operacion6);
$operacion7 = $operacion5 * $operacion6;
$operacion7b = sprintf('%.2f', $operacion7);
$operacion8 = ($numero1/2)/184;
$operacion8b = sprintf('%.2f', $operacion8);
$operacion9 = $operacion8 * $numero7;
$operacion9b = sprintf('%.2f', $operacion9);
$operacion10 = $operacion3 * 0.0833;
$operacion10b = sprintf('%.2f', $operacion10);
$operacion11 = $operacion7 * 0.0833;
$operacion11b = sprintf('%.2f', $operacion11);
$operacion13 = $operacion2 * 0.0833;
$operacion13b = sprintf('%.2f', $operacion13);
$operacion12 = $operacion1b + $operacion3b + $operacion4b + $operacion7b + $operacion9b + $operacion10b + $operacion11b;
$operacion14 = sprintf('%.2f', $operacion12);
?>
        
        
        Art. 245 L.C.T. (Antigüedad): $ <?php echo $operacion1b ?><br />
        Art. 233 L.C.T.  (Integrativo): $ <?php echo $operacion3b ?><br />
        Días Trabajados en el Mes de Despido: $ <?php echo $operacion4b ?><br />
        VACACIONES PROPORCIONALES: $ <?php echo $operacion7b ?><br /> 
        SAC: $ <?php echo $operacion9b ?><br />
        SAC sobre Integrativo: $ <?php echo $operacion10b ?><br />
        SAC sobre Vacaciones: $<?php echo $operacion11b ?><br /><br>
        <p><span class="button">Indemnización Correspondiente: $</strong> <?php echo $operacion14 ?></span><br /></p>

        <p>"Los valores son estimativos … asesorarse es la mejor opción."</p>
        
      <br /><br /><a href="index.php" class="button2">Limpiar Filtros</a><br /><br /></td></tr>
</table>
</body>
</html>