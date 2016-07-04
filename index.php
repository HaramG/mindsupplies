<?php
require_once '/usr/src/vendor/autoload.php';
require_once '/usr/src/vendor/google/apiclient/src/Google/autoload.php';

 $state = sha1(openssl_random_pseudo_bytes(1024));
  $app['session']->set('state', $state);
return $app['twig']->render('index.html', array(
      'CLIENT_ID' => 1041743059665-67890t3u6eln3qiisn3o120j91qpncck.apps.googleusercontent.com,
      'STATE' => $state,
      'APPLICATION_NAME' => mindsupplies
  ));
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1041743059665-67890t3u6eln3qiisn3o120j91qpncck.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <link rel="stylesheet" href="styling.css">
    <script src="js.js"></script>
    
    <div id="overlays" class="none">
        <div class="addtopage" id="number1"><button id="datbutton">+</button></div>
        
        <div id="modules_active">Active modules</div>
        <div id="modules_available">Available modules</div>
        <button id="modules_close">x</button>
        
        
        
    </div>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    
    
    
</head>
</html>