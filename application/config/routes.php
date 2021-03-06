<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//produk
$route['default_controller'] = "Client";
$route['produk'] = 'Client';
$route['(:num)'] = 'Client';
$route['beli'] = 'Client/beliProduk';
$route['transfer'] = 'Client/transfer';
//admin
$route['admin'] = "Admin";
$route['admin/(:num)'] = "Admin";
$route['admin/login'] = "Admin/login";
$route['admin/pesanan'] = "Admin/pesanan";
$route['admin/proses-pesanan'] = "Admin/prosesPesanan";
$route['admin/lihat-pesanan/(:any)'] = "Admin/lihatPesanan/$1";
$route['admin/do-login'] = "Admin/doLogin";
$route['admin/do-logout'] = "Admin/doLogout";
$route['admin/tambah-produk'] = "Admin/tambahProduk";
$route['admin/save-produk'] = "Admin/insertProduk";
$route['admin/edit-produk/(:any)'] = "Admin/editProduk/$1";
$route['admin/update-produk'] = "Admin/updateProduk";
$route['admin/hapus-produk/(:any)'] = "Admin/hapusProduk/$1";
$route['admin/getKategori'] = "Admin/getKategori";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
