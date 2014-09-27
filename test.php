
<?php
 
// Example of how to log into Google API with ClientLogin, good to use when you're not making a webapp.
 
// code taken and minimally updated from http://kovshenin.com/2009/10/google-docs-api-client-login-with-php-and-curl-1494/
// Construct an HTTP POST request
$clientlogin_url = "https://www.google.com/accounts/ClientLogin";
$clientlogin_post = array(
     "accountType" => "GOOGLE",
    "Email" => "prasad@seneru.com",
    "Passwd" => "19890317nr",
    "service" => "writely",
    "source" => "OBOX"
);
 
// Initialize the curl object
$curl = curl_init($clientlogin_url);
 
// Set some options (some for SHTTP)
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $clientlogin_post);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
// Execute
$response = curl_exec($curl);
 
// Get the Auth string and save it
preg_match("/Auth=([a-z0-9_\-]+)/i", $response, $matches);
$auth = $matches[1];
 
echo "The auth string is: " . $auth;
 
// Include the Auth string in the headers
// Together with the API version being used
$headers = array(
    "Authorization: GoogleLogin auth=" . $auth,
    "GData-Version: 3.0",
);
 
// Now you have the $auth (above) make any requests you need using $headers above
// Make the request to get a list of all private documents
curl_setopt($curl, CURLOPT_URL, "https://docs.google.com/feeds/default/private/full");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POST, false);
 
$response = curl_exec($curl);
curl_close($curl);
 
// Parse the response
$response = simplexml_load_string($response);
 
// Output data
foreach($response->entry as $file) {
	echo "File: " . $file->title . "<br />";
	echo "Type: " . $file->content["type"] . "<br />";
	echo "Author: " . $file->author->name . "<br /><br />";
	//echo 'downloadUrl ' . $file->getExportLinks()['application/pdf']. "<br /><br />";
}
 
?>