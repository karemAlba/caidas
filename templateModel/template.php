<?php
/**
* @author Adhir Ervin Serrano del Castillo <al221210007@gmail.com> 
* @version 0.1 
* @license Reservado a kreatsolutions
*/
?>
<?php

require_once dirname(__FILE__).'/../assets/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;

$templateWord = new TemplateProcessor('../assets/templates/Apartado I Manual.docx');

$idc=$_REQUEST['idc'];
$razon_social=$_REQUEST['razon_social'];
$alfanum=$_REQUEST['alfanum'];
$encargado_estacion=$_REQUEST['encargado_estacion'];

$templateWord->setValue('Value1',$alfanum);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$encargado_estacion);


$templateWord->saveAs('ApartadoI.docx');

header("Content-Disposition: attachment; filename=ApartadoI.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoI.docx');
        
?>