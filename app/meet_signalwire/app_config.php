<?php
	//application details
		$apps[$x]['name'] = 'Meet Signalwire';
		$apps[$x]['uuid'] = '069abd24-8fb5-400c-a073-78bf53928d32';
		$apps[$x]['category'] = '';
		$apps[$x]['subcategory'] = '';
		$apps[$x]['version'] = '1.0';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www/signalwire.com';
		$apps[$x]['description']['en-us'] = 'A quick and easy way for video meetings. Let the cloud offload your cpu usage.';

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'meet_signalwire_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;

	//schema details
	//	$y = 0; //table array index
	//	$z = 0; //field array index
	//	$apps[$x]['db'][$y]['table'] = 'v_meet_signalwire';
	//	$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
	//	$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
	//	$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
	//	$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
	//	$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
	//	$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
	//	$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
	//	$z++;
		

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "54f7404e-fda0-490f-8f1c-c7bead6635dd";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "meet_signalwire";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "meet_signalwire_room";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "hello";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enter the room name.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "217d4f31-fcb0-4941-a208-246414cc9bf2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "meet_signalwire";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "meet_signalwire_participant_token";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "vrg_ed9e29a551234564321d0750dd32012";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enter the participant token generated from https://signalwire.com";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4a247922-8abe-4806-bafe-c441afe61f64";
    		$apps[$x]['default_settings'][$y]['default_setting_category'] = "meet_signalwire";
    		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "meet_signalwire_moderator_token";
    		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
    		$apps[$x]['default_settings'][$y]['default_setting_value'] = "vrg_ed9e29a551234564321d0750dd30000";
    		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
    		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enter the moderator token generated from https://signalwire.com";
    		$y++;

?>
