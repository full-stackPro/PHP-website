<?php

function pipelineStatusInfo( $id ) {

	$pipeline_status_groups = getPipelineStatusGroups();

	foreach ( $pipeline_status_groups as $pipeline_status_group ) {
		foreach ( $pipeline_status_group["types"] as $type ) {
			if ( $type["id"] === $id )
				return $type;
		}
	}

	return FALSE;
}

function transactionTypeInfo( $id ) {

	$transaction_types = getTransactionTypes();

	foreach ( $transaction_types as $type ) {
		if ( $type["id"] === $id )
				return $type;
	}

	return FALSE;
}

function contactTypeInfo( $id ) {

	$contact_groups = getContactGroups();

	foreach ( $contact_groups as $contact_group ) {
		foreach ( $contact_group["types"] as $type ) {
			if ( $type["id"] === $id )
				return $type;
		}
	}

	return FALSE;
}

function leadSourceInfo( $id ) {

	$lead_sources = getLeadSourceTypes();

	foreach ( $lead_sources as $type ) {
		if ( $type["id"] === $id )
				return $type;
	}

	return FALSE;
}

function getContactGroups() {

	return [
		[
			"name" => "LEADS",
			"types" => [
				[ "id" => 0, "name" => "Expired listing" ],
				[ "id" => 1, "name" => "Cancelled listing" ],
				[ "id" => 2, "name" => "First time buyer" ],
				[ "id" => 3, "name" => "For sale by owner" ],
				[ "id" => 4, "name" => "Foreclosure" ],
			],
		],
/* PARTNERS */
		[
			"name" => "PARTNERS",
			"types" => [
				[ "id" => 5, "name" => "Divorce attorney" ],
				[ "id" => 6, "name" => "Bankruptcy attorney" ],
				[ "id" => 7, "name" => "Probate attorney" ],
				[ "id" => 8, "name" => "Loan officer" ],
				[ "id" => 9, "name" => "Title officer" ],
				[ "id" => 10, "name" => "Moving company" ],
				[ "id" => 11, "name" => "Realtor" ],
				[ "id" => 12, "name" => "Investor" ],
			],
		],
/* SERVICE PROVIDERS */
		[
			"name" => "SERVICE PROVIDERS",
			"types" => [
				[ "id" => 13, "name" => "Termite inspector" ],
				[ "id" => 14, "name" => "Home inspector" ],
				[ "id" => 15, "name" => "Appraiser" ],
				[ "id" => 16, "name" => "Home warranty" ],
				[ "id" => 17, "name" => "Insurance agent" ],
				[ "id" => 18, "name" => "Landscaper" ],
			],
		],
/* PERSONAL */
		[
			"name" => "PERSONAL",
			"types" => [
				[ "id" => 19, "name" => "Friend" ],
				[ "id" => 20, "name" => "Relative" ],
			],
		],
/* AUTOMATED */
		[
			"name" => "AUTOMATED",
			"types" => [
				[ "id" => 21, "name" => "Estimate requested" ],
				[ "id" => 22, "name" => "Offer requested" ],
			],
		],
	];

}

function getTransactionTypes() {

	return [
		 [ "id" => 0, "name" => "None" ],
		 [ "id" => 1, "name" => "Fastrack" ],
		 [ "id" => 2, "name" => "Buyer" ],
		 [ "id" => 3, "name" => "Seller" ],
		 [ "id" => 4, "name" => "Seller+Buyer" ],
	];
}

function getPipelineStatusGroups() {

	return [
		[
			"name" => "Future client",
			"types" => [
				[ "id" => 0, "name" => "Estimate requested" ],
				[ "id" => 1, "name" => "Manually entered" ],
			],
		],
		[
			"name" => "Active client",
			"types" => [
				[ "id" => 2, "name" => "Offer requested" ],
				[ "id" => 3, "name" => "Manually entered" ],
			],
		],
		[
			"name" => "Past client",
			"types" => [
				[ "id" => 4, "name" => "Buyer" ],
				[ "id" => 5, "name" => "Seller" ],
			],
		],
		[
			"name" => FALSE,
			"types" => [
				[ "id" => 6, "name" => "None" ],
			],
		],
	];
}

function getLeadSourceTypes() {

	return [
		 [ "id" => 0, "name" => "Other" ],
		 [ "id" => 1, "name" => "Website" ],
	];

}

function getDbCols(){
	$db_cols = array('name_first','name_last','spouse_first','spouse_last','company','lead_source','mobile_phone','home_phone','business_phone','email','street','city','state','zip','notes','beneficiary_name','orig_mtg_bal','orig_date','sale_date');
	return $db_cols;
}

function dropDown($db_cols,$col_val){
	echo "<select class='form-control' name=map[$col_val]>";
	foreach($db_cols as $c):
	echo "<option value='$c'>$c</option>";
	endforeach;
	echo "<option value=''>None</option>";
	echo "</select>";
}

function convertDate($originalDate){
	return $o_date = date("Y-m-d", strtotime($originalDate));
}

function convertDate2($originalDate){
	return $o_date = date("F j, Y h:i", strtotime($originalDate));
}
