<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to index page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

require_once "config.php";

//echo 'test';
//echo $drupalurl;

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
        echo $username;
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
        echo $password;
    }


  /////////////Login via Drupal - taken from https://github.com/aaronpk/quick-php-authentication/blob/main/index.php ///////////////



    $client_id = getenv('CLIENTID'); 
    $client_secret = getenv('CLIENTSECRET'); 
    $redirect_uri = '/clients/index.php';
    //$metadata_url = 'https://*.okta.com/oauth2/default/.well-known/openid-configuration';
    $drupal_token = '' . $drupalurl . '/oauth/token';
    $drupal_user_info = '' . $drupalurl . '/jsonapi/user/user?include=roles&filter[name][value]=' . $username . '';
    
    
    
    
    function http($url, $postparams) {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postparams,
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/x-www-form-urlencoded',
              'Accept: application/vnd.api+json'
            ),
          ));
        return json_decode(curl_exec($ch));
      }
  
  
  
      function http2($url, $accesstoken) {
          $ch = curl_init();
          curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
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
              'Authorization: Bearer '. $accesstoken .''
            ),
          ));
          
          return json_decode(curl_exec($ch));
        }
    
        function http3($url, $accesstoken) {
            $ch = curl_init();
            curl_setopt_array($ch, array(
              CURLOPT_URL => $url,
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
                'Authorization: Bearer '. $accesstoken .''
              ),
            ));
            
            return json_decode(curl_exec($ch));
          }
    
    
    if(empty($username_err) && empty($password_err)){
      $tokenparams =
      [
        'grant_type' => 'password',
        'username' => $username,
        'password' => $password,
        'client_id' => $client_id,
        'client_secret' => $client_secret
      ];
      
      $tokenparam_build = http_build_query($tokenparams);
      $response = http($drupal_token, $tokenparam_build);
      $tok = $response->access_token;
      ////( [error] => invalid_credentials [error_description] => The user credentials were incorrect. [message] => The user credentials were incorrect. )////
      print_r($response);
      if(!isset($response->access_token)) {
        die('Error fetching access token');
      }
    
      $userinfo = http2($drupal_user_info, $response->access_token);
  //print_r($userinfo->data[0]->attributes);
      if($userinfo->data[0]->attributes->name) {
        $_SESSION['display_name'] = $userinfo->data[0]->attributes->display_name;
        $_SESSION['username'] = $userinfo->data[0]->attributes->name;
        $_SESSION['email'] = $userinfo->data[0]->attributes->mail;
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $userinfo->data[0]->attributes->drupal_internal__uid;
        $_SESSION["tok"] = $tok;
        //$_SESSION['tok2'] = "what";

        $included = $userinfo->included;

        foreach ($included as $included_node){
            //print_r($included_node);
                //echo $included_node->type;
                
            if ($included_node->type == 'user_role--user_role') {
                
                if ($included_node->attributes->drupal_internal__id == 'administrator')

                $_SESSION['system_level'] = $included_node->attributes->drupal_internal__id;
               
             }
         }

    

        header('Location: ' . $drupalurl . '/clients/index.php');
        die();
        
      }
    
    }
}
?>
<?php include 'layouts/head-main.php'; ?>
<head>
    <title>Login</title>
    <?php include 'layouts/head.php'; ?>
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">

    <?php include 'layouts/head-style.php'; ?>
</head>

    <body class="auth-body-bg">
        
        <div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
    
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                        <div class="col-lg-7" style="padding-bottom:60px;">
                                                <div class="text-center">
                                                
                                                </div>
                                         </div>

                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5">
                                        <a href="index.php" class="d-block auth-logo">
                                            
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue to IDY.</p>
                                        </div>
                                        <?php //echo test; //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
                                        <div class="mt-4">
                                            <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $username; ?>">
        <span class="text-danger"><?php echo $username_err; ?></span>
    </div>

    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <label for="userpassword">Password</label>
        <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
        <span class="text-danger"><?php echo $password_err; ?></span>
    </div>

    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customControlInline">
        <label class="custom-control-label" for="customControlInline">Remember me</label>
    </div>

    <div class="mt-3">
        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" value="Login">Log In
        </button>
    </div>

    <div class="mt-4 text-center">
        <a href="auth-recoverpw.php" class="text-muted"><i class="mdi mdi-lock mr-1"></i>
            Forgot your password?</a>
    </div>
    </form>
                    
                                                
                                                <div class="mt-4 text-center">
                                                    <h5 class="font-size-14 mb-3">Sign in with</h5>
                    
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                                <i class="mdi mdi-google"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            
                                            <div class="mt-5 text-center">
                                                <p>Don't have an account ? <a href="auth-register-2.php" class="font-weight-medium text-primary"> Signup now </a> </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Crafted with <i class="mdi mdi-account-group text-danger"></i></p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        <?php include 'layouts/footer-scripts.php'; ?>

        <!-- owl.carousel js -->
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- auth-2-carousel init -->
        <script src="assets/js/pages/auth-2-carousel.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
