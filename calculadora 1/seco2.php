<?
  include ("costos.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<div style="text-align:center;">
<form id="form1" name="form1" method="post" action="seco2.php">
  <p>Ingrese los metros cuadrados<br /><br />
   <input name="numero1" type="number" class="box" id="textfield2"  width="100%" />
    <br /><br />
    <input type="submit" name="button" class="button" id="button" value="Calcular" />
 
  
</form>
      <?php 

$numero1 = $_POST['numero1'];

$operacion1 = $numero1 * $numero3;
?>

Indemnización Correspondiente: <?php echo $operacion1 ?>

</div>
</body>
</html>