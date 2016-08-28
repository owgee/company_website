<?php


define('USERNAME', 'inetstz');
define('PASSWORD', 'Swilla2014');

// Fill your data:
define('SENDER_ADDRESS', 'karibuSMS');
define('DESTINATION_ADDRESS', '255714825469');
define('MO_NUMBER', '');
define('NOTIFY_URL', '');
define('MO_NOTIFY_URL', '');
define('SOCIAL_INVITES_MESSAGE_KEY', '');
define('SOCIAL_INVITES_APP_SECRET', '');
define('MESSAGE_TEXT', '');
define('LANGUAGE_CODE', '');
define('USE_LOCKING_SHIFT', true);
define('USE_SINGLE_SHIFT', false);

require_once '../infobip/oneapi/client.php';

# example:initialize-sms-client
$smsClient = new SmsClient(USERNAME, PASSWORD);
# ----------------------------------------------------------------------------------------------------

# example:login-sms-client
$smsClient->login();
# ----------------------------------------------------------------------------------------------------

# example:prepare-message-without-notify-url
$smsMessage = new SMSRequest();
$smsMessage->senderAddress = SENDER_ADDRESS;
$smsMessage->address = DESTINATION_ADDRESS;
$smsMessage->message = 'Hello world';
# ----------------------------------------------------------------------------------------------------

# example:send-message
$smsMessageSendResult = $smsClient->sendSMS($smsMessage);
# ----------------------------------------------------------------------------------------------------
//
# example:send-message-client-correlator
// The client correlator is a unique identifier of this api call:
$clientCorrelator = $smsMessageSendResult->clientCorrelator;
# ----------------------------------------------------------------------------------------------------

$deliveryStatus = null;

for($i = 0; $i < 4; $i++) {
    # example:query-for-delivery-status
    // You can use $clientCorrelator or $smsMessageSendResult as an method call argument here:
    $smsMessageStatus = $smsClient->queryDeliveryStatus($smsMessageSendResult);
    $deliveryStatus = $smsMessageStatus->deliveryInfo[0]->deliveryStatus;

    echo 'Success:', $smsMessageStatus->isSuccess(), "\n";
    echo 'Status:', $deliveryStatus, "\n";
    if( ! $smsMessageStatus->isSuccess()) {
        echo 'Message id:', $smsMessageStatus->exception->messageId, "\n";
        echo 'Text:', $smsMessageStatus->exception->text, "\n";
        echo 'Variables:', $smsMessageStatus->exception->variables, "\n";
    }
    # ----------------------------------------------------------------------------------------------------
    sleep(3);
}

Logs::printLogs();
