<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define('SHA_SECRET',							'OraNgerti');

define('MODULE',								'module');
define('MODULE_TYPE',							'module_type');
define('ODTWA',									'odtwa');
define('USER',									'user');
define('USER_TYPE',								'user_type');

define('PPH_TABLE_01',							'pph_table_01');
define('PKH_TABLE_01',							'pkh_table_01');
define('KKH_TABLE_01',							'kkh_table_01');
define('KKBHL_TABLE_01',						'kkbhl_table_01');
define('SEKRETARIAT_TABLE_01',					'sekretariat_table_01');
define('PJLKKHL_TABLE_01',						'pjlkkhl_table_01');