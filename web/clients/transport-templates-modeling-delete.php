<?php
include 'layouts/session.php';
//ini_set('display_errors', 0);
//ini_set('display_startup_errors', 0);
//error_reporting(0);
    
    require_once "config.php";
    $request = json_decode(file_get_contents('php://input'));
    $type = $_GET['type'];
    $result = null;
    
        // in batch mode the updated records are available in the 'models' field
        $updatedNodes = $request->models;

        //$myfile = fopen("transport-dump.txt", "w") or die("Unable to open file!");

        foreach($updatedNodes as $node) {
          
            $node->type = "node--game";

            $api_url = '' . $drupalurl . '/jsonapi/node/game/' . $node->id;        
            $node_encode = json_encode($node, JSON_UNESCAPED_SLASHES);
            $node_data_wrap = '{"data":' . $node_encode . '}';


$curl = curl_init();

 // create cURL resources
 $ch_customer = curl_init();
 curl_setopt_array($ch_customer, array(
   CURLOPT_URL => $api_url,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'DELETE',
   CURLOPT_POSTFIELDS => $node_data_wrap,
   CURLOPT_HTTPHEADER => array(
 'Content-Type: application/vnd.api+json',
 'Accept: application/vnd.api+json',
 'Authorization: Bearer  ' . $_SESSION["tok"] . ''),
 //CURLOPT_POSTFIELDS => $node_data_wrap,
 ));
 
      
 $response = curl_exec($ch_customer);
 curl_close($ch_customer);


curl_close($curl);
//echo $response;


}

        
    echo "status: 200";

    // Set response content type
    //header('Content-Type: application/json');
    //echo json_encode($result);

    
    ?>