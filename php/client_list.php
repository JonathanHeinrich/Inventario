<?php
	$inicio = ($pagina>0) ? (($pagina * $registros)-$registros) : 0;
	$tabla="";

	if(isset($busqueda) && $busqueda!=""){

		$consulta_datos="SELECT * FROM clientes WHERE ((cliente_id!='".$_SESSION['id']."') AND (cliente_nombre LIKE '%$busqueda%' OR cliente_servicio LIKE '%$busqueda%' OR cliente_contacto LIKE '%$busqueda%' OR cliente_fecha_pago LIKE '%$busqueda% OR cliente_costo LIKE '%$busqueda%')) ORDER BY cliente_nombre ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(cliente_id) FROM clientes WHERE ((cliente_id!='".$_SESSION['id']."') AND (cliente_nombre LIKE '%$busqueda%' OR cliente_servicio LIKE '%$busqueda%' OR cliente_contacto LIKE '%$busqueda%' OR usuario_fecha_pago LIKE '%$busqueda%' OR usuario_costo LIKE '%$busqueda%'))";

	}else{

		$consulta_datos="SELECT * FROM clientes WHERE cliente_id!='".$_SESSION['id']."' ORDER BY cliente_nombre ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(cliente_id) FROM clientes WHERE cliente_id!='".$_SESSION['id']."'";
		
	}

	$conexion=conexion();

	$datos = $conexion->query($consulta_datos);
	$datos = $datos->fetchAll();

	$total = $conexion->query($consulta_total);
	$total = (int) $total->fetchColumn();

	$Npaginas =ceil($total/$registros);

	$tabla.='
	<div class="row">
	<div class="col-12">
	  <div class="card">
		<div class="card-header">
		  <h3 class="card-title">Lista de Clientes</h3>

		  <div class="card-tools">
			<div class="input-group input-group-sm" style="width: 150px;">
			 

		
			</div>
		  </div>
		</div>
		<!-- /.card-header -->
		<div class="card-body table-responsive p-0">
		  <table class="table table-hover text-nowrap">
			<thead>
			  <tr>
		           
                    <th>Nombre</th>
                    <th>Servicio</th>
                    <th>Contacto</th>
					<th>Dirección</th>
					<th>Dia de Pago</th>
                    <th>Ultimo pago</th>
					<th colspan="2">Opciones</th>
		
	';

	if($total>=1 && $pagina<=$Npaginas){
		$contador=$inicio+1;
		$pag_inicio=$inicio+1;
		foreach($datos as $rows){
			$tabla.='   <tr class="card-body p-0">
			        <td>'.$rows['cliente_nombre'].'</td>   
                    <td>'.$rows['cliente_servicio'].'</td>
                    <td>'.$rows['cliente_contacto'].'</td>
					<td>'.$rows['cliente_direccion'].'</td>
					<td>'.$rows['cliente_dp'].'</td>
                    <td>'.$rows['cliente_pago'].'</td>
                    <td>
					<a href="index.php?vista=client_update&user_id_up='.$rows['cliente_id'].'" class="button is-success is-rounded is-small">Actualizar</a>
                    </td>
                    <td>
                        <a href="'.$url.$pagina.'&user_id_del='.$rows['cliente_id'].'" class="button is-danger is-rounded is-small">Eliminar</a>
                    </td>
                </tr>
            ';
            $contador++;
		}
		$pag_final=$contador-1;
	}else{
		if($total>=1){
			$tabla.='
				<tr class="has-text-centered" >
					<td colspan="7">
						<a href="'.$url.'1" class="button is-link is-rounded is-small mt-4 mb-4">
							Haga clic acá para recargar el listado
						</a>
					</td>
				</tr>
			';
		}else{
			$tabla.='
				<tr class="has-text-centered" >
					<td colspan="7">
						No hay registros en el sistema
					</td>
				</tr>
			';
		}
	}


	$tabla.='</tbody></table></div>';

	if($total>0 && $pagina<=$Npaginas){
		$tabla.='<p class="has-text-right">Mostrando clientes <strong>'.$pag_inicio.'</strong> al <strong>'.$pag_final.'</strong> de un <strong>total de '.$total.'</strong></p>';
	}

	$conexion=null;
	echo $tabla;

	if($total>=1 && $pagina<=$Npaginas){
		echo paginador_tablas($pagina,$Npaginas,$url,7);
	}