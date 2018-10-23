<?php

ini_set( "display_errors", 1 );
ini_set( "display_startup_errors", 1 );
error_reporting( E_ALL );

use Jenssegers\Blade\Blade;

require_once( "vendor/autoload.php" );
require_once( "lib/db.php" );
require_once( "lib/dataUtils.php" );
require_once( "env.php" );

$db = new DB( DB_ADMIN_HOST, DB_ADMIN_DATABASE, DB_ADMIN_USER, DB_ADMIN_PASSWORD );
$user_id = $_SESSION['user']['id'];
if (isset($_POST['upload'])){
	$filename=$_FILES["file"]["tmp_name"];	

	$file = fopen($filename, "r");
	$i = 0;
	$columns = array();
	if($_FILES["file"]["size"] > 0):
		$target_dir = "csv/";
		$file_name = 'csv_'.uniqid().'.csv';
		$target_file = $target_dir . $file_name;
		move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
		chmod($target_file, 0777);
	while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
		if ($i == 0){
			$columns = $getData;
			$i++;
			continue;
		}else{			
			break;
			//$db->importContacts($data);

			$i++;	
		}	           
    }
    fclose($file);	
	endif;
	unset($data);
	$success = 1;
}else{
	$success = 0;
	?>
	<script type="text/javascript">
		window.location="contacts_upload.php";
	</script>
	<?php
}


$db_cols = getDbCols();
$data = [
	"page" => "contacts_import",
    "success" => $success,
    "db_cols" => $db_cols,
    "file_name" => $file_name,
    "columns" => $columns
];

$page = "contacts_import";

$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );