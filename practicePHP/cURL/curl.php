<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

//1- Initialize the curl
$ch=curl_init();

//2- Set options

curl_setopt($ch, CURLOPT_URL,'http://www.google.com');  //sending request to url

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); //Getting return value instead of directly outputting

curl_setopt($ch,CURLOPT_HEADER,0); //Whether to include header in output. (0 or 1)

//3- Executing the request and fetching the response
$output=curl_exec($ch);

//checking for errors
if($output===FALSE){
    echo "cURL Error: ". curl_error($ch);
}

//4- Cose and free up the curl handle
curl_close($ch);

// 5. Display raw output
// print_r($output);


// POST data with CURL---------------------------------------------------------/
// 1. Basic setup
$url = 'http://localhost/practicePHP/cURL/output.php';
$post_data = array(
  'query' => 'some stuff',
  'method' => 'post',
  'ya' => 'hoo',
);

// 2. Initialize
$ch = curl_init();

// 3. Set options
// URL to submit to
curl_setopt($ch, CURLOPT_URL, $url);

// Return output instead of outputting it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// We are doing a POST request
curl_setopt($ch, CURLOPT_POST, 1);

// Adding the post variables to the request
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

// 3. Execute the request and fetch the response. Check for errors
$output = curl_exec($ch);

if ($output === FALSE) {
  echo "cURL Error: " . curl_error($ch);
}

// 4. Close and free up the curl handle
curl_close($ch);

// 5. Display raw output
print_r($output);


?>