<div class="container is-fluid mb-6">
	<h1 class="title">Productos</h1>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php/main.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/producto_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo Producto</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group">
				  	<input class="form-control" placeholder="Codigo" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required >
					  </div>
                  <div class="form-group">  
				  <input class="form-control" placeholder="Nombre" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				  </div>
                  <div class="form-group">
				  <input class="form-control" placeholder="Precio" type="number" name="producto_precio" pattern="[0-9.]{1,25}" maxlength="25" required >
				  </div>
                  <div class="form-group">
				  <input class="form-control" placeholder="Stock" type="number" name="producto_stock" pattern="[0-9]{1,25}" maxlength="25" required >
				  </div>
                  <div class="form-group">
		    	<div class="select is-rounded">
				  	<select class="form-control" name="producto_categoria" >
				    	<option value="" selected="" >Seleccione una opción</option>
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM categoria");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								echo '<option value="'.$row['categoria_id'].'" >'.$row['categoria_nombre'].'</option>';
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  
                  <div class="form-group">
				  <label>Foto o imagen del producto</label><br>
				<div class="file is-small has-name">
				  	<label class="file-label">
				    	<input class="file-input" type="file"  name="producto_foto" accept=".jpg, .png, .jpeg" >
				    	<span class="file-cta">
				      		<span class="file-label">Imagen</span>
				    	</span>
				    	<span class="file-name">JPG, JPEG, PNG. (MAX 3MB)</span>
				  	</label>
				</div>
			</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="form-control">Guardar</button>
		</p>
	</form>
</div>