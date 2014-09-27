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
			$query = "SELECT distinct t1.description AS lev1,t1.geoCode AS lev1geoCode ,t2.description AS lev2,t2.geoCode AS lev2geoCode ,t3.description AS lev3,t3.geoCode AS lev3geoCode ,t4.description AS lev4,t4.geoCode AS lev4geoCode FROM hierarchy AS t1 LEFT JOIN hierarchy AS t2 ON t2.Parent_hierachyId = t1.hierachyId LEFT JOIN hierarchy AS t3 ON t3.Parent_hierachyId = t2.hierachyId LEFT JOIN hierarchy AS t4 ON t4.Parent_hierachyId = t3.hierachyId WHERE t1.Parent_hierachyId in (".$this->getAccessLevel().") order by lev1,lev2,lev3,lev4";
			$result = mysqli_query($this->connection,$query);
			
			$tag = "";
			while($row = mysqli_fetch_array($result)) {
				
				if($row['lev1'] !== ""){
					if(null !== $row['lev2']){
						if(null !== $row['lev3']){
							if(null !== $row['lev4']){
								$tag .= $row["lev4"].":".$row["lev4geoCode"].";";
							}else{
								$tag .= $row["lev3"].":".$row["lev3geoCode"].";";
							}
						}else{
							$tag .= $row["lev2"].":".$row["lev2geoCode"].";";
						}		
					}else{
						$tag .= $row["lev1"].":".$row["lev1geoCode"].";";
					}	
				}

			}
			try{
				$rootNode = explode(";", $tag);
				$i = 0;		$j = 1;
				foreach ($rootNode as $key => $value) {
					if($j < 4){
						$secoundNode = explode(":", $rootNode[$i]);
						if(is_array($secoundNode)){
							$city = $secoundNode[0];
							if($secoundNode[1] != null){
								$location = $secoundNode[1];
							}
							echo("Name : ".$city." Locaion".$location);
							echo "<hr>";
							$i++;
						}
					}
					$j++;
				}
			}catch(Exception $e){
				
			}

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
		$query = "SELECT * FROM user WHERE `userName`='{$username}'  and `password`='{$password}'";
		$result = mysqli_query($this->connection,$query);

		// $userdata = array('' => , );
		while($row = mysqli_fetch_array($result)) {
		
			$this->setSession('profile-name',$row["name"]);
			$this->setSession('isAdmin',$row["isAdmin"]);
			$this->setSession('userId',$row["userId"]);
			$this->setSession('username',$username);
		}
	}
}
?>