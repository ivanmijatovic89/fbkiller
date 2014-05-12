<?php

 //error_reporting(0);
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL);

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


   include './hybridauth/config.php';



// ovo je bilo kod stefana
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(-1);
//error_reporting(0);
//error_reporting(E_ALL ^ E_NOTICE);



$CONF = $TMPL = array();

// The MySQL credentials

$CONF['host'] = 'mysql462.loopia.se';
$CONF['user'] = 'qrd@m18694';
$CONF['pass'] = 'm18694@qrd';
$CONF['name'] = 'mijatovicivan_com_db_4';

// The Installation URL
$CONF['url'] = 'http://qrd.mijatovicivan.com';


// The Notifications e-mail
$CONF['email'] = 'ivanmijatovic89@gmail.com';

// $CONF['host'] = 'localhost';
// $CONF['user'] = 'root';
// $CONF['pass'] = '';
// $CONF['name'] = 'facebookkiller';

// // The Installation URL
// $CONF['url'] = 'http://fb.killer';

// // The Notifications e-mail
// $CONF['email'] = 'stefan.stex@yahoo.com';
 

// The themes directory
$CONF['theme_path'] = 'themes';

$action = array('admin'			=> 'admin',
				'feed'			=> 'feed',
				'settings'		=> 'settings',
				'messages'		=> 'messages',
				'post'			=> 'post',
				'recover'		=> 'recover',
				'timeline'		=> 'timeline',
				'profile'		=> 'profile',
				'notifications'	=> 'notifications',
				'search'		=> 'search',
				'page'			=> 'page',
				'login-social'   => 'login-social',
				'choose-username'   => 'choose-username'
				);

?>

