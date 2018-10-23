<?php

if ( is_file( "env.php" ) )
	require_once( "env.php" );

function formatFeaturesString( $feature ) {
	return ucfirst( str_replace( "_", " ", $feature ) );
}


function getRelatedProperties( $street, $city, $state ) {

	$related_api_url = "http://data-api.smartzip-services.com:80/properties/comparables.json?";

	$related_properties = [
		"api_key" => PROPERTY_API_KEY,
		"street_address" => $street,
		"city" => $city,
		"state" => $state,
		"zip" => "",
		"months_back" => 12,
		"max_miles" => 5,
	];

	return sendApiRequest( $related_api_url, $related_properties );
}


function sendApiRequest( $base_url, $properties ) {

	foreach ( $properties as $key => $val ) {
		$base_url .= $key ."=". urlencode( $val ) ."&";
	}

	$base_url = trim( $base_url, "&" );

	$result_json = file_get_contents( $base_url );
	if ( ! $result_json ) {
		$unfound = TRUE;
		return FALSE;
	}
	else {
		try {
			$data = json_decode( $result_json );
		} catch ( Exception $error ) {
			echo "Error1: <br>";
			throw $error;
		}
		if ( $data->response_code !== "SUCCESS" ) {
			throw new Exception( "Error2:" . json_encode( $data ) );
		}
		else {
			return $data;
		}
	}
}

function sendGetRequestJson( $base_url, $properties ) {

	$base_url .= "?";

	foreach ( $properties as $key => $val ) {
		$base_url .= $key ."=". urlencode( $val ) ."&";
	}

	$base_url = trim( $base_url, "&" );

	$result_json = file_get_contents( $base_url );
	if ( ! $result_json ) {
		$unfound = TRUE;
		return FALSE;
	}
	else {
		try {
			$data = json_decode( $result_json );
		} catch ( Exception $error ) {
			echo "Error1: <br>";
			throw $error;
		}
		if ( ! $data ) {
			throw new Exception( "Error2:" . json_encode( $data ) );
		}
		else {
			return $data;
		}
	}
}

function sendPostRequestJson( $base_url, $properties, $returns_json = TRUE ) {

	$json_string = json_encode( $properties );

	$response = file_get_contents(
		$base_url,
		null,
		stream_context_create(
			[
				"http" => [
					"protocol_version" => 1.1,
					"method" => "POST",
					"header" => "Content-type: application/json\r\n".
								"Connection: close\r\n" .
								"Content-length: " . strlen( $json_string ) . "\r\n",
					"content" => $json_string,
				],
			]
		)
	);

	if ( ! $response )
		return FALSE;

	if ( $returns_json ) {
		try {
			$data = json_decode( $response );
		} catch ( Exception $error ) {
			return FALSE;
		}

		if ( ! $data ) {
			return FALSE;
		}
		else {
			return $data;
		}
	}
	else {
		return $response;
	}
}

function createStreetViewImageUrl( $url, $width, $height ) {
	return "https:" . preg_replace( "/size=\d+x\d+/", "size=" . $width . "x" . $height, $url ) . "&key=" . GOOGLE_STREETVIEW_API_KEY;
}


function randomString( $length = 10 ) {

	$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$charactersLength = strlen( $characters );
	$randomString = "";

	for ( $i = 0; $i < $length; $i++ )
		$randomString .= $characters[ rand( 0, $charactersLength - 1 ) ];

	return $randomString;
}