<?php
/**
* @author Adhir Ervin Serrano del Castillo <al221210007@gmail.com> 
* @version 0.1 
* @license Reservado a kreatsolutions
*/
?>

<?php
session_start();
$iduses = $_SESSION['iduses'];
if($iduses=='')
{
print "<meta http-equiv='refresh' content='0;url=index.php'>";
exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Adhir Ervin Serrano del Castillo">
    
    <title>SCA</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/green.css" id="theme" rel="stylesheet">
    <script src="assets/js/validations.js"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <li class="nav-item"> 
                            <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-power-off"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i>Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"></li>
                        <li>
                            <a class="has-arrow" href="caidas.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Inicio</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="csv/index.php" aria-expanded="false"><i class="mdi mdi-cloud-upload"></i><span class="hide-menu">IMPORTAR CSV</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        
        <div class="page-wrapper">
                <div class="card">
                            <div class="card-body">
                               
                             
                        <p>
            <input type="text" id="txtfind" onkeyup="aFunction()" placeholder="BÚSQUEDA RÁPIDA..."  class="form-control "/>
          </p>
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='resultado'>
                          
                            <?php
                            include ('conn.php');
                            
                            $sql = "SELECT * FROM caidas ORDER BY razon_social ASC";
                            $consulta= mysql_query($sql) or die ("Error de consulta.");
                            $registro = mysql_num_rows($consulta);
                            
                            if ($registro==0)
                            {
                              echo "<br> No se encontraron estaciones de servicio.<br> ";
                            }
                            else
                            {
                              echo "
                              <thead>
                              <tr>
                                  <th style='text-align:center;'>Razón social</th>
                                  <th style='text-align:center;'>No. estación de servicio</th>
                                  <th style='text-align:center;'>Encargado de la estación</th>
                                  <th style='text-align:center;'>Apartados</th>
                              </tr>
                              </thead>";
                              for ($y=0; $y <$registro ; $y++) { 
                                $idc             = mysql_result($consulta,$y,'idc');
                                $no_estacion     = mysql_result($consulta,$y,'no_estacion');
                                $razon_social    = mysql_result($consulta,$y,'razon_social');
                                $direccion       = mysql_result($consulta,$y,'direccion');
                                $alfanum         = mysql_result($consulta,$y,'alfanum');
                                $fecha_publicacion   = mysql_result($consulta,$y,'fecha_publicacion');
                                $fecha_inicio     = mysql_result($consulta,$y,'fecha_inicio');
                                $nombre_reviso    = mysql_result($consulta,$y,'nombre_reviso');
                                $puesto_reviso    = mysql_result($consulta,$y,'puesto_reviso');
                                $quien_aprobo     = mysql_result($consulta,$y,'quien_aprobo');
                                $puesto_aprobo    = mysql_result($consulta,$y,'puesto_aprobo');
                                

                             echo"<tbody>
                              <tr>
                                  <td style='text-align:center;'>$razon_social</td>
                                  <td style='text-align:center;'>$no_estacion</td>
                                  <td style='text-align:center;'>$quien_aprobo</td>
                                  <td style='text-align:center;'>
<form action='templateModel/tipoapartado.php' method='POST'>
Apartado: 
<select name='tipoa'>
<option value='19'>Anexos</option>
<option value='1'>Apartado I Manual</option>
<option value='2'>Apartado II</option>
<option value='3'>Apartado III</option>
<option value='4'>Apartado IV</option> 
<option value='5'>Apartado V</option>
<option value='6'>Apartado VI</option>
<option value='7'>Apartado VII</option>
<option value='8'>Apartado VIII</option>
<option value='9'>Apartado IX</option>
<option value='10'>Apartado X</option>
<option value='11'>Apartado XI</option>
<option value='20'>Apartado XI (Excel)</option>
<option value='12'>Apartado XII</option>
<option value='21'>Apartado XII (Excel)</option>
<option value='13'>Apartado XIII</option>
<option value='14'>Apartado XIV</option>
<option value='15'>Apartado XV</option>
<option value='16'>Apartado XVI</option>
<option value='17'>Apartado XVII</option>
<option value='18'>Apartado XVIII</option>
</select>
<input type='hidden' value='$idc' name='idc'>
<input type='submit' value='Descargar' class='btn btn-success '>
</form>                                  
                                  </td>
                              </tr>";
                            }
                              echo "</tbody>
                          </table>
                          </div>   
                        </div>
                    </div>";
                          }
                          ?>
       </div>         
                            </div>
                </div>
        </div>
            <footer class="footer">
                © 2018 SCA
            </footer>
        </div>
    </div>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/plugins/echarts/echarts-all.js"></script>
    <script src="js/dashboard5.js"></script>
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>