<?php
if (!function_exists('base_url')) {
    function base_url($url)
    {
        return URL . $url;
    }
}

if (!function_exists('fnReturnJson')) {
    function fnReturnJson($obj)
    {
        header('Content-type: application/json');
        return json_encode($obj);
    }
}

function fnBaseUrl($url = '')
{
    $ruta = str_replace('application\helper', '', dirname(__FILE__));
    return $ruta . $url;
}

if (!function_exists('fnValidarSesion')) {
    function fnValidarSesion($th)
    {
        if (empty($_SESSION["result"])) {
            session_destroy();
            header('Location: index.php');
        }
    }
}

function obtenerDatos($th)
{
    $data = array();

    $data['abrev']  = $th->abrev;
    $data['url']    = $th->url;
    $data['titulo'] = $th->titulo;
    $data['th']     = $th;
    return $data;
}

function modalLoading($th, $modal = 'modalLoading')
{
    ?>
	<div class="modal fade" id="<?php echo $modal ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal ?>Title" aria-hidden="true" style="overflow-y: scroll;">
	  <div class="modal-dialog modal-dialog-center modal-xl" role="document">
		   <div class="modal-content">
			   <div class="modal-header">
				   <h4 class="modal-title"  id="exampleModalLongTitle">
					   <center>Cargando</center>
				   </h4>
			   </div>
			   <div class="modal-body">
				   <div class="form-group">
					   <div class="col-md-12 col-sm-12 col-xs-12">
						   <button class="btn btn-warning col-md-12 col-sm-12 col-xs-12" >
							   <span class="fa fa-circle-o-notch fa-spin"></span>&ensp;Cargando, por favor espere un momento...
						   </button>
					   </div>
					   <div class="clearfix"></div>
				   </div>
			   </div>
			   <div class="modal-footer">
			   </div>
		   </div>
	   </div>
   </div>
   <?php
}

?>