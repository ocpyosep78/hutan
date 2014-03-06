<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session');
$autoload['helper'] = array( 'date', 'common', 'url', 'mcrypt' );
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array(
	'User_model', 'User_Type_model', 'module_model', 'module_type_model', 'odtwa_model'
);
