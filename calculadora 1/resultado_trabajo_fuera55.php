<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.button {background-color: #B20000; /* Green */
  border: none;
  color: white;
  padding: 13px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;}
.button2 {background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 13px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;}
.tabla {background-color: #fff; /* Green */
  border: none;
  color: #000;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;}
</style>
</head>



<body>
<table width="400" border="0" align="center" >
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

?>
      Edad al momento del accidente: <?php echo $numero3 ?><br />
      Porcentaje de incapacidad: <?php echo $numero4 ?><br />
      Ingreso Base: <?php echo $numero5 ?><br />
      <br />
      <span class="button"> Indemnización Correspondiente: <?php echo $operacion6 ?></span><br />
      <br />
      <br />
      <a href="1.php" class="button2">Limpiar Filtros</a><br />
    <br /></td>
  </tr>
</table>


</body>
</html>