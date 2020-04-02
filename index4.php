<!doctype html>
<html lang="es">
<head>
<link rel="stylesheet" href="css/all.css">	
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Passport TA</title>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
.imagelive {
	border: 1px solid #ddd;
	padding: 5px;
	border-radius: 2px;
	background: #fff;
	max-width: 200px;
	margin-left: auto;
	margin-right: auto;
}
</style>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="form-group">
      <h5>Formulario</h5>
      <h4>Solicitud de Boleto Estudiantil</h4>		
    </div>
    <div class="form-group">
      <label for="nombre">Nombre y Apellido</label>
      <input type="text" autofocus="autofocus" required="required" class="form-control" id="nombre" placeholder="Nombre completo del alumno">
    </div>
    <div class="form-group">
      <label for="dni">DNI</label>
      <input type="text" required="required" class="form-control" id="nombre" placeholder="Ingrese DNI del alumno">
    </div>
    <div class="form-group">
      <label for="colegio">Colegio</label>
      <input type="text" required="required" class="form-control" id="colegio" placeholder="Debe ser Estatal o con subvención.">
    </div>
    <div class="form-group">
      <label for="curso">Curso</label>
      <input type="text" required="required" class="form-control" id="curso" placeholder="Deberá coincidir con el certificado.">
    </div>
    <div class="form-group">
      <label for="turno">Seleccione turno</label>
      <select required="required" class="form-control" id="turno">
        <option>Mañana</option>
        <option>Tarde</option>
        <option>Completo</option>
      </select>
      <small id="turnoHelp" class="form-text text-muted">El mismo deberá figurar en el certificado de alumno regular.</small> 
	</div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="origen">Estación Origen</label>
        <input type="text" required="required" class="form-control" id="origen" placeholder="Desde...">
      </div>
      <div class="form-group col-md-6">
        <label for="destino">Estación Destino</label>
        <input type="text" required="required" class="form-control" id="destino" placeholder="Hasta...">
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Introduzca email de contacto.">
    </div>
    <div class="form-group">
      <label for="phone">Teléfono</label>
      <input type="email" class="form-control" id="telefono" placeholder="Personal/ Mensaje ">
    </div>
    <hr>
	  
    <div class="image_container">
      <div class="form-group">
        <div class="custom-file">
          <input name="image" type="file" required="required" class="custom-file-input" id="img" accept="image/*"/>
          <label for="img" class="custom-file-label" ><i class="fas fa-camera"></i> DNI Frente</label>
		  <small class="form-text text-muted">La foto deberá ser apaisada y legible.</small>	
        </div>
      </div>
      <div class="form-group"> <img src="" class="img-fluid" id="imageLive" > </div>
    </div>
	  
    <div class="image_container">
      <div class="form-group">
        <div class="custom-file">
          <input name="image" type="file" required="required" class="custom-file-input" id="img" accept="image/*"/>
          <label for="img" class="custom-file-label"><i class="fas fa-camera"></i> DNI Reverso</label>
		  <small class="form-text text-muted">La foto deberá ser apaisada y legible.</small>		
        </div>
      </div>
      <div class="form-group"> <img src="" class="img-fluid" id="imageLive"> </div>
    </div>
	  
    <div class="image_container">
      <div class="form-group">
        <div class="custom-file">
          <input name="image" type="file" required="required" class="custom-file-input" id="img" accept="image/*" />
          <label for="img" class="custom-file-label" ><i class="fas fa-camera"></i> Certificado de Alumno Regular</label>
		  <small class="form-text text-muted">La foto deberá ser apaisada y legible.</small>
        </div>		  
      </div>
      <div class="form-group"> <img src="" class="img-fluid" id="imageLive"> </div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar solicitud del Boleto Estudiantil</button>
  </div>
  <br>
  <br>
</form>
<script>
$(".custom-file-input").change(function() {
    if (this.files && this.files[0]) {
        var img = this;
        var reader = new FileReader();
        reader.onload = function(e) {
            $(img).closest('div.image_container').find('#imageLive').attr('src', e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }
});
</script> 	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
