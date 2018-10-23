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
require_once( "env.php" );

$db = new DB( DB_HOST, DB_DATABASE, DB_USER, DB_PASSWORD );
$dbAdmin = new DB( DB_ADMIN_HOST, DB_ADMIN_DATABASE, DB_ADMIN_USER, DB_ADMIN_PASSWORD );

$user_id = 1;
$property_id = $_GET["id"];

$workflow = $dbAdmin->getWorkflow( $user_id, $property_id );
$workflow_templates = FALSE;
$active_milestone = FALSE;
if ( ! $workflow ) {
	$workflow_templates = $dbAdmin->getWorkflowTemplates();
}
else {
	$milestones = $dbAdmin->getMilestones( $workflow["id"] );
	$stripped_milestones = [];


	foreach ( $milestones as $key => $milestone ) {
			

		if ( $milestone["status"] === 1 ) {
			$active_milestone = $milestone;
		}

		$stripped_milestones[] = [
			"name" => $milestone["name"],
			"status" => $milestone["status"],
		];
	}

	// if no active milestone, show the last one
	if ( empty( $active_milestone ) ) {
		// say this milestone is active so it highlights the breadcrumb
		$last_index = ( count( $milestones ) - 1 );
		$stripped_milestones[ $last_index ]["status"] = 1;
		$active_milestone = $milestones[ $last_index ];
		$active_milestone["status"] = 1;
	}

	$active_milestone["tasks"] = $dbAdmin->getTasks( $active_milestone["id"] );
	$workflow["milestones"] = $stripped_milestones;
}

$data = [
	"page" => "workflow",
	"listing" => $db->getPropertyDataById( $property_id ),
	"workflow" => $workflow,
	"workflow_templates" => $workflow_templates,
	"active_milestone" => $active_milestone,
];

$page = "listing_workflow";

$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );