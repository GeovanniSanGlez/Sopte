<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
	<?php require_once("../MainHead/head.php");?>
	<title>Ander code</>: Nuevo Ticket</title>
</head>
<body class="with-side-menu">
	<?php require_once("../MainHeader/header.php");?>
    
	<div class="mobile-menu-left-overlay"></div>
    
	<?php require_once("../MainNav/nav.php");?>
	
	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
        
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
            
			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra generar Nuevos Tickets de SOPORTE.
				</p>
                
				<h5 class="m-t-lg with-border">Ingresar Información</h5>
                
				<div class="row">
					<form method="post" id="ticket_form">
                    
						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">
                        
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_nombre">Nombre</label>
								<input type="text" class="form-control" id="tick_nombre" name="tick_nombre" placeholder="Ingrese Nombre del Operador">
							</fieldset>
						</div>
                        
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_ubicacion">Ubicacion</label>
								<input type="text" class="form-control" id="tick_ubicacion" name="tick_ubicacion" placeholder="Ingrese la Ubicacion">
							</fieldset>
						</div>
						<!-- SELEC DEPARTAMANTO -->
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_departa">Departamento</label>
								<select id="tick_departa" name="tick_departa" class="form-control">
  									<option selected>Seleccione Departamento</option>
  									<option value="1">DIRECCION GENERAL</option>
  									<option value="2">DIRECCION DE POMOCION Y DIVULGACION</option>
  									<option value="3">UNIDAD DE GESTION</option>
									<option value="4">DIRECCION DE PATRIMONIO MATERIAL E IMATERIAL</option>
									<option value="5">DIRECCION DE OBRAS Y PROYECTOS</option>
  									<option value="6">DIRECCION JURIDICA Y NORMATIVA</option>
									<option value="7">UNIDAD DE COORDINACION</option>
									<option value="8">AGEC</option>
									<option value="9">DIRECCION DE TECNOLOGIA Y SISTEMAS</option>
								</select>
							</fieldset>
						</div>
                        
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_tipo">Tipo de Servicio</label>
								<select id="tick_tipo" name="tick_tipo" class="form-control">
									<option selected>Seleccione Tipo de Servicio</option>
									<option value="8">Hardware</option>
									<option value="8">Sofware</option>
									<option value="8">otros</option>
									<option value="8">Comunicacion</option>
								</select>
							</fieldset>
						</div>
                        
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_docadicci">Documentos Adicionales</label>
								<input type="file" name="tick_docadicci" id="tick_docadicci" class="form-control" multiple>
							</fieldset>
						</div>
						
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea class="form-control" id="tick_descrip" name="tick_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</form>
				</div>
                
			</div>
		</div>
	</div>
	<!-- Contenido -->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="nuevoticket.js"></script>

</body>
</html>
<?php
  }else{
	$conectar = new Conectar();
    header("Location:".Conectar::ruta()."../index.php"); 
	exit();
  }
?>