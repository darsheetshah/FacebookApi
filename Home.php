<html>
<head>
<title>Home</title>
</head>

<body>

Hello <?php 
session_start();
echo $_SESSION['username'];
?>
. Welcome to QRPitch.<br />
Login to your facebook account and invite your firends.

<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '238875146232195', // App ID
            channelUrl : '6bda98965e30766751dc5a5c7f1a94e9', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
        };
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
      </script>

      <div class="fb-login-button">Login with Facebook</div>

<?php  

    
$api_key = '238875146232195';  

$secret  = '6bda98965e30766751dc5a5c7f1a94e9';  

include_once './facebook-platform/php/facebook.php';  

$facebook = new Facebook($api_key, $secret);  

$user = $facebook->require_login();  
?>  




<?  

$friends = $facebook->api_client->friends_get();  

?>  

    

<ul>  

<?  
foreach($friends as $friend){  
echo "<li><fb:name uid=\"$friend\" useyou=\"false\"></li>";     
}  
?>  

</ul> 


</body>
</html>
