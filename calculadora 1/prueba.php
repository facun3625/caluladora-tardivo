<!DOCTYPE HTML>
<html>
<head>
  <title>Título de la página</title>  
  <meta charset="UTF-8">

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

</head>
<body>
  <form action="#">
      Seleccione una temperatura:
      <input type="range" id="temperatura" min="1" max="51">
      <span id="temp">0</span>
      <br>
      <input type="submit" value="Confirmar">
  </form>
</body>
</html>