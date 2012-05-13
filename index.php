<?php
require_once 'libs/smarty/Smarty.class.php';
require_once 'classes/Database.php';
require_once 'libs/facebook/facebook.php';
$smarty = new Smarty();

error_reporting(0);

$d = $_GET['d']; $s = $_GET['s']; $g = $_GET['g'];

$appid = '301216299964286';
$secred = '97f9b7d366616c92e3e8724319b57bc4';


// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => $appid,
  'secret' => $secred,
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// This call will always work since we are fetching public data.
$naitik = $facebook->api('/naitik');

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
   <div id="fb-root"></div>
    <h1>php-sdk</h1>
	<fb:login-button>asdasd</fb:login-button>
    <?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Logout</a>
    <?php else: ?>
      <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
    <?php endif ?>

    <h3>PHP Session</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <?php if ($user): ?>
      <h3>You</h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

      <h3>Your User Object (/me)</h3>
      <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>

    <h3>Public profile of Naitik</h3>
    <img src="https://graph.facebook.com/naitik/picture">
    <?php echo $naitik['name']; ?>
  </body>
 
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php $appid ?>', // App ID
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

<<<<<<< HEAD
//Hallo Wuest
=======
  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/de_De/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
</html>

<?php 
>>>>>>> upstream/master
if( $d == '' ){
	

	$smarty->assign( "startseite",  "Startseite" );
	$content = $smarty->fetch( 'tpl/startseite.tpl' );
	
	
}elseif( $d == 'tipps' ){

	$smarty->assign( "tipps", "Tipps" );
	$content = $smarty->fetch( 'tpl/tipps.tpl' );
	$tipper = new TipperService();
	print_r ( $tipper->getAllUser() ) ;
	
	/*
	$cat = new CategoryService;

	$ent = new EntrieService;
	$ar = $ent->getEntByCat( $d );
	$smarty->assign( 'News',  $ar );
	$content .= $smarty->fetch( 'tpl/uebersicht.tpl' );
	
*/
	
	
}elseif( $d != '' AND $s != '' ){
	
	
}

	$smarty->assign( 'header', $header );	
	$smarty->assign( 'content', $content );
	$smarty->display( 'tpl/index.tpl' );	



?>
