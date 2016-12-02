<?php
//Start SkullCandy customization section
//This section is the first customized section.  The next starts at line 65, the final at line 95.
$fb_verify_token = 'abc12345'; //put in your facebook verify_token here
$fb_user_access_token = 'EAATeansT7awBALJqOiA0L4M5BzO4cW8xawHak7f2FRd3ZB7jwWEklci9gsDVPiRCMOa83sZAWYXcaZCcppb2UoVF2CZBMiXAiLcpdgQKsL0yjOFfk1gaEeUBeKygZA1mXtjA9l2HWTbxwMNVOGzvJ'; //put in your facebook user access token here - you must generate this in the FB API Explorer - tip: exchange it to a long-lived (valid 60 days) token 
$wc_api_realm = 'skullcandy'; //no need to change this, it's already populated with your whatcounts API realm
$wc_api_password = 'etylinel4322'; //no need to change this unless you change your api password for whatcounts
$wc_list_id = '6'; //here you need to put in the list ID for the whatcounts list you want the subscribers added to.  In this case, "115" is the ID of the "SKDYUS - TestAPI" list.
//End SkullCandy customization section
    
//Begin code to be left alone -------->
//Require composer's autoloader for zayconwhatcounts
require 'vendor/autoload.php';

//include whatcounts php script
include 'whatcounts-master/src/whatcounts_required.php';

//FB Webhook validation
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === $fb_verify_token) {
    echo $challenge;
}


