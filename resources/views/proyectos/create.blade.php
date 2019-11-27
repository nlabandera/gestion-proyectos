<!DOCTYPE html>
<html>
<head>
	<title>Nuevo proyecto</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Introduce la información para un nuevo proyecto</h1>
	<form method="" action="">
		@csrf
		<label>Nombre</label>
		<input type="text" name="new_proyect"><br>
		<label>Titulo</label>
		<input type="text" name="new_title"><br>
		<label>Fecha inicio</label>
		<input type="data" name="new_startdate"><br>
		<label>Fecha fin</label>
		<input type="data" name="new_enddate"><br>
		<label>Responsable</label>
		<input type="text" name="new_resp"><br><br>
		<input type="submit" value="Añadir">
	</form>

</body>
</html>