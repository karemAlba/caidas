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

$idc  =$_REQUEST['idc'];
//word
$wd1  =$_REQUEST['wd1'];
$wd2  =$_REQUEST['wd2'];
$wd3  =$_REQUEST['wd3'];
$wd4  =$_REQUEST['wd4'];
$wd5  =$_REQUEST['wd5'];
$wd6  =$_REQUEST['wd6'];
$wd7  =$_REQUEST['wd7'];
$wd8  =$_REQUEST['wd8'];
$wd9  =$_REQUEST['wd9'];
$wd10 =$_REQUEST['wd10'];
$wd11 =$_REQUEST['wd11'];
$wd12 =$_REQUEST['wd12'];
$wd13 =$_REQUEST['wd13'];
$wd14 =$_REQUEST['wd14'];
$wd15 =$_REQUEST['wd15'];
$wd16 =$_REQUEST['wd16'];
$wd17 =$_REQUEST['wd17'];
$wd18 =$_REQUEST['wd18'];
$wd19 =$_REQUEST['wd19'];

include ('../conn.php');
                            
                            $sql = "SELECT * FROM caidas where idc = $idc";
                            $consulta= mysql_query($sql) or die ("Error de consulta.");
                            $registro = mysql_num_rows($consulta);
                            
                            if ($registro==0)
                            {
                              echo "";
                            }
                            else
                            {
                              for ($y=0; $y <$registro ; $y++) { 
                                $idc               = mysql_result($consulta,$y,'idc');
                                $no_estacion       = mysql_result($consulta,$y,'no_estacion');
                                $razon_social      = mysql_result($consulta,$y,'razon_social');
                                $direccion         = mysql_result($consulta,$y,'direccion');
                                $alfanum           = mysql_result($consulta,$y,'alfanum');
                                $fecha_publicacion = mysql_result($consulta,$y,'fecha_publicacion');
                                $fecha_inicio      = mysql_result($consulta,$y,'fecha_inicio');
                                $nombre_reviso     = mysql_result($consulta,$y,'nombre_reviso');
                                $puesto_reviso     = mysql_result($consulta,$y,'puesto_reviso');
                                $quien_aprobo      = mysql_result($consulta,$y,'quien_aprobo');
                                $puesto_aprobo     = mysql_result($consulta,$y,'puesto_aprobo');
                            }
                          }


if ($wd1 == 1) {
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado I Manual.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoII.docx');

header("Content-Disposition: attachment; filename=ApartadoII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoII.docx');

    }else if ($wd2 == 2){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado II.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);

$templateWord->saveAs('ApartadoIII.docx');

header("Content-Disposition: attachment; filename=ApartadoIII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoIII.docx');

    }else if ($wd3 == 3){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado III.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);

$templateWord->saveAs('ApartadoIII.docx');

header("Content-Disposition: attachment; filename=ApartadoIII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoIII.docx');

    }else if ($wd4 == 4){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado IV.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);

$templateWord->saveAs('ApartadoIII.docx');

header("Content-Disposition: attachment; filename=ApartadoIII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoIII.docx');

    }else if ($wd5 == 5){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado V.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);

$templateWord->saveAs('ApartadoV.docx');

header("Content-Disposition: attachment; filename=ApartadoV.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoV.docx');

    }else if ($wd6 == 6){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado VI.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);

$templateWord->saveAs('ApartadoVI.docx');

header("Content-Disposition: attachment; filename=ApartadoVI.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoVI.docx');

    }else if ($wd7 == 7){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado VII.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoVII.docx');

header("Content-Disposition: attachment; filename=ApartadoVII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoVII.docx');

    }else if ($wd8 == 8){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado VIII.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoVIII.docx');

header("Content-Disposition: attachment; filename=ApartadoVIII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoVIII.docx');

    }else if ($wd9 == 9){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado IX.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoIX.docx');

header("Content-Disposition: attachment; filename=ApartadoIX.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoIX.docx');

    }else if ($wd10 == 10){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado X.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoX.docx');

header("Content-Disposition: attachment; filename=ApartadoX.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoX.docx');

    }else if ($wd11 == 11){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XI.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXI.docx');

header("Content-Disposition: attachment; filename=ApartadoXI.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXI.docx');

    }else if ($wd12 == 12){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XII.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXII.docx');

header("Content-Disposition: attachment; filename=ApartadoXII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXII.docx');

    }else if ($wd13 == 13){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XIII.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXIII.docx');

header("Content-Disposition: attachment; filename=ApartadoXIII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXIII.docx');

    }else if ($wd14 == 14){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XIV.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXIV.docx');

header("Content-Disposition: attachment; filename=ApartadoXIV.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXIV.docx');

    }else if ($wd15 == 15){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XV.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXV.docx');

header("Content-Disposition: attachment; filename=ApartadoXV.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXV.docx');

    }else if ($wd16 == 16){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XVI.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXVI.docx');

header("Content-Disposition: attachment; filename=ApartadoXVI.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXVI.docx');

    }else if ($wd17 == 17){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XVII.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXVII.docx');

header("Content-Disposition: attachment; filename=ApartadoXVII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXVII.docx');

    }else if ($wd18 == 18){
$templateWord = new TemplateProcessor('S:\TI-ASEA\Apartado XVIII.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ApartadoXVIII.docx');

header("Content-Disposition: attachment; filename=ApartadoXVIII.docx; charset=iso-8859-1");
echo file_get_contents('ApartadoXVIII.docx');
    }else if ($wd19 == 19){
$templateWord = new TemplateProcessor('S:\TI-ASEA\ANEXOS.docx');

$templateWord->setValue('Value1',$no_estacion);
$templateWord->setValue('Value2',$razon_social);
$templateWord->setValue('Value3',$direccion);
$templateWord->setValue('Value4',$alfanum);
$templateWord->setValue('Value5',$fecha_publicacion);
$templateWord->setValue('Value6',$fecha_inicio);
$templateWord->setValue('Value7',$nombre_reviso);
$templateWord->setValue('Value8',$puesto_reviso);
$templateWord->setValue('Value9',$quien_aprobo);
$templateWord->setValue('Value10',$puesto_aprobo);


$templateWord->saveAs('ANEXOS.docx');

header("Content-Disposition: attachment; filename=ANEXOS.docx; charset=iso-8859-1");
echo file_get_contents('ANEXOS.docx');
    }

?>