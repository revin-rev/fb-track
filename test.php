<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;

FacebookSession::setDefaultApplication('1783307898635198', 'c820ff0f49f2dabb18ad259bbe5a63ce');

// If you already have a valid access token:
$session = new FacebookSession('EAAAAUaZA8jlABAFfy5Wvbhy6ZBBOhsxegYuoyTllk7oqvsZBNBRPVMN2Y2huovZBr5PBjyESuwaEIPJfKvvZCclzRtnSqCfzEvZAI82qLLqWsXf5uUE9mJfj4c10nR9M264GJSYBLAGj9JlpEt0HuiRn9RZBW0U4fgZD');

// If you're making app-level requests:
//$session = FacebookSession::newAppSession();

use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\Fields\AdSetFields;

$adcampaign = new AdCampaign('23842651697850433');
$adsets = $adcampaign->getAdSets(array(
  AdSetFields::NAME,
  AdSetFields::CAMPAIGN_STATUS
));

// This will output the name of all fetched ad sets.
foreach ($adsets as $adset) {
  echo $adset->name;
}
