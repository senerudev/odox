<?php
require 'vendor/autoload.php';
use Aws\Common\Aws;
// Create a service builder using a configuration file
	$aws = Aws::factory('awsConfig.php');
	// Get the client from the builder by namespace
	$client = $aws->get('S3');
// Create a valid bucket and use a LocationConstraint


$bucket = uniqid("odox-", true);
echo "Creating bucket named {$bucket}\n";
$result = $client->createBucket(array(
    'Bucket' => $bucket,
	'LocationConstraint' => 'ap-southeast-1'
));

// Wait until the bucket is created
$client->waitUntilBucketExists(array('Bucket' => $bucket));

/*
 Files in Amazon S3 are called "objects" and are stored in buckets. A specific
 object is referred to by its key (i.e., name) and holds data. Here, we create
 a new object with the key "hello_world.txt" and content "Hello World!".

 For a detailed list of putObject's parameters, see:
 http://docs.aws.amazon.com/aws-sdk-php-2/latest/class-Aws.S3.S3Client.html#_putObject
*/
//https://s3-ap-southeast-1.amazonaws.com/odox-5426224320afe2.21336746/hello_world.txt
$key = 'hello_world.txt';
echo "Creating a new object with key {$key}\n";
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "Hello World!"
));

/*
 Download the object and read the body directly.

 For more examples of downloading objects, see the developer guide:
 http://docs.aws.amazon.com/aws-sdk-php-2/guide/latest/service-s3.html#downloading-objects

 Or the API documentation:
 http://docs.aws.amazon.com/aws-sdk-php-2/latest/class-Aws.S3.S3Client.html#_getObject
*/
echo "Downloading that same object:\n";
$result = $client->getObject(array(
    'Bucket' => $bucket,
    'Key'    => $key
));

echo "\n---BEGIN---\n";
echo $result['Body'];
echo "\n---END---\n\n";

/*
 Buckets cannot be deleted unless they're empty. With the AWS SDK for PHP, you
 have two options:

  - Use the clearBucket helper:
      http://docs.aws.amazon.com/aws-sdk-php-2/latest/class-Aws.S3.S3Client.html#_clearBucket
  - Or individually delete all objects.

 Since this sample created a new unique bucket and uploaded a single object,
 we'll just delete that object.
*/

//echo "Deleting object with key {$key}\n";
//$result = $client->deleteObject(array(
//    'Bucket' => $bucket,
//    'Key'    => $key
//));

/*
 Now that the bucket is empty, it can be deleted.

 See the API documentation for more information on deleteBucket:
 http://docs.aws.amazon.com/aws-sdk-php-2/latest/class-Aws.S3.S3Client.html#_deleteBucket
*/

//echo "Deleting bucket {$bucket}\n";
//$result = $client->deleteBucket(array(
//    'Bucket' => $bucket
//));
