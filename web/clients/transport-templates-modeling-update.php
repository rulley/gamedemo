<?php
include 'layouts/session.php';
//ini_set('display_errors', 0);
//ini_set('display_startup_errors', 0);
//error_reporting(0);
 require_once "config.php";
    $request = json_decode(file_get_contents('php://input'));
     $type = $_GET['type'];
     $result = null;

    // $myfile = fopen("transport-dump.txt", "w") or die("Unable to open file!");
   // $txt = file_get_contents('php://input');
   //  fwrite($myfile, $txt);

        // in batch mode the updated records are available in the 'models' field
        $updatedNodes = $request->models;

        //$myfile = fopen("transport-dump.txt", "w") or die("Unable to open file!");

        foreach($updatedNodes as $node) {

          
            unset($node->attributes->revision_timestamp);
            unset($node->attributes->langcode);
            unset($node->attributes->created);
            unset($node->attributes->changed);
            unset($node->attributes->revision_translation_affected);
            unset($node->attributes->path);
            unset($node->relationships);

            $api_url = '' . $drupalurl . '/jsonapi/node/game/' . $node->id;        
            $node_encode = json_encode($node, JSON_UNESCAPED_SLASHES);
            $node_data_wrap = '{"data":' . $node_encode . '}';

//  DRUPAL API Url

 
//fwrite($myfile, $api_url);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $api_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PATCH',
  CURLOPT_POSTFIELDS => $node_data_wrap,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/vnd.api+json',
    'Accept: application/vnd.api+json',
    'Authorization: Bearer  ' . $_SESSION["tok"] . ''),
  )
);



$response = curl_exec($curl);

curl_close($curl);
//echo $response;


}

 echo "status: 200";

// Set response content type
//header('Content-Type: application/json');
//echo json_encode($result);

    
    ?>