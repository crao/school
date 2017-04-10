<?php
include_once 'DbConfig.php';

class Crud extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
		
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
	
		

	public function getNorows($query)
	{		
		
		//$con=mysqli_connect($host,$username,$password,$database );
		
		//$con=mysqli_connect("localhost", "root", "", "schoolerp");
		$con = $this->myconnect();
		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		if ($result=mysqli_query($con, $query))
		{
	
		$rowcount=mysqli_num_rows($result);
		//printf("Result set has %d rows.\n",$rowcount);
        return $rowcount;
		}
		
	}
	
	function is_session_started()
	{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
	}
}
?>
