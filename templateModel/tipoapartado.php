<?php
/**
* @author Adhir Ervin Serrano del Castillo <al221210007@gmail.com> 
* @version 0.1 
* @license Reservado a kreatsolutions
*/
?>
<?php
    $idc  =$_REQUEST['idc'];
	$tipo =$_REQUEST['tipoa'];

	//word
	$wd1="1";
	$wd2="2";
	$wd3="3";
	$wd4="4";
	$wd5="5";
	$wd6="6";
	$wd7="7";
	$wd8="8";
	$wd9="9";
	$wd10="10";
	$wd11="11";
	$wd12="12";
	$wd13="13";
	$wd14="14";
	$wd15="15";
	$wd16="16";
	$wd17="17";
	$wd18="18";
	$wd19="19";
	//excel
	$e1="1";
	$e2="2";
	

	switch($tipo){
		//WORD
		case 1:
		header("Location: word.php?idc=$idc&wd1=$wd1");
		break;
		case 2:
		header("Location: word.php?idc=$idc&wd2=$wd2");
		break;
		case 3:
		header("Location: word.php?idc=$idc&wd3=$wd3");
		break;
		case 4:
		header("Location: word.php?idc=$idc&wd4=$wd4");
		break;
		case 5:
		header("Location: word.php?idc=$idc&wd5=$wd5");
		break;
		case 6:
		header("Location: word.php?idc=$idc&wd6=$wd6");
		break;
		case 7:
		header("Location: word.php?idc=$idc&wd7=$wd7");
		break;
		case 8:
		header("Location: word.php?idc=$idc&wd8=$wd8");
		break;
		case 9:
		header("Location: word.php?idc=$idc&wd9=$wd9");
		break;
		case 10:
		header("Location: word.php?idc=$idc&wd10=$wd10");
		break;
		case 11:
		header("Location: word.php?idc=$idc&wd11=$wd11");
		break;
		case 12:
		header("Location: word.php?idc=$idc&wd12=$wd12");
		break;
		case 13:
		header("Location: word.php?idc=$idc&wd13=$wd13");
		break;
		case 14:
		header("Location: word.php?idc=$idc&wd14=$wd14");
		break;
		case 15:
		header("Location: word.php?idc=$idc&wd15=$wd15");
		break;
		case 16:
		header("Location: word.php?idc=$idc&wd16=$wd16");
		break;
		case 17:
		header("Location: word.php?idc=$idc&wd17=$wd17");
		break;
		case 18:
		header("Location: word.php?idc=$idc&wd18=$wd18");
		break;
		case 19:
		header("Location: word.php?idc=$idc&wd19=$wd19");
		break;
		//EXCEL
		case 20:
		header("Location: excel.php?idc=$idc&e1=$e1");
		break;
		case 21:
		header("Location: excel.php?idc=$idc&e2=$e2");
		break;
	}
	
?>