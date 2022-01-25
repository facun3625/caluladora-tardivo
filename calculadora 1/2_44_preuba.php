<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>

<body>
<script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('temperatura').addEventListener('change',cambioTemperatura,false);
  }

  function cambioTemperatura()
  {    
    document.getElementById('temp').innerHTML=document.getElementById('temperatura').value;
  }
</script>  
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
            <td colspan="2"><label for="textfield2"></label>
              <input type="range" id="temperatura" min="1" max="51">
      <span id="temp">0</span></td>
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
  <p>&nbsp;</p>

<p>&nbsp;</p>
</body>
</html>