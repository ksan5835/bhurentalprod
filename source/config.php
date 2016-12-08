<?php 

/*define('DB_NAME', 'rentalbhunewdb');
define('DB_USER', 'rentalbhunewdb');
define('DB_PASSWORD', 'CalTech123#');
define('DB_HOST', 'rentalbhunewdb.db.8485850.hostedresource.com');*/

define('DB_NAME', 'rentalcomportdb');
define('DB_USER', 'rentalcomportdb');
define('DB_PASSWORD', 'Sankar@123#');
define('DB_HOST', 'rentalcomportdb.db.8485850.hostedresource.com');
define('BASE_PATH','http://crs.caltechsoft.com/');
define('PAGINATE_LIMIT', '5');
define('SERVER_ROOT' , 'D:\Hosting\8485850\html\rentalcrs');
define('SITE_ROOT' , 'http://crs.caltechsoft.com');
define('SITE_NAME' , 'chennairentalsystem.com');
define('TBL_PREFIX' , 'crs_');
define('INVOICE_CURRENCY' , 'Rs. ');


require_once('lib/db-conn.php');
//require_once("lib/dmlib.php");
db_conn(DB_USER,DB_PASSWORD,DB_NAME,DB_HOST);
@session_start();

?>