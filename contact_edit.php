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

$user_id = 3;
$date = date('Y-m-d h:i:s');
if (isset($_POST['add_note'])){
	$note = $_POST['note'];
	$data['contact_id'] = $_GET['id'];
	$data['note'] = $note;
	$data['date'] = $date;
	$db->addNote($data);
}
if (isset($_POST['btn_followup'])){
	extract($_POST);
	$data['contact_id'] = $contact_id;
	$data['followup_type'] = $followup_type;
	$data['followup_date'] = $followup_date;
	$db->addData($data,'followups');

}

$id = $_GET["id"];
$notes = $db->getNotes($id);
$contact = $db->getContact( $id );
$getcontactprevnext = $db->getcontactprevnext( $id );
$activity = $db->getcontactactivity($id);
$followups = $db->getcontactfollowup($id);

// echo "<pre>";
// print_r($activity);exit;


$is_empty = ( ! $contact ) ? 1 : 0;

// return a blank contact
if ( $is_empty ) {
	$contact = [ $db->getContactTemplate() ];
}



$data = [
	"page" => "contacts",
	"contact" => $contact,
	"activity" => $activity,
	"followups" => $followups,
	"next" => $getcontactprevnext['next']['idz'],
	"previous" => $getcontactprevnext['pref']['idz'],
	"contact_groups" => getContactGroups(),
	"transaction_types" => getTransactionTypes(),
	"pipeline_status_groups" => getPipelineStatusGroups(),
	"lead_source_types" => getLeadSourceTypes(),
	"is_empty" => $is_empty,
	"notes" => $notes
];

$page = "contact_edit";

$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );
