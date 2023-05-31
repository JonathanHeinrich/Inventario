<div class="container is-fluid mb-6">
	<h1 class="title">Clientes</h1>

</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php/main.php";
	?>
  <div class="form-rest mb-6 mt-6"></div>
	<form action="./php/client_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo Cliente</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group">
		<input class="form-control" placeholder="Nombre" type="text" name="cliente_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
       </div>
       <div class="form-group">    
			<input class="form-control" placeholder="Contacto" type="number" name="cliente_contacto" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
      </div>
      <div class="form-group">    
      <input class="form-control" placeholder="Colonia Calle #" type="text" name="cliente_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}"  maxlength="70" required >
       </div>
      <div class="form-group">
			<input  class="form-control" placeholder="Fecha" type="date" name="cliente_pago" pattern="70" maxlength="70" required value="<?php echo $datos['cliente_pago']; ?>" >
			</div>
		  	
 <!--Aquí comienza servicio-->
       <div class="form-group">
              <div class="select">
                <select  class="form-control" name="cliente_servicio" required="required" id="select">
                  <option value="Internet" selected="selected">Internet</option>
                  <option value="IPTV">IPTV</option>
                  <option value="Cliente">Cliente</option>
                  </select>
                     </div>
         </div>	
         <!--Aquí termina el servicio-->
         <!--Aquí comienza Dia de pago-->
         <div class="select">
                <select  class="form-control" name="cliente_dp" required="required" id="select">
                  <option value="Dia 1">Dia 1</option>
                  <option value="Dia 15">Dia 15</option>
                  </select>
                     </div>
         </div>
			<!--Aquí termina Dia de pago-->
      <div class="form-group">
          <p class="has-text-centered">
			<button type="submit"  class="form-control">Guardar</button>
		</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</div>