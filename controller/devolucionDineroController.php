
  <?php if(isset($_SESSION["modulo_administracion"])&&isset($_SESSION["ses_id"])&&isset($_SESSION["sucursal"])&&$_SESSION["sucursal"]==SUCURSAL){?>  

<?php 

require_once("model/devolucionDineroModel.php");


$dev=new DevolucionDinero();


$res=$dev->listarTodos();
require_once("view/devolucionDinero.php");


if(isset($_GET["id"]) && isset($_GET["e"]) && $_GET["e"]=="borrar")
{

	
    $dev->borrar($_GET["id"]);


header("Location:".config::ruta()."?accion=devolucionDeudas");
}

?>
<?php } else
header("Location:".config::ruta()."?accion=error&m=2");

?>