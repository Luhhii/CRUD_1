<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="Precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="Precio" name="Precio" placeholder="Precio" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Material" class="col-sm-2 control-label">Material</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Material" name="Material" placeholder="Material" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="TipoMueble" class="col-sm-2 control-label">Tipo de Mueble</label>
					<div class="col-sm-10">
						<select class="form-control" id="TipoMueble" name="TipoMueble">
							<option value="SOFA">SOFA</option>
                            <option value="MESA">MESA</option>
                            <option value="SILLA">SILLA</option>
                            <option value="CAMA">CAMA</option>
                            <option value="ESCRITORIO">ESCRITORIO</option>
                            <option value="COLCHON">COLCHON</option>
                            <option value="COMODA">COMODA</option>
                            <option value="OTOMAN">OTOMAN</option>
                            <option value="BIBLIOTECA">BIBLIOTECA</option>
                            <option value="FUTON">FUTON</option>
                            <option value="LITERA">LITERA</option>
                            <option value="MESITA">MESITA</option>
                            <option value="TABURETE">TABURETE</option>
                            <option value="MINIBAR">MINIBAR</option>
                            <option value="ARMARIO">ARMARIO</option>
                            <option value="BANCO">BANCO</option>
                            <option value="ORGANIZADOR">ORGANIZADOR</option>
                            <option value="PERCHERO">PERCHERO</option>
                            <option value="PATAS">PATAS</option>
                            <option value="RESPALDOS">RESPALDOS</option>
                            <option value="ESTILOS">ESTILOS</option>
                            <option value="JARDINES">JARDINES</option>
							<option value="OTRO">OTRO</option>
						</select>
					</div>
                </div>
                
                <div class="form-group">
					<label for="Marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-10">
						<select class="form-control" id="Marca" name="Marca">
							<option value="ARTEK">ARTEK</option>
                            <option value="MIMUB">MIMUB</option>
                            <option value="ROCA">ROCA</option>
                            <option value="COSMIC">COSMIC</option>
                            <option value="PIKOLIN">PIKOLIN</option>
                            <option value="GAMMA">GAMMA</option>
                            <option value="DURAVIT">DURAVIT</option>
                            <option value="GALA">GALA</option>
                            <option value="DESTINY">DESTINY</option>
                            <option value="FORMA">FORMA</option>
                            <option value="ARMSTRONG">ARMSTRONG</option>
                            <option value="TRENTINO">TRENTINO</option>
                            <option value="LATTOFLEX">LATTOFLEX</option>
                            <option value="MATTEOGRASSI">MATTEOGRASSI</option>
                            <option value="MAPINI">MAPINI</option>
                            <option value="TREKU">TREKU</option>
                            <option value="BEDS">BEDS</option>
							<option value="OTRO">OTRO</option>
						</select>
					</div>
                </div>
                
                <div class="form-group">
					<label for="Color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
						<input type="text" step="any" class="form-control" id="Color" name="Color" placeholder="Color" required>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>