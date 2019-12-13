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
$route['auth'] = 'auth/process';
$route['dokumen/type/(:num)'] = 'Dokumen/index/$1';
$route['dokumen/tambah/type/(:num)'] = 'Dokumen/tambah/$1';
$route['dokumen/update/type/(:num)'] = 'Dokumen/update/$1';
$route['dokumen/unduh/(:num)'] = 'Dokumen/download/$1';
$route['dokumen/delete/(:num)'] = 'Dokumen/hapus/$1';
$route['jenis-dokumen/update/(:num)'] = 'JenisDokumen/update/$1';
$route['jenis-dokumen/delete/(:num)'] = 'JenisDokumen/hapus/$1';
$route['jenis-dokumen/(:any)'] = 'JenisDokumen/$1';
$route['jenis-dokumen'] = 'JenisDokumen';
$route['beranda'] = 'Home/index';
$route['account'] = 'User/index';
$route['account/tambah'] = 'User/tambah';
$route['account/update/(:num)'] = 'User/update/$1';
$route['account/delete/(:num)'] = 'User/hapus/$1';
$route['pengaturan-akun'] = 'Account';
$route['pengaturan-akun/ganti-foto'] = 'Account/photo';
$route['pengaturan-akun/ganti-password'] = 'Account/password';
$route['kegiatan'] = 'DaftarKegiatan';
$route['kegiatan/tambah'] = 'DaftarKegiatan/tambah';
$route['kegiatan/update/(:num)'] = 'DaftarKegiatan/update/$1';
$route['kegiatan/delete/(:num)'] = 'DaftarKegiatan/hapus/$1';
$route['kegiatan/detail/(:num)'] = 'FotoKegiatan/index/$1';
$route['kegiatan/detail/tambah/(:num)'] = 'FotoKegiatan/tambah/$1';
$route['kegiatan/detail/update/(:num)'] = 'FotoKegiatan/update/$1';
$route['kegiatan/detail/delete/(:num)'] = 'FotoKegiatan/hapus/$1';
$route['personal-document/all'] = 'DokumenPribadi/index';
$route['personal-document/all/(:num)'] = 'DokumenPribadi/pribadi/$1';
$route['personal-document/my'] = 'DokumenPribadi/pribadi';
$route['personal-document/my/download/(:num)'] = 'DokumenPribadi/download/$1';
$route['personal-document/my/tambah'] = 'DokumenPribadi/tambah';
$route['personal-document/my/update/(:num)'] = 'DokumenPribadi/update/$1';
$route['personal-document/my/delete/(:num)'] = 'DokumenPribadi/hapus/$1';
$route['personal-document/my/share/inbox'] = 'DokumenPribadi/inbox';
$route['personal-document/my/share/inbox/(:num)'] = 'DokumenPribadi/inbox_detail/$1';
$route['personal-document/my/share/(:num)'] = 'DokumenPribadi/bagikan/$1';
$route['log/login'] = 'History/login';
$route['log/accounting'] = 'History/access';
$route['database-backup'] = 'History/db_backup';
$route['checkout/byebye'] = 'Auth/logout';
$route['welcome'] = 'Home/index';
$route['default_controller'] = 'Home/index';
$route['404_override'] = 'NotFound/index';
$route['translate_uri_dashes'] = FALSE;
