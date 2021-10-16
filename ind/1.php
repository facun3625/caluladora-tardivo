<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="resultado.php">
<table width="593" border="0" class="tabla" style="font-size:14px;">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td width="406"><div align="left" class="tabla">REMUNERACION    A LOS FINES INDEMNIZATORIOS</div></td>
      <td width="177"><div align="center">
        <label for="textfield5"></label>
        <input type="text" name="numero1" id="textfield5" />
      </div></td>
    </tr>
    <tr>
      <td><div align="left" class="tabla">Años Antigüedad o Fracción mayor a 3 meses </div></td>
      <td><div align="center">
        <label for="textfield"></label>
        <input type="text" name="numero2" id="textfield" />
      </div></td>
    </tr>
    <tr> 
      <td><div align="left" class="tabla">Dias Trabajados en el Mes de Despido </div></td>
      <td><label for="textfield2"></label>
        <div align="center">
          <input type="text" name="numero3" id="textfield2" />
      </div></td>
    </tr>
    <tr>
      <td><div align="left" class="tabla">DIAS DE VACACIONES POR ANTIGÜEDAD </div></td>
      <td><div align="center">
        <label for="textfield3"></label>
        <input type="text" name="numero4" id="textfield3" />
      </div></td>
    </tr>
    <tr>
      <td><div align="left" class="tabla">DIAS Trabajados en el Semestre (para el SAC) </div></td>
      <td><div align="center">
        <label for="textfield4"></label>
        <input type="text" name="numero5" id="textfield4" />
      </div></td>
    </tr>
    <tr>
      <td><div align="left"></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left"></div></td>
      <td align="left"><div align="center">
        <input type="submit" name="Calcular" id="Calcular" value="Calcular" />
      </div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
  </table>
</form>
</body>
</html>