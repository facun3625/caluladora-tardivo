<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
.button {
	background-color: #B20000; /* Green */
  border: none;
  color: white;
  padding: 13px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;} /* Blue */
  .button2 {
	background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 13px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;} /* Blue */
  .box {
	background-color: #ccc; /* Green */
  border: none;
  color: #000;
  padding: 10px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;} /* Blue */
    
.titulo {background-color: #315BA7; /* Green */
  border: none;
  color: white;
  padding: 10px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 15px;}
.button1 {background-color: #B20000; /* Green */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;}
.button21 {background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;}
.tabla {background-color: #fff; /* Green */
  border: none;
  color: #000;
  padding: 5px 5px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;}
</style>
</head>

<body>
<p class="tabla">
  <?php 

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
$numero4 = $_POST['numero4'];
$numero5 = $_POST['numero5'];

$operacion1 = $numero2 *$numero1;
$operacion2 = $numero1;
$operacion3 = $numero1/30;
$operacion4 = 30-$numero3; 
$operacion5 = $operacion3 * $operacion4;
$operacion6 = $numero1/30*$numero3;
$operacion20 = $numero1/25;
$operacion7 = $operacion20 * $numero4;
$operacion8 = $numero1/2;
$operacion10 = $operacion8/184*$numero5;
$operacion11 = $operacion2 * 0.0833;
$operacion12 = $operacion5 * 0.0833;
$operacion13 = $operacion6 * 0.0833;
$operacion14 = $operacion7 * 0.0833;
$operacion15 = $operacion1 + $operacion2 + $operacion5 + $operacion6 +  $operacion7 + $operacion10 + $operacion11 + $operacion12 + $operacion13 + $operacion14;
$operacion16 = $numero2*12;
$operacion17 = $operacion16*$numero1/4;
$operacion18 = $operacion1+$operacion2+$operacion5;
$operacion19 = $operacion18*2;

?>
        
        
        REMUNERACION A LOS FINES INDEMNIZATORIOS: <?php echo $numero1 ?><br />
        Años Antigüedad o Fracción mayor a 3 meses: <?php echo $numero2 ?><br />
         Dias Trabajados en el Mes de Despido: <?php echo $numero3 ?><br />
        DIAS DE VACACIONES POR ANTIGÜEDAD
: <?php echo $numero4 ?><br />
DIAS Trabajados en el Semestre (para el SAC)
: <?php echo $numero5 ?><br /><br />

INDEMNIZACION	<br /><br />

        Art. 245 (Antigüedad): <strong><?php echo $operacion1 ?></strong><br />
Art. 232 (Preaviso): <strong><?php echo $operacion2 ?></strong><br />
Art. 233 (Integrativo): <strong><?php echo $operacion5 ?></strong><br />
Dias Trajados en el Mes de Despido: <strong><?php echo $operacion6 ?></strong><br />
VACACIONES PROPORCIONALES: <strong><?php echo $operacion7 ?></strong><br />
SAC: <strong><?php echo $operacion10 ?></strong><br />
SAC sobre Preaviso: <strong><?php echo $operacion11 ?></strong><br />
SAC sobre Integrativo: <strong><?php echo $operacion12 ?></strong><br />
SAC sobre Dias Trabajados: <strong><?php echo $operacion13 ?></strong><br />
SAC sobre Vacaciones: <strong><?php echo $operacion14 ?></strong><br />
<h3>TOTAL:<strong><?php echo $operacion15 ?></strong></h2></p>
</body>
</html>