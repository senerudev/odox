<?php
include '/config/config.php';
class DB {

	private $connection;

	function __construct() {
		try{
			$this->connection = mysqli_connect(Configuration::HOSTNAME,Configuration::USERNAME,Configuration::PASSWORD,Configuration::DATABASENAME);	
			if (mysqli_connect_errno()) {
			  $this->connection = null;
			}
		}catch(Exception $e){
			$this->connection = null;
		}		
	}

	public function getAccessHirache(){
		

		$query = "SELECT t1.description AS lev1, t2.description as lev2, t3.description as lev3, t4.description as lev4".
			"FROM hierarchy AS t1
			LEFT JOIN hierarchy AS t2 ON t2.Parent_hierachyId = t1.hierachyId
			LEFT JOIN hierarchy AS t3 ON t3.Parent_hierachyId = t2.hierachyId
			LEFT JOIN hierarchy AS t4 ON t4.Parent_hierachyId = t3.hierachyId
			WHERE t1.Parent_hierachyId = ".$this->getAccessLevel();
		
	}

	public function getAccessLevel()
	{
		if(isset($this->getSession('userId'))){
			$query = "SELECT `userId`, `hierachyId`, `isActive` FROM `userHierachy` WHERE `userId`= ".$this->getSession('userId');

			return NULL;		
		}else{
			
		}
	}

	public function getAuthUsers()
	{
		return array('username'=>$);
	}

	public function getLocations($org_reg_number)
	{
		
	}

	public function setLocation($info)
	{
		
	}

	public function setSession($key,$value)
	{
		$_SESSION[$key] = $value;	
	}

	public function getSession($key)
	{
		return $_SESSION[$key];
	}

	public function userLogin($username,$password)
	{
		$query = "SELECT * FROM user WHERE `userName`='{$username}'  and `password`='{$password}'";
		$result = mysqli_query($this->connection,$query);

		// $userdata = array('' => , );
		while($row = mysqli_fetch_array($result)) {
		
			$this->setSession('profile-name',$row["name"]);
			$this->setSession('isAdmin',$row["isAdmin"]);
			$this->setSession('userId',$row["userId"]);
			$this->setSession('username',$username);

		  echo $row['name'] . " " . $row['repositoryId']. " " . $row['isAdmin']. " " . $row['isActive']." ".$row["userId"];
		  echo "<br>";
		}
	}
}
?>