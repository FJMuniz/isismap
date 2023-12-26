<?php

namespace Config;

use Config\Chronometer;

require_once("chronometer.php");


setlocale(LC_TIME, 'es_ES', 'esp_esp');

define("ROOT", dirname(__DIR__) . "/");
define("FRONT_ROOT", "/utn/tpfinallab4/");
define("IMAGE_PATH", FRONT_ROOT . "images/");
define("VIEWS_PATH", "views/");
define("CSS_PATH", FRONT_ROOT . VIEWS_PATH . "css/");
define("JS_PATH", FRONT_ROOT . VIEWS_PATH . "js/");

// define("DB_HOST", "server");
// define("DB_HOST", "facundo"); // HOST 
define("DB_HOST", "127.0.0.1");

define("DB_NAME", "isisweb");
define("DB_USER", "isis");
define("DB_PASS", "Spectrum4v");
define("CGI_PATH", "C:/xampp/cgi-bin/");

define("TOKENSECRETKEY", "LBLND000196");
define("TOKENMINUTESTOLIVE", 10);
define("SECURITYSTRINGLENGTH", 20);

// TIEMPO PARA EDITAR PATRIMONY, EN MINUTOS
define("TIMETOEDITPATRIMONY", 60);

define("COVERPATH", "C://xampp//htdocs//files//coverfiles/");
define("PUBLICCOVERPATH", "http://server/files/coverfiles/");

define("PHOTO_PARTNER_PATH", "http://server/files/photo_user/");

// minutos que se ven los pedidos de deposito
define("DEPOSIT_SHOW_REQUEST", "5");

define("PERSONALFILEPATH", "c://xampp//htdocs//files//personal_files//");
define("PERSONALOLDFILEPATH", "c://xampp//htdocs//files//personal_files//");
define("PUBLICPERSONALFILEPATH", "http://server/files/personal_files/");

define("PERSONALFILEPATHCODES", "codes");
define("PERSONALFILEPATHLASTARRIVAL", "lastarrival");
define("PERSONALFILEPATHEXITHOURS", "exithours");
define("PERSONALFILEPATHFREEDAYS", "freedays");
define("PERSONALFILEPATHFROM", "from");
define("PERSONALFILEPATHINTROS", "intros");
define("PERSONALFILEPATHDIGITALLEGAJO", "digitallegajo");


define("IMAGESIZESMALL", 256);
define("IMAGESIZEMEDIUM", 512);
define("IMAGESIZELARGE", 1024);





// --------- PERSONAL ---------

//  SH          salida por hora
//  cod15       codigo 15 - dias gratis sin descuento
//  cod31       codigo 31 - dias de examen
//  MT          minutos de llegada tarde

define("SH_max_mensual", 2);
define("SH_max_anual", 12);
define("COD15MAXFORYEAR", 3);
define("COD31MAXFORYEAR", 12);
define("MT_max_mensual", 20);
define("MT_max_anual", 120);


// BUSQUEDAS

define("MAX_MATERIAS_BY_SEARCH", 10);
define("MAX_RESULTS_BY_SEARCH", 500);



//FUNCIONES DE MANEJO DE TIEMPO PARA CALCULOS DE PROCESOS



$chronometer = Chronometer::GetInstance();
