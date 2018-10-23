<?php
session_start();
if (!isset($_SESSION['user'])){
	header("Location: login.php");
}
ini_set( "display_errors", 1 );
ini_set( "display_startup_errors", 1 );
error_reporting( E_ALL );

use Jenssegers\Blade\Blade;

require_once( "vendor/autoload.php" );
require_once( "lib/db.php" );
require_once( "lib/dataUtils.php" );
require_once( "env.php" );

$db = new DB( DB_ADMIN_HOST, DB_ADMIN_DATABASE, DB_ADMIN_USER, DB_ADMIN_PASSWORD );
$user_id = 1;
$now = date('Y-m-d h:i:s');
if (isset($_POST['upload'])){
	$filename = $_POST['file_name'];	
	$tag = $_POST['tag'];
	$map = $_POST['map'];
	foreach($map as $key => $val){
		if ($val == "")
			unset($map[$key]);
	}
	$count_map = count($map);
	


	$file = fopen('csv/'.$filename, "r");
	$i = 0; 
	  
	while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
		if ($i == 0){
			$i++;
			continue;
		}else{
			foreach($map as $key => $col_name):
				if ($col_name == "orig_date" || $col_name == "sale_date"){
					$date = convertDate($getData[$key]);
					$data[$col_name] = $date;	
				}else{
					$data[$col_name] = $getData[$key];	
				}
				
			endforeach;
			$data['date_uploaded'] = $now;
			$data['tag'] = $tag;
			$data['user_id'] = $user_id;
			$data['pipeline_status'] = 'none';
			$data['contact_type'] = $_POST['contact_type'];

			$db->importContacts($data);

			$i++;	
		}	           
    }
    fclose($file);	
	
	unset($data);
	$success = 1;
}else{
	$success = 0;
}

$contacts = $db->getContacts( $user_id );

// populate info for selects
foreach ( $contacts as $index => $contact ) {
	$contacts[ $index ]["pipeline_status"] = pipelineStatusInfo( $contact["pipeline_status"] );
	$contacts[ $index ]["transaction_type"] = transactionTypeInfo( $contact["transaction_type"] );
	$contacts[ $index ]["contact_type"] = contactTypeInfo( $contact["contact_type"] );
	$contacts[ $index ]["lead_source"] = leadSourceInfo( $contact["lead_source"] );
}
$db_cols = getDbCols();
$data = [
	"page" => "contacts_upload",
    "contacts" => $contacts,
    "success" => $success,
    "db_cols" => $db_cols
];

$page = "contacts_upload";

$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );