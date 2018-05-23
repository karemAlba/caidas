<?php
/**
* @author Adhir Ervin Serrano del Castillo <al221210007@gmail.com> 
* @version 0.1 
* @license Reservado a kreatsolutions
*/
?>
 <?php
require_once('../assets/Classes/PHPExcel/IOFactory.php');
    
    $idc =$_REQUEST['idc']; 
    $e1  =$_REQUEST['e1'];
    $e2  =$_REQUEST['e2'];


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


    if ($e1 == 1) {
    
    $objPHPExcel = new PHPExcel();
    $objReader = PHPExcel_IOFactory::createReader('Excel2007');
    $objPHPExcel = $objReader->load('S:\TI-ASEA\ApartadoXISASISOPA-PR-008.xlsx');

    $objPHPExcel->setActiveSheetIndex(0);
         
    
    $objPHPExcel->getActiveSheet()->SetCellValue('E1', $quien_aprobo);
    $objPHPExcel->getActiveSheet()->SetCellValue('E2', $direccion);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
   
    ob_clean();
    ob_start();
    header('Content-type: application/vnd.ms-excel; charset=UTF-8');
    header('Content-Disposition: attachment; filename="ApartadoXISASISOPA-PR-008.xlsx"');
    header('Cache-Control: max-age=0');
    ob_clean();

    $objWriter->save('php://output');

    } else if ($e2 == 2) {
    
    $objPHPExcel = new PHPExcel();
    $objReader = PHPExcel_IOFactory::createReader('Excel2007');
    $objPHPExcel = $objReader->load('S:\TI-ASEA\ApartadoXIISASISOPA-F-014.xlsx');

    $objPHPExcel->setActiveSheetIndex(0);
         
    $objPHPExcel->getActiveSheet()->SetCellValue('C2', $razon_social);
    $objPHPExcel->getActiveSheet()->SetCellValue('C3', $direccion);
    $objPHPExcel->getActiveSheet()->SetCellValue('C4', $quien_aprobo);
    $objPHPExcel->getActiveSheet()->SetCellValue('E2',$no_estacion);
    

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
   
    ob_clean();
    ob_start();
    header('Content-type: application/vnd.ms-excel; charset=UTF-8');
    header('Content-Disposition: attachment; filename="ApartadoXIISASISOPA-F-014.xlsx"');
    header('Cache-Control: max-age=0');
    ob_clean();

    $objWriter->save('php://output');        
    }
?>