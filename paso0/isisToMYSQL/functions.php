<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");


function ejecutar($codigo, $saveCant = false) // ejecutor de consultas
{
	$resuCant = "";

	if (isset($_SESSION['userid']))
		$_SESSION['userid'] = $_SESSION['userid'];

	include("Coneccion.dat"); // datos de la conexion

	$conect = mysqli_connect($db_host, $db_user, $db_pass, $db, $dbport); // Coneccion

	mysqli_query($conect, "SET NAMES 'utf8'");

	$resu = mysqli_query($conect, $codigo) or die(errores($codigo)); // ejecuta

	if ($saveCant)
		$resuCant = mysqli_query($conect, "SELECT FOUND_ROWS() as count") or die(errores($codigo));

	mysqli_close($conect); // cierra db

	if ($saveCant)
		return array($resu, $resuCant);
	else
		return $resu;
}

function insertar($codigo) // ejecutor de consultas insert, devuelve autoincrement
{
	include("Coneccion.dat");

	$conect = mysqli_connect($db_host, $db_user, $db_pass, $db, $dbport); // Coneccion

	$resu = mysqli_query($conect, $codigo) or die(errores($codigo));

	$ultimo = mysqli_query($conect, "select last_insert_id()");

	mysqli_close($conect);

	$fila = mysqli_fetch_assoc($ultimo);

	return $fila['last_insert_id()'];
}

function errores($consulta)
{
	$file = fopen("fuck.log", "a");

	fwrite($file, "Error de consulta - " . date("d/m/Y H:i:s") . "\r\n");
	fwrite($file, "Codigo: \"" . $consulta . "\"\r\n\r\n");
	echo $consulta;
	fclose($file);
}

function container_link($up, $down)
{
	ejecutar("insert into container_link (id_container_up, id_container_down) values (" . $up . "," . $down . ")");
}

function container_unLink($id)
{
	ejecutar("delete from container_link where id_container_up=".$id. " or id_container_down = ".$id);
}


function add_field($container, $field, $subfield, $data = "")
{
	ejecutar("insert into container_field_data (id_field, id_subfield, id_container, data) values (" .
		$field . "," . $subfield . "," . $container . ",'" . $data . "')");
}

function get_defauld_from_type($type)
{
	$return = array();

	$res = ejecutar("select id_field, id_subfield from container_defauld_field where id_container_type = " . $type);

	$x = 0;

	while ($row = mysqli_fetch_assoc($res)) {
		$return[$x] = array();
		$return[$x]['field'] = $row['id_field'];
		$return[$x]['subfield'] = $row['id_subfield'];
		$x++;
	}

	return $return;
}

function getFirstContainer($id_MainContainer)
{
	$firstContainer= ejecutar("select CM.id_first_container from container_main CM where CM.id_main_container=".$id_MainContainer);

	return mysqli_fetch_assoc($firstContainer)['id_first_container'];
}

function getUpperContainer($id_container)
{
	/*
	$up_links = ejecutar("WITH RECURSIVE down_link(id_up, id_down) AS( " .
		"SELECT id_container_up 'id_up', id_container_down 'id_down' FROM container_link " .
		"WHERE id_container_down = " . $id_container . " " .
		"UNION ALL SELECT id_container_up 'id_up', id_container_down 'id_down' FROM container_link " .
		" INNER JOIN down_link ON container_link.id_container_down = down_link.id_up " .
		") SELECT id_up, id_down  FROM down_link");

	if (mysqli_num_rows($up_links) != 0)
		while ($row = mysqli_fetch_assoc($up_links)) {
			$upper = $row['id_up'];
		}
*/

	$up_links = ejecutar("select CM.id_first_container from container C inner join container_main CM on C.id_main_container = CM.id_main_container where C.id_container=".$id_container);

	return mysqli_fetch_assoc($up_links)['id_first_container'];
}

function createNewPiece($DownLinkEspression = 0)
{
	$newPiece = insertar("insert into container (id_container_type, date_change) values (1, now())");

	foreach (get_defauld_from_type(1) as $key => $value) {
		add_field($newPiece, $value['field'], $value['subfield'], "");
	}

	if ($DownLinkEspression != 0)
		container_link($newPiece, $DownLinkEspression);
}

function createNewExpression($upLinkPiece = 0, $DownLinkManifestation = 0)
{
	$newExpresion = insertar("insert into container (id_container_type, date_change) values (2, now())");

	foreach (get_defauld_from_type(2) as $key => $value) {
		add_field($newExpresion, $value['field'], $value['subfield'], "");
	}

	if ($upLinkPiece != 0)
		container_link($upLinkPiece, $newExpresion);

	if ($DownLinkManifestation != 0)
		container_link($newExpresion, $DownLinkManifestation);
}

function createNewManifestation($upLinkExpresion = 0)
{
	$newManifestation = insertar("insert into container (id_container_type, date_change) values (3, now())");

	foreach (get_defauld_from_type(2) as $key => $value) {
		add_field($newManifestation, $value['field'], $value['subfield'], "");
	}

	if ($upLinkExpresion != 0)
		container_link($upLinkExpresion, $newManifestation);
}

function addInventToContainer($id_container, $id_library, $invent, $part = "")
{
	ejecutar("insert into container_invent (id_container, id_library, invent, part) values (".
		$id_container.",".$id_library.",".$invent.",'".$part."')");
}

function blockRec($id_container)
{
	ejecutar("insert into container_block (id_container, date) values (" . $id_container . ", now())");
}

function unblockRec($id_container)
{
	ejecutar("delete from container_block where id_container=" . $id_container);
}

function isBlock($id_container)
{
	$return = true;

	$res = ejecutar("select id_container, date from container_block where id_container =" . $id_container);

	if (mysqli_num_rows($res) > 0) {

		$row = mysqli_fetch_assoc($res);

		if (blockFinish($row['date'])) {
			unblockRec($id_container);
			$return = false;
		}
	} else
		$return = false;

	return $return;
}

function blockFinish($blockTime)
{
	$return = false;

	$fecha1 = new DateTime($blockTime); //fecha inicial
	$fecha2 = new DateTime(date("Y-m-d H:i:s")); //fecha de cierre
	//$fecha2 = new DateTime(date("2019-08-14 8:00:00")); //fecha de cierre

	if ((abs($fecha1->getTimestamp() - $fecha2->getTimestamp()) / 60) > 60)
		$return = true;

	return $return;
}















function get_next_invent()
{
	$res = ejecutar("select max(inventario) as total from invent where inventario < 1000000");

	return (mysqli_fetch_array($res)[0]) + 1;
}

function new_record($invent)
{
	ejecutar("insert into invent (inventario, fecha_alta) values (" . $invent . ", now() )");
}

function isDownInBase($bib, $invent)
{
	$len = strlen($invent);

	for ($x = $len; $x < 7; $x++)
		$invent = "0" . $invent;

	$expresion = "b " . $bib . " " . $invent . "$";

	exec('c:/xampp/cgi-bin/new_script/wxis.exe IsisScript=c:/xampp/cgi-bin/InventScripts/SearchMini-Bases.xis expresion="' . $expresion . '" from="1" quantity="1" ', $out, $status);

	$out = implode($out); // json a string
	//$out = html_entity_decode($out, ENT_QUOTES | ENT_XML1 | ENT_HTML5, 'UTF-8');
	$out = mb_convert_encoding($out, 'UTF-8', 'UTF-8');
	//var_dump($out);
	$out = json_decode($out, true); // array
	//var_dump($out); 


	return $out["total"];
}





function getCover($invent, $pathCover)
{
	$return = 0;

	//$coverResult = ejecutarPublicServer("select C.id_cover, C.file 'file' from coverapply CA inner join cover C on CA.id_cover = C.id_cover where CA.invent=" . $invent);
	$coverResult = ejecutar("select C.id_cover, C.file 'file' from coverapply CA inner join cover C on CA.id_cover = C.id_cover where CA.invent=" . $invent);

	if (mysqli_num_rows($coverResult) > 0) {
		$file = mysqli_fetch_assoc($coverResult)['file'];

		$image = $pathCover . $file;

		$imageData = base64_encode(file_get_contents($image));

		$return = 'data:image/jpeg;base64,' . $imageData;
	}

	return $return;
}

function getCoverByFile($file, $pathCover)
{
	$return = 0;

	$image = $pathCover . $file;

	$imageData = base64_encode(file_get_contents($image));

	$return = 'data:image/jpeg;base64,' . $imageData;

	return $return;
}
