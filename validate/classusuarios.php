<?php
/**
* @author Adhir Ervin Serrano del Castillo <al221210007@gmail.com> 
* @version 0.1 
* @license Reservado a kreatsolutions
*/
?>

<?php
class usuarios
{
private $idu;
private $user;
private $pass;
private $rol;
private $created_at;

        public function setcreated_at($created_at)
        {
        $this->created_at =$created_at;
        }
        public function getcreated_at()
        {
        return $this->created_at;
        }

        public function setidu($idu)
        {
        $this->idu =$idu;
        }
        public function getidu()
        {
        return $this->idu;
        }

		
        public function setuser($user)
        {
        $this->user =$user;
        }
        public function getuser()
        {
        return $this->user;
        }
		
        public function setpass($pass)
        {
        $this->pass =$pass;
        }
        public function getpass()
        {
        return $this->pass;
        }

        public function setrol($rol)
        {
        $this->rol =$rol;
        }
        public function getrol()
        {
        return $this->rol;
        }
	    
		public function searchbypass()
		{
	        $user  = $this->user;
		$pass  = $this->pass;
                                
		$sql = "SELECT * FROM usuarios WHERE USER= '$user' AND pass= '$pass' 
		AND rol = '1'";
		$consulta = mysql_query($sql) or die (mysql_error());
		$cuantos = mysql_num_rows($consulta);
		if ($cuantos==0)
		{
		return 0;
		}
		else
		{
        $this->idu     = mysql_result($consulta,0,'idu');
        $this->user    = mysql_result($consulta,0,'user');
        $this->pass    = mysql_result($consulta,0,'pass');	
        $this->rol     = mysql_result($consulta,0,'rol');
        $this->created_at   = mysql_result($consulta,0,'created_at');
		return 1;
}
}

public function nextuser()
{
$consulta1 = mysql_query("SET @resultado=0") or die ("Error de consulta 3");
$consulta2 = mysql_query("call nextuser(@resultado)") or die (mysql_error());
$consulta3 = mysql_query("select @resultado as resul") or die ("Error de consulta 5");
return mysql_result($consulta3,0,'resul');
}

}
?>