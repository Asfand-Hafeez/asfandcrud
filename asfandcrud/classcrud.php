<?php
class crud {

private $db;
function __construct ($db_con)
{
	$this->db= $db_con;
	
}

public function fetchdata($sql)
{
	$query= $this->db->prepare($sql);
	$query->execute();
	return $query;
	}


public function redirect($sql)
{
	header("location:".$sql);
	// 	return true;
	}
	
public function updatedata($id,$name,$email)
{
	try
	{
		$stmt=$this->db->prepare("update crud set name=:name, email=:email where id =:id");
		$stmt->bindparam(":name",$name);
		$stmt->bindparam(":email",$email);
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}

public function insertdata($name,$email)
{
	try
	{
		$stmt=$this->db->prepare("INSERT INTO crud(name, email) VALUES (:name,:email)");
		$stmt->bindparam(":name",$name);
		$stmt->bindparam(":email",$email);
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}
















}
?>