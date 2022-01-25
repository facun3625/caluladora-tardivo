<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<title>Documento sin título</title>
<<style>
.button {
	background-color: #315ba7; /* Green */
  border: none;
  color: white;
  padding: 20px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Montserrat", sans-serif;
  font-size: 12px;} /* Blue */

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
<table width="500" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="500" colspan="4" align="center" class="titulo">CALCULADORA INDEMNIZACION<br />
      ACCIDENTE DE TRABAJO</td>
  </tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><span class="tabla">Seleccione una Opción</span></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="200" align="center"><a href="#" class="button1">En el lugar de tabajo</a></td>
    <td width="200" align="center"><a href="2b.php" class="button21">Fuera del lugar de trabajo</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2"><form id="form1" name="form1" method="post" action="resultado_trabajo_dentro55.php">
        <table width="400" border="0" cellpadding="0" cellspacing="0">
          <tr>
      <td align="center"><span class="tabla">Usted seleccionó Incapacidad mayor al 50% y menor al 66%</span></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><span class="tabla">Ingrese el %</span></td>
    </tr>
    <tr>
      <td align="center"><label for="textfield4"></label>
        <input name="numero4" type="number" class="box" id="textfield4"  width="100%"   max="65" min="51"  required/></td>
    </tr>
    <tr>
      <td align="center"><span class="tabla">Edad al momento del accidente </span></td>
    </tr>
    <tr>
      <td width="238" align="center"><label for="textfield5"></label>
        <input type="text" name="numero3" class="box" width="100%" id="textfield5" required/></td>
    </tr>
    <tr>
      <td align="center"><span class="tabla">Ingreso Base</span></td>
    </tr>
    <tr>
      <td align="center"><label for="textfield6"></label>
        <input type="text" name="numero5" class="box" width="100%" id="textfield6" required/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="button2" class="button" id="button2" value="Calcular Indemnización" /></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><a href="1.php" class="button2">Limpiar Filtros</a></td>
    </tr>
</table>
  <p>&nbsp;</p>
</form></td>
    </tr>
    <tr>
      <td width="208">&nbsp;</td>
      <td width="170">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>

<p>&nbsp;</p>
</body>
</html>