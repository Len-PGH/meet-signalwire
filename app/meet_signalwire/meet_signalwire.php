<?php
/*
	FusionPBX
	Version: MPL 1.1

	The contents of this file are subject to the Mozilla Public License Version
	1.1 (the "License"); you may not use this file except in compliance with
	the License. You may obtain a copy of the License at
	http://www.mozilla.org/MPL/

	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.

	The Original Code is FusionPBX

	The Initial Developer of the Original Code is
	Mark J Crane <markjcrane@fusionpbx.com>
	Portions created by the Initial Developer are Copyright (C) 2018 - 2020
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Len Graham <len.graham@signalwire.com>
  	Mark J Crane <markjcrane@fusionpbx.com>
*/

//includes
	require_once "root.php";
	require_once "resources/require.php";
	require_once "resources/check_auth.php";


//check permissions
	if (permission_exists('meet_signalwire_view')) {
		//access granted
	}
	else {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get();

//set the variables

	$meet_signalwire_room = $_SESSION['meet_signalwire']['meet_signalwire_room']['text'];
  	$meet_signalwire_participant_token = $_SESSION['meet_signalwire']['meet_signalwire_participant_token']['text'];
	$meet_signalwire_moderator_token = $_SESSION['meet_signalwire_moderator_token']['meet_signalwire_moderator_token']['text'];

//show the content

$output = <<<OUTPUT
<html>
<head><title>Welcome!</title></head>
<body bgcolor="white">
<center><h1>Hello! Meet-Signalwire</h1></center>
<hr><center></center>
 <!-- SignalWire Video Room -->
 
 
 <script>!function(e,t){function i(){let t=Object.assign({rootElement:r},e.swvr.p)
;SignalWire.AppKit.VideoConference(t)}e.swvr=e.swvr||function(t={}){
Object.assign(e.swvr.p=e.swvr.p||{},t)}
;let r=t.currentScript,n=t.createElement("script")
;n.type="module",n.src="https://cdn.signalwire.com/@signalwire/app-kit@next/dist/signalwire/signalwire.esm.js",
n.defer=!0,n.onload=i,r.parentNode.insertBefore(n,r)
;let s=t.createElement("script")
;s.type="text/javascript",s.noModule=!0,s.src="https://cdn.signalwire.com/@signalwire/app-kit@next/dist/signalwire/signalwire.js",
s.defer=!0,s.onload=i,r.parentNode.insertBefore(s,r)
;let o=t.createElement("link")
;o.type="text/css",o.rel="stylesheet",o.href="https://cdn.signalwire.com/@signalwire/app-kit@next/dist/signalwire/signalwire.css",
r.parentNode.insertBefore(o,r),e.SignalWire=e.SignalWire||{Prebuilt:{
VideoRoom:e.swvr},AppKit:{VideoConference:e.swvr}}}(window,document);
SignalWire.AppKit.VideoConference({
  token: '$meet_signalwire_participant_token',
  // userName: 'your-name',
});</script>
 
 
  <!-- End SignalWire Video Room -->
</body>
</html>

OUTPUT;
echo $output;

//include the footer

require_once "resources/footer.php";
?>
