<?php
session_start();
require 'vendor/autoload.php';
use cloudabis_sdk\ApiManager\CloudABISAPI;
use cloudabis_sdk\Models\CloudABISBiometricRequest;
use cloudabis_sdk\Models\EnumOperationName;
use cloudabis_sdk\Utilities\CloudABISConstant;
use cloudabis_sdk\Utilities\CloudABISResponseParser;

define('CloudABIS_API_URL', 'https://fpsvr101.cloudabis.com/v1/');
define('CloudABISAppKey', 'a08710184c984349bd69fa5e7797552a');
define('CloudABISSecretKey', '3KZFh2vyQDZCxLlIGuHm6J09NYU=');
define('CloudABISCustomerKey', '49EB104599A1481A9BE0F6491DB36F52');
define('ENGINE_NAME', 'FPFF02');
//Read token from CloudABIS Server
$cloudABISAPI = new CloudABISAPI(CloudABISAppKey, CloudABISSecretKey, CloudABIS_API_URL);
$token = $cloudABISAPI->GetToken();
if ( ! is_null($token) && isset($token->access_token) != "" )
    $_SESSION['access_token'] = $token->access_token;
else
    SetStatus("CloudABIS Not Authorized!. Please check credentails");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
    <script src="scripts/main_scan.js"></script>
    <script src="scripts/scan_helper.js"></script>
</head>

<body>

    <form class="commonForm" action="" method="POST">
        <h1 class="headline">Registration</h1>
        <div class="mt-10">
            <label>Capture Type:</label>
            <select name="captureType" id="captureType">
                <option value="SingleCapture">Single Capture</option>
                <option value="DoubleCapture">Double Capture</option>
            </select>
        </div>
        <div>
            <label for="registrationID">Registration ID</label>
            <input type="text" name="registrationID" id="registrationID" value="">
        </div>
        <div>
            <label id="lblCurrentDeviceName">Current Device Name:</label>
            <input type="button" name="biometricCapture" value="Biometric Capture" onclick="captureBiometric()">
            <input type="submit" name="register" value="Register">
        </div>
        <input type="button" value="Back" onClick="javascript:backToHome()">
        <input type="hidden" name="templateXML" id="templateXML" value="">
    </form>
    <label id="serverResult"></label>

    <?php
        if (isset($_POST['register'])) {
            if ($_POST['registrationID'] != "") {
                $regID = $_POST['registrationID'];
                $templateXML = $_POST['templateXML'];
                if (isset($_COOKIE['CSTempalteFormat'])) {
                    $templateFormat = $_COOKIE['CSTempalteFormat'];
                }

                try
                {
                    if ($regID != "" && $templateXML != "") {
                        $regID = trim($regID);
                        if (isset($_SESSION['access_token']) && $_SESSION['access_token'] != "") {
                            $biometricRequest = new CloudABISBiometricRequest();
                            $biometricRequest->RegistrationID = $regID;
                            $biometricRequest->BiometricXml = $templateXML;
                            $biometricRequest->CustomerKey = CloudABISCustomerKey;
                            $biometricRequest->EngineName = ENGINE_NAME;
                            $biometricRequest->Format = $templateFormat;
                            $biometricRequest->Token = $_SESSION['access_token'];

                            $cloudABISAPI = new CloudABISAPI(CloudABISAppKey, CloudABISSecretKey, CloudABIS_API_URL);
                            $matchingResponse = $cloudABISAPI->Register($biometricRequest);
                            if ($matchingResponse != null) {
                                $matchingResponseInJsonObject = json_decode($matchingResponse);
                                if ($matchingResponseInJsonObject->OperationName == EnumOperationName::Register &&
                                $matchingResponseInJsonObject->OperationResult == CloudABISConstant::SUCCESS) {
                                    SetStatus("Registration Success!");
                                } elseif ($matchingResponseInJsonObject->OperationName == EnumOperationName::IsRegistered &&
                                $matchingResponseInJsonObject->OperationResult == CloudABISConstant::YES) {
                                    SetStatus(CloudABISConstant::YES_MESSAGE);
                                } else {
                                    SetStatus(CloudABISResponseParser::GetResponseMessage($matchingResponseInJsonObject->OperationResult));
                                }
                            } else {
                                SetStatus("Something went wrong!");
                            }
                        } else {
                            SetStatus("Credential issue raised.");
                        }
                    } else {
                        SetStatus("Please give an ID");
                    }

                } catch (Exception $ex) {
                    SetStatus($ex->Message());
                }
            } else {
                SetStatus("Please put registration id");
            }
        }

        function SetStatus($message)
        {
            echo '<h3 class="sresponse"> Server response: '.$message.'</h3>';
        }
    ?>

</body>
</html>
