<?php
// Stefabne
ini_set('display_errors',0);
   include './hybridauth/config.php';
$CONF = $TMPL = array();
$CONF['host'] = 'mysql462.loopia.se';
$CONF['user'] = 'qrd@m18694';
$CONF['pass'] = 'm18694@qrd';
$CONF['name'] = 'mijatovicivan_com_db_4';
//$CONF['url'] = 'http://localhost/fbOriginal';
$whitelist = array(
    '127.0.0.1',
    '::1'
);
if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	// localhost
    $CONF['url'] = 'http://localhost/fbkiller';
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
				'choose-username'   => 'choose-username'
				);
?>
