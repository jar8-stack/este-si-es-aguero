
<?php
include_once("webservice-class.php");

// Debug input by writing to a log
//$body = @file_get_contents('php://input');
//$handle=fopen('log.txt','a');
//fwrite($handle,$body,strlen($body));
//fclose($handle);
// Webservice trigge
//$json ='{"metodo":"addReport","reporte":{"idUsuario":"1", "categoria":"8", "comentario":"hola mundo","ubicacion":{"calle":"49", "numero":"923", "cruzamientos":"x10a y 112", "colonia":"fracc. las americas", "referencia":"casa azul", "coordenadas":"00, 00, 00", "evidencias":"olop", "fecha_inicio":"20/04/2021", "status":"1"}}}';

$json='{"metodo":"getReports", "usuario":{"idUsuario":"1"}}';

$ws = new WebserviceBoxito();
	$ws->solicitud(stripslashes($json));

if(isset($_POST['solicitud']) && $_POST['solicitud']!='')
{
	
	//echo json_encode($da);
	$ws = new WebserviceBoxito();
	$ws->solicitud(stripslashes($_POST['solicitud']));
echo $_POST['solicitud'];
}
else
{
		$response = array('metodo'=>'','status'=>'error','mensaje'=>'Falta el parametro solicitud');
		echo json_encode($response);
}



?>

