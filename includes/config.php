<?php
ini_set('display_errors',0);
   include './hybridauth/config.php';

$CONF = $TMPL = array();
$CONF['host'] = 'localhost';
$CONF['user'] = 'root';
$CONF['pass'] = '';
$CONF['name'] = 'facebookkiller';
//$CONF['url'] = 'http://localhost/fbOriginal';

$whitelist = array(
    '127.0.0.1',
    '::1'
);
if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	// localhost
    $CONF['url'] = 'http://fb.kill';
}else{
	$CONF['url'] = 'http://qrd.mijatovicivan.com';
}

$CONF['email'] = 'ivanmijatovic89@gmail.com';



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
				'choose-username'   => 'choose-username',
				'album_photo'   => 'album_photo'
				);

// mijat je faca
?>
