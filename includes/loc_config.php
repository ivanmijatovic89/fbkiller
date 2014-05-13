<?php
ini_set('display_errors',0);
   include './hybridauth/config.php';

$CONF = $TMPL = array();
$CONF['host'] = 'localhost';
$CONF['user'] = 'root';
$CONF['pass'] = '';
$CONF['name'] = 'facebookkiller';
//$CONF['url'] = 'http://localhost/fbOriginal';
$CONF['url'] = 'http://fb.killer';
$CONF['email'] = 'stefan.stex@yahoo.com';
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
