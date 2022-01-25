<html>
<head>
  <title>Programando Ando</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>PROPIETARIO</h1></center>
  	<form method="POST" action="datos.php" >

  	<div class="form-group">
	    <label for="num22">Documento</label>
	    <input type="text" name="num22" class="form-control" id="doc">
	</div>

	<div class="form-group">
	    <label for="num33">Nombre </label>
	    <input type="text" name="num33" class="form-control" id="nombre">
	</div>

   <div class="form-group">
	    <label for="dir">Direccion </label>
	    <input type="text" name="dir" class="form-control" id="dir">
	</div>

	<div class="form-group">
	    <label for="tel">Telefono </label>
	    <input type="text" name="tel" class="form-control" id="tel">
	</div>
    
    <center><input type="submit" value="Enviar" class="btn btn-success" name="btn1"></center>

  </form>

  <?php
  	if(isset($_POST['btn1']))
  	{
  		include("conexion.php");

  		$num22=$_POST['num22'];
  		$num33=$_POST['num33'];
  		$dir=$_POST['dir'];
  		$tel=$_POST['tel'];

  		$conexion->query("INSERT INTO $tabla_db1 (num22,num33,dir,tel) values ('$num22','$num33','$dir','$tel')");

  		include("conexion.php");
  	}
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>