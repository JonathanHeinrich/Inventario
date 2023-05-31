

    <form class="" action="" method="POST" autocomplete="off">
	<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Introduzca su nombre de usuario y contraseña!</p>

              <div class="form-outline form-white mb-4">
			    <input class="form-control" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required id="floatingInput" placeholder="Usuario">
			  </div>
			  <div class="form-floating mb-3">
		       <input class="form-control" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required id="floatingInput" placeholder="Contraseña">
		      </div>
			  <h5 class="card-title text-center mb-5 fw-light fs-5"></h5>
      <h5 class="card-title text-center mb-5 fw-light fs-5"></h5>
          <div class="column">
          <p class="has-text-centered">
		    <button type="submit" class="form-control">Iniciar sesion</button>
		    </p>

	    <?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
				require_once "./php/main.php";
				require_once "./php/iniciar_sesion.php";
			}
		?>
	</form>
</div>