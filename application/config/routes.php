<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['properties/create'] = 'properties/create';
$route['properties/update'] = 'properties/update';
$route['properties/(:any)'] = 'properties/view/$1';
$route['properties'] = 'properties/index';

$route['default_controller'] = 'pages/view';

$route['surveys/create'] = 'surveys/create';
$route['surveys/(:any)'] = 'surveys/view/$1';
$route['surveys'] = 'surveys/index';


$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
