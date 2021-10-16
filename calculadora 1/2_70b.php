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
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:Verdana, Geneva, sans-serif;
  font-size: 12px;}
</style>
</head>

<body>
<table width="400" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="390" colspan="4" align="center" class="titulo">CALCULADORA INDEMNIZACION<br />
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
    <td width="200" align="center"><a href="#" class="button21">En el lugar de tabajo</a></td>
    <td width="200" align="center"><a href="2b.php" class="button1">Fuera del lugar de trabajo</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><form id="form1" name="form1" method="post" action="resultado_trabajo_fuera70.php">
      <table width="400" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center"><span class="tabla">Usted seleccionó Incapacidad Igual o mayor a 66%</span></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><span class="tabla">Ingrese el %</span></td>
          </tr>
          <tr>
            <td align="center"><label for="textfield4"></label>
              <input name="numero4" type="number" class="box" id="textfield4"  width="100%"   max="100" min="66"  /></td>
          </tr>
          <tr>
            <td align="center"><span class="tabla">Edad al momento del accidente </span></td>
          </tr>
          <tr>
            <td width="238" align="center"><label for="textfield5"></label>
              <input type="text" name="numero3" class="box" width="100%" id="textfield5" /></td>
          </tr>
          <tr>
            <td align="center"><span class="tabla">Ingreso Base</span></td>
          </tr>
          <tr>
            <td align="center"><label for="textfield6"></label>
              <input type="text" name="numero5" class="box" width="100%" id="textfield6" /></td>
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