<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="java.js">

<style>

.tooltip {
  position: relative;
  display: inline-block;
  margin-top: 100px;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 1s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
</style>
</head>

<body>
<table width="400" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" width="390">CALCULADORA INDEMNIZACION<br />
      ACCIDENTE DE TRABAJO</td>
  </tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
  </tr>
  <tr>
      <td width="208">En el lugar de tabajo</td>
      <td width="170">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    
      <td colspan="2"><form id="form1" name="form1" method="post" action="resultado_trabajo_dentro44.php">
        <table width="400" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2">Porcentaje de incapacidad</td>
          </tr>
          <tr>
            <td colspan="2"><input type="range" name="foo" class="">
<output for="foo" onforminput="value = foo.valueAsNumber;"></output></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">Edad al momento del accidente </td>
          </tr>
          <tr>
            <td width="238" colspan="2"><label for="textfield"></label>
              <input type="text" name="numero3" id="textfield" /></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">Ingreso Base</td>
          </tr>
          <tr>
            <td colspan="2"><label for="textfield3"></label>
              <input type="text" name="numero5" id="textfield3" /></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td><input type="submit" name="button" id="button" value="Calcular Indemnización" /></td>
            <td><a href="1.php">Limpiar Filtros</a></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>
</form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p><form>
    <div class="tooltip">
        0<input type="range" id="range" value="0" min="0" max="100"/>100
        <span class="tooltiptext">0</span>
    </div>
</form></p>

<p>&nbsp;</p>
</body>
</html>