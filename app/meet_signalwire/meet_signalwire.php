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
  <script>
    !function(e,n,r){e[r]=e[r]||function(n={}){Object.assign(e[r].p=e[r].p||{},n)}
    ;let t=n.currentScript;var o=n.createElement("script")
    ;o.type="module",o.src="https://cdn.signalwire.com/video/rooms/index.js",
    o.onload=function(){var o=n.createElement("ready-room")
    ;o.params=e[r].p,t.parentNode.appendChild(o)},t.parentNode.insertBefore(o,t)
    }(window,document,"swvr");

    swvr({

	token: '$meet_signalwire_participant_token',
         userName: '$meet_signalwire_name'
    });
  </script>
  <!-- End SignalWire Video Room -->
</body>
</html>

OUTPUT;
echo $output;

//include the footer

require_once "resources/footer.php";
?>
