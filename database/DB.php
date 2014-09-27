<?php
include '/config/config.php';
class DB {

	private $connection;

	function __construct() {
		session_start();
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

		$query = "SELECT t1.description AS lev1, t2.description as lev2, t3.description as lev3, t4.description as lev4 ".
			"FROM hierarchy AS t1 ".
			"LEFT JOIN hierarchy AS t2 ON t2.Parent_hierachyId = t1.hierachyId ".
			"LEFT JOIN hierarchy AS t3 ON t3.Parent_hierachyId = t2.hierachyId ".
			"LEFT JOIN hierarchy AS t4 ON t4.Parent_hierachyId = t3.hierachyId ".
			"WHERE t1.Parent_hierachyId IN (".$this->getAccessLevel().") order by lev1,lev2,lev3,lev4";
			$result = mysqli_query($this->connection,$query);	
			while($row = mysqli_fetch_array($result)) {	
				print_r($row);
			}
		
	}

	public function getAccessLevel()
	{
		if(null !==  $this->getSession('userId')){
			$query = "SELECT `userId`, `hierachyId`, `isActive` FROM `userHierachy` WHERE `userId`= ".$this->getSession('userId');
			$result = mysqli_query($this->connection,$query);
			$out = "";	
			while($row = mysqli_fetch_array($result)) {
				$out .= $row["hierachyId"].",";
			}
			return substr($out, 0,-1);
		}else{
			echo "Please login again";
		}
	}

	public function getAuthUsers()
	{
		//return array('username'=>$);
	}

	public function getLocations()
	{
		if(null !== $this->getSession('userId')){
			$query = "SELECT * FROM `Location` WHERE `organizationId`=1";//".$this->getSession('organizationId');
			$result = mysqli_query($this->connection,$query);
			$data = array();
			while($row = mysqli_fetch_array($result)){
				$data[$row['locationName']] = $row['geoLocation'];
			}
			
			return $data;
		}
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
		$query = "SELECT user.userId, user.userName, user.password, user.name, user.repositoryId, user.isAdmin, user.isActive, user.locationId, user.isHR, user.isMarketing, user.isDevelopment, user.isFinance,user.organizationId,Location.geoLocation FROM user INNER JOIN Location ON Location.id=user.locationId WHERE `userName`='{$username}'  and `password`='{$password}'";
		$result = mysqli_query($this->connection,$query);

		// $userdata = array('' => , );
		while($row = mysqli_fetch_array($result)) {
			$this->setSession('profile-name',$row["name"]);
			$this->setSession('isAdmin',$row["isAdmin"]);
			$this->setSession('userId',$row["userId"]);
			$this->setSession('username',$username);
			$this->setSession('isHR',$row["isHR"]);
			$this->setSession('isMarketing',$row["isMarketing"]);
			$this->setSession('isDevelopment',$row["isDevelopment"]);
			$this->setSession('isFinance',$row["isFinance"]);
			$this->setSession('geoLocation',$row["geoLocation"]);
			$this->setSession('organizationId',$row["organizationId"]);
		}

		if(null !== $this->getSession('username')){
			return true;
		}else{
			return false;
		}
	}

	public function registerUser($email,$password,$firstname,$lastname,$website)
	{
		$query = "SELECT * from user WHERE userName = '{$email}'";
		$result = mysqli_query($this->connection,$query);
		$row = mysqli_fetch_array($result);
		if(count($row) > 0){
			return 'exist';
		}else{
			$query = "INSERT INTO `user` VALUES ('','{$email}','{$password}','{$firstname} {$lastname}','','','','',0,0,0,0,0,'{$website}')";
			mysqli_query($this->connection,$query);
			return 'success';
		}
	}
}
?>