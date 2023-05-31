<div class="container is-fluid mb-6">
	<h1 class="title">Categorías</h1>

</div>

<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/categoria_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nueva Categoria</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group">
				  <input class="form-control" placeholder="Nombre"  type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required >
				  </div>
                   <div class="form-group"> 
				   <input class="form-control" placeholder="Ubicacion"  type="text" name="categoria_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150" >
				</div>
		  	
      <div class="form-group">
			<button type="submit" class="form-control">Guardar</button>
		</p>
	</form>
</div>