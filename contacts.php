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

$user_id = $_SESSION['user']['id'];
$contacts = $db->getContacts( $user_id );

// populate info for selects
foreach ( $contacts as $index => $contact ) {
	$contacts[ $index ]["pipeline_status"] = pipelineStatusInfo( $contact["pipeline_status"] );
	$contacts[ $index ]["transaction_type"] = transactionTypeInfo( $contact["transaction_type"] );
	$contacts[ $index ]["contact_type"] = contactTypeInfo( $contact["contact_type"] );
	$contacts[ $index ]["lead_source"] = leadSourceInfo( $contact["lead_source"] );
}

$data = [
	"page" => "contacts",
    "contacts" => $contacts,
];

$page = "contacts";

$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );