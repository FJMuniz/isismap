<?php

require $_SERVER['DOCUMENT_ROOT'] . "/azeno/config/Config.php";
require $_SERVER['DOCUMENT_ROOT'] . "/azeno/config/Autoload.php";

use Config\Autoload;

Autoload::Start();

session_start();


if (isset($_POST['desde'])) {


    function microtime_float()
    {
        list($useg, $seg) = explode(" ", microtime());
        return ((float)$useg + (float)$seg);
    }

    $tiempo_inicio = microtime_float();


    $desde = $_POST['desde'];
    $cuantos = $_POST['cuantos'];


    echo "procesado de " . $desde . " hasta " . ($desde + $cuantos) . "<br>";


    for ($i = $desde; $i < ($cuantos + $desde); $i++) {

        $isisResults = buscarMFN($i);

        // var_dump($isisResults);

        $isisResults = implode($isisResults); // json a string
        $isisResults = utf8_decode($isisResults);
        $isisResults = htmlentities($isisResults, ENT_COMPAT, 'ISO-8859-1', true);
        $isisResults = html_entity_decode($isisResults);
        $isisResults = mb_convert_encoding($isisResults, 'UTF-8', 'UTF-8');
        // $isisResults = html_entity_decode($isisResults, ENT_QUOTES | ENT_XML1);

        // $isisResults = utf8_encode($isisResults);
        $isisResults = json_decode(utf8_decode($isisResults), true); // de string a array 
        // var_dump($isisResults);
        if ($isisResults != null) {

            $dbc = mysqli_connect('localhost', 'root', '', 'isismigration', '3306');
            $query = 'INSERT INTO isis (' .
                'MFN,           tituloT,    tituloP,    tituloI,        tituloU,    autorN,     autorG,     autorF,     autorA,     autorH, ' .
                'autorB,        autorALL,   edicion,    editorialL,     editorialG, editorialE, editorialD, editorialT, anoedicion, colacion, ' .
                'coleccion,     ISBN,       notas,      idioma,         tipo,       ubicacion,  soporte,    signaturaT, signaturaX, signaturaC, ' .
                'signaturaH,    signatura1, signatura2, signatura3,     signaturaP, signaturaS, signaturaA, signaturaV, signaturaN, signaturaE, ' .
                'signaturaJ,    fechaI,     fechaM,     designacion,    NU,         NB,         materia62,  materia700, bib12,      bib1, ' .
                'bib2,          bib3,       bib4,       bib5,           bib6,       bib7,       bib8,       bib9,       bib10,      bib11,' .
                'bib14,         bib91,      bib92,      bib93,          bib94,      bib95,      bib96,      bib97,      bib98,      bib99, ' .
                'bib89,         bib90,      bib100,     bib101,         bib102,     bib103,     bib104,     v129,       v130,       v131,' .
                'v132,          v133,       v134,           v135,       v136,       v137,       v138,       v139,       v140) '
                . 'VALUES ( ' .
                ' " ' . $isisResults['MFN'] . ' ", ' .
                ' " ' . $isisResults['tituloT'] . ' ", ' .
                ' " ' . $isisResults['tituloP'] . ' ", ' .
                ' " ' . $isisResults['tituloI'] . ' ", ' .
                ' " ' . $isisResults['tituloU'] . ' ", ' .
                ' " ' . $isisResults['autorN'] . ' ", ' .
                ' " ' . $isisResults['autorG'] . ' ", ' .
                ' " ' . $isisResults['autorF'] . ' ", ' .
                ' " ' . $isisResults['autorA'] . ' ", ' .
                ' " ' . $isisResults['autorH'] . ' ", ' .

                ' " ' . $isisResults['autorB'] . ' ", ' .
                ' " ' . $isisResults['autorALL'] . ' ", ' .
                ' " ' . $isisResults['edicion'] . ' ", ' .
                ' " ' . $isisResults['editorialL'] . ' ", ' .
                ' " ' . $isisResults['editorialG'] . ' ", ' .
                ' " ' . $isisResults['editorialE'] . ' ", ' .
                ' " ' . $isisResults['editorialD'] . ' ", ' .
                ' " ' . $isisResults['editorialT'] . ' ", ' .
                ' " ' . $isisResults['anoedicion'] . ' ", ' .
                ' " ' . $isisResults['colacion'] . ' ", ' .

                ' " ' . $isisResults['coleccion'] . ' ", ' .
                ' " ' . $isisResults['ISBN'] . ' ", ' .
                ' " ' . $isisResults['notas'] . ' ", ' .
                ' " ' . $isisResults['idioma'] . ' ", ' .
                ' " ' . $isisResults['tipo'] . ' ", ' .
                ' " ' . $isisResults['ubicacion'] . ' ", ' .
                ' " ' . $isisResults['soporte'] . ' ", ' .
                ' " ' . $isisResults['signaturaT'] . ' ", ' .
                ' " ' . $isisResults['signaturaX'] . ' ", ' .
                ' " ' . $isisResults['signaturaC'] . ' ", ' .

                ' " ' . $isisResults['signaturaH'] . ' ", ' .
                ' " ' . $isisResults['signatura1'] . ' ", ' .
                ' " ' . $isisResults['signatura2'] . ' ", ' .
                ' " ' . $isisResults['signatura3'] . ' ", ' .
                ' " ' . $isisResults['signaturaP'] . ' ", ' .
                ' " ' . $isisResults['signaturaS'] . ' ", ' .
                ' " ' . $isisResults['signaturaA'] . ' ", ' .
                ' " ' . $isisResults['signaturaV'] . ' ", ' .
                ' " ' . $isisResults['signaturaN'] . ' ", ' .
                ' " ' . $isisResults['signaturaE'] . ' ", ' .

                ' " ' . $isisResults['signaturaJ'] . ' ", ' .
                ' " ' . $isisResults['fechaI'] . ' ", ' .
                ' " ' . $isisResults['fechaM'] . ' ", ' .
                ' " ' . $isisResults['designacion'] . ' ", ' .
                ' " ' . $isisResults['NU'] . ' ", ' .
                ' " ' . $isisResults['NB'] . ' ", ' .
                ' " ' . $isisResults['materia62'] . ' ", ' .
                ' " ' . $isisResults['materia700'] . ' ", ' .
                ' " ' . $isisResults['bib12'] . ' ", ' .
                ' " ' . $isisResults['bib1'] . ' ", ' .

                ' " ' . $isisResults['bib2'] . ' ", ' .
                ' " ' . $isisResults['bib3'] . ' ", ' .
                ' " ' . $isisResults['bib4'] . ' ", ' .
                ' " ' . $isisResults['bib5'] . ' ", ' .
                ' " ' . $isisResults['bib6'] . ' ", ' .
                ' " ' . $isisResults['bib7'] . ' ", ' .
                ' " ' . $isisResults['bib8'] . ' ", ' .
                ' " ' . $isisResults['bib9'] . ' ", ' .
                ' " ' . $isisResults['bib10'] . ' ", ' .
                ' " ' . $isisResults['bib11'] . ' ", ' .

                ' " ' . $isisResults['bib14'] . ' ", ' .
                ' " ' . $isisResults['bib91'] . ' ", ' .
                ' " ' . $isisResults['bib92'] . ' ", ' .
                ' " ' . $isisResults['bib93'] . ' ", ' .
                ' " ' . $isisResults['bib94'] . ' ", ' .
                ' " ' . $isisResults['bib95'] . ' ", ' .
                ' " ' . $isisResults['bib96'] . ' ", ' .
                ' " ' . $isisResults['bib97'] . ' ", ' .
                ' " ' . $isisResults['bib98'] . ' ", ' .
                ' " ' . $isisResults['bib99'] . ' ", ' .

                ' " ' . $isisResults['bib89'] . ' ", ' .
                ' " ' . $isisResults['bib90'] . ' ", ' .
                ' " ' . $isisResults['bib100'] . ' ", ' .
                ' " ' . $isisResults['bib101'] . ' ", ' .
                ' " ' . $isisResults['bib102'] . ' ", ' .
                ' " ' . $isisResults['bib103'] . ' ", ' .
                ' " ' . $isisResults['bib104'] . ' ", ' .
                ' " ' . $isisResults['v129'] . ' ", ' .
                ' " ' . $isisResults['v130'] . ' ", ' .
                ' " ' . $isisResults['v131'] . ' ", ' .

                ' " ' . $isisResults['v132'] . ' ", ' .
                ' " ' . $isisResults['v133'] . ' ", ' .
                ' " ' . $isisResults['v134'] . ' ", ' .
                ' " ' . $isisResults['v135'] . ' ", ' .
                ' " ' . $isisResults['v136'] . ' ", ' .
                ' " ' . $isisResults['v137'] . ' ", ' .
                ' " ' . $isisResults['v138'] . ' ", ' .
                ' " ' . $isisResults['v139'] . ' ", ' .
                ' " ' . $isisResults['v140'] . ' " ' .
                ')';

            mysqli_query($dbc, $query);
        }
    }
}

$tiempo_fin = microtime_float();
$tiempo = $tiempo_fin - $tiempo_inicio;
echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio) . "<br>";


function registrar($rec)
{
    $file = fopen("cargada.log", "a");

    fwrite($file, $rec . "\r\n");
    fclose($file);
}


function buscarMFN($mfn)
{
    exec('c:/xampp/cgi-bin/OPAC2/wxis.exe IsisScript=isistomysql.xis id="' . $mfn . '"', $out, $status);
    // var_dump($out);
    return $out;
}
