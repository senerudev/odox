<?php
$con=mysqli_connect("54.169.80.82","root","gfzeoqfo","odox");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

        $query = "SELECT * FROM dataaws";
		$result = mysqli_query($this->connection,$query);
		$array = array();	
		while ($row = mysqli_fetch_array($result)) {
			$array['key'] = $row['key']; 
			$array['secret'] = $row['secret']; 
			$array['region'] = $row['region']; 
		}


return array(
    // Bootstrap the configuration file with AWS specific features
    'includes' => array('_aws'),
    'services' => array(
        // All AWS clients extend from 'default_settings'. Here we are
        // overriding 'default_settings' with our default credentials and
        // providing a default region setting.
        'default_settings' => array(
            'params' => $array
        )
    )
);
