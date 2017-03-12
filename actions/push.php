<?php
// API access key from Google API's Console
define( 'API_ACCESS_KEY', 'AAAAJRsKmTA:APA91bGAb3dHTdyfW78pFEN0ZBuYI3gsAyL9sGWj9HoQ0YXyNWEpudk1pYzePQdSe76G-EA9WvrdsFLx-IJ7F0Rs5Cez5ehPkfHdCPuEzFMV0M6zkGtpmmCQETqhSQhK2R1Eqn7jpBVi' );
$registrationIds = array( 'd_c2GCKHGkg:APA91bGom0L_dqJ-fHF_9zQqtbd7VPyfGuL7hodGHqfZf2ZA_dQJH-X_1E_L-lCPgrngl3jELPNCTcW5Eg2YQpLDj_-mno2nl7LaemaWlluvOomCtFdZyF5Pk1Mdhsianhqq3BC8D9LT' );
// prep the bundle
$msg = array(
	'message' 	=> 'here is a message. message',
	'title'		=> 'This is a title. title',
	'subtitle'	=> 'This is a subtitle. subtitle',
	'tickerText'	=> 'Ticker text here...Ticker text here...Ticker text here',
	'vibrate'	=> 1,
	'sound'		=> 1,
	'largeIcon'	=> 'large_icon',
	'smallIcon'	=> 'small_icon'
);
$fields = array(
	'registration_ids' 	=> $registrationIds,
	'data'			=> $msg
);
 
$headers = array(
	'Authorization: key=' . API_ACCESS_KEY,
	'Content-Type: application/json'
);
 
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result;