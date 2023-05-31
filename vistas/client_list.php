<div class="container is-fluid mb-6">
   <!--  <h1 class="title">Clientes</h1>-->

</div>

<div class="container pb-6 pt-6">  
    <?php
        require_once "./php/main.php";

        # Eliminar clientes #
        if(isset($_GET['user_id_del'])){
            require_once "./php/client_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=client_list&page=";
        $registros=10;
        $busqueda="";

        # Paginador clientes #
        require_once "./php/client_list.php";
    ?>
</div>