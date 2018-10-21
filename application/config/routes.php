<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// API Services

$route['api-facebook-login']['POST'] = 'Services/loginfb';

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
