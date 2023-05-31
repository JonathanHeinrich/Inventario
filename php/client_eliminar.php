<?php
	/*== Almacenando datos ==*/
    $user_id_del=limpiar_cadena($_GET['user_id_del']);

  
    
  /*  if($check_categoria->rowCount()==1){

    	/*$check_productos=conexion();
    	$check_productos=$check_productos->query("SELECT categoria_id FROM producto WHERE categoria_id='$cliente_id_del' LIMIT 1");
*/
    

    		$eliminar_categoria=conexion();
	    	$eliminar_categoria=$eliminar_categoria->prepare("DELETE FROM clientes WHERE cliente_id=:id");

	    	$eliminar_categoria->execute([":id"=>$user_id_del]);

	    	
    
    $check_categoria=null;