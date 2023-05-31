

<div class="container pb-6 pt-6">
	<?php
		include "./inc/btn_back.php";

		require_once "./php/main.php";

		$id = (isset($_GET['user_id_up'])) ? $_GET['user_id_up'] : 0;
		$id=limpiar_cadena($id);

		/*== Verificando producto ==*/
    	$check_producto=conexion();
    	$check_producto=$check_producto->query("SELECT * FROM clientes WHERE cliente_id='$id'");

        if($check_producto->rowCount()>0){
        	$datos=$check_producto->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['cliente_nombre']; ?></h2>

	<form action="./php/client_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="cliente_id" value="<?php echo $datos['cliente_id']; ?>" required >

		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Actualizar Contacto</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group">
				  <input class="form-control" placeholder="Nombre"  type="text" name="cliente_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required value="<?php echo $datos['cliente_nombre']; ?>" >
					  </div>
                    <div class="form-group">
					<input class="form-control" placeholder="Servicio"  type="text" name="cliente_servicio" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required value="<?php echo $datos['cliente_servicio']; ?>" >
					</div>
                    <div class="form-group">
					<input class="form-control" placeholder="Contacto" type="text" name="cliente_contacto" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required value="<?php echo $datos['cliente_contacto']; ?>" >
					</div>
                    <div class="form-group">
					<input class="form-control" placeholder="Direccion" type="text" name="cliente_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['cliente_direccion']; ?>" >
					</div>
                    <div class="form-group">
					<input class="form-control" placeholder="Dia de pago"  type="text" name="cliente_dp" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['cliente_dp']; ?>" >
				</div>
		  	</div>
			  <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Atención</h5>

                <p class="card-text">
				Para poder actualizar los datos de este usuario por favor ingrese su USUARIO y CLAVE con la que ha iniciado sesión.
                </p>
              </div>
            </div>
	
		</div>
		</div>
                    <div class="form-group">
					<label>Usuario Administrador</label>
					<input class="form-control" type="text" name="administrador_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
					  </div>
                    <div class="form-group">
					<label>Clave Administrador</label>
					<input class="form-control" type="password" name="administrador_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		
		<p class="has-text-centered">
			<button type="submit" class="form-control">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_usuario=null;
	?>
</div>