<?php
include 'layouts/session.php';
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
require_once "config.php";
    

//$type = $_GET['type'];
$model_type = $_GET['modeltype'];
//$model_type = 1;

//  DRUPAL API Url

$api_url = '' . $drupalurl . '/jsonapi/node/game';


//echo $api_url;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $api_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/vnd.api+json',
    'Accept: application/vnd.api+json',
    'Authorization: Bearer  ' . $_SESSION["tok"] . ''),
  //CURLOPT_POSTFIELDS => $node_data_wrap,
));

$response = curl_exec($curl);

curl_close($curl);
$responsedecode = json_decode($response);
//echo $responsedecode->jsonapi->version;
//$attrbibutenames = $responsedecode->data;

$included = $responsedecode->included;

       
    // Set response content type
    //print_r($revised_output); 
   
    header('Content-Type: application/vnd.api+json');
    unset($responsedecode->jsonapi);
    unset($responsedecode->attributes->revision_timestamp);
    unset($responsedecode->attributes->langcode);
    //unset($responsedecode->attributes->created);
    //unset($responsedecode->attributes->changed);
    unset($responsedecode->attributes->revision_translation_affected);
    unset($responsedecode->attributes->path);
    unset($responsedecode->links);
    $responseencode = json_encode($responsedecode);
    //echo $responseencode;

    $attrbibutenames = $responsedecode->data;
    $included = $responsedecode->included;

    $included_study_type = array();
    //$customers = array();
    //echo "test";
    foreach ($included as $included_node){
    //print_r($included_node);
        //echo $included_node->type;
        
    if ($included_node->type == 'taxonomy_term--project_type_name') {
        //$included_node->parentId = NULL;
       // unset($included_node->attributes);
       // unset($included_node->relationships); 
       $included_study_type[] = $included_node;
        //array_push($included_features3, $included_node);
     }
  }

  $revised_output = array();

    foreach($attrbibutenames as $node) {
      //echo "test";
      //$nodefeatureid = $node->relationships->field_attrib_feature_reference->data->id;
      
    $revised_output[] = $node;
    }
    
    $revised_encoded = json_encode($revised_output);
    $responseencode = json_encode($responsedecode); 
    $node_data_wrap = '{"data":' . $revised_encoded . '}';
    echo $node_data_wrap;
    
    
    ?>