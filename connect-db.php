<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Connection with Database</title>
</head>
<body>

<?php

	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'schoolerp');
	
	$db_host="localhost";
	$db_user="root";
	$db_pass='';
	$db_name="schoolerp";

	
	$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


    class dbConnect {
    public $host;
    public $user;
    public $passwd;
    public $dataBase;
    
    function __construct($host,$user,$passwd,$dataBase) {
        $this->host = $host;
        $this->user = $user;
        $this->passwd = $passwd;
        $this->dataBase = $dataBase;
    }
    
    function connect($sql) {
		$conn=mysql_connect($this->host,$this->user,$this->passwd) or die (mysql_error());
        $db=mysql_select_db($this->dataBase,$conn) or die ("Unable to connect to database1");
        
        $result = mysql_query($sql, $conn) or die ("Query failed");
            return $result;
    }
}

?>

</body>
</html>
