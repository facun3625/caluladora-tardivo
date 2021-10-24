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
      POR DESPIDO</td>
  </tr>
  <tr>
    <td align="center"><span class="tabla"><form id="form1" name="form1" method="post" action="resultado_b.php">
        <br> <input placeholder="Remuneración" type="text" name="a" id="a" class="box" required /> 
    
    <br> <input placeholder="Años de Antiguedad" type="text" name="b" id="b" class="box" required/> 
    
    <br> <input placeholder="Día del mes que lo Despidieron" type="text" name="c" id="c" class="box" required/> 
    
	  <br><br>
      <label> Seleccione Antigüedad<br><br>
      <select class="box2" id="antiguedad" name="e" required>
      <option value="">Seleccione una opción</option>
        <option value="14">Antigüedad menor a 5 años</option>
        <option value="21">Antigüedad de 5 a 10 años</option>
        <option value="28">Antigüedad de más de 10 años</option>
        
      </select></label>
      <br>
      <br> <input placeholder="Cantidad de Dias Trabajados en el Semestre (para el Aguinaldo)" type="text" name="f" id="f" class="box" required/> 
      <br>
      <br> <br><input type="submit" name="button2" class="button" id="button2" value="Calcular Indemnización" />
     

    </span></td>
</form>
  </tr>
</table>


</body>