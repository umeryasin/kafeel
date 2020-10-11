<?php
/**
 * Database Connection Class
 */
class DBConnection
{
	private $con;
	private $db_name;
	private $db_host;
	private $db_user;
	private $db_password;

	public function assign_val()
	{
		$this->db_name="wakeel_db";
		$this->db_host="localhost";
		$this->db_user="root";
		$this->db_password="";
	}
	
	public function makeconn()
	{
		$this->assign_val();
		$this->con=mysqli_connect($this->db_host,$this->db_user,$this->db_password,$this->db_name);
		return $this->con;
	}
}
?>