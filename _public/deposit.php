<?php
use Apps\Core;
use Apps\Template;
$Route->add('/seed/user/deposit', function () {
    $Template = new Template;
    $Core = new Core;
    $Data = $Core->data;
    $amount = $Data->amount;
    $user = $Core->GetUserInfo($Template->storage('accid'));
    $email = $user->email;
    $redirect_url = "https://localhost/seed/paymentconfirm";
    $responseData = $Core->Connectpaystack($amount, $redirect_url, $email);
    $status = $responseData["status"];
    $data = $responseData["data"];
    $reference = $data['reference'];
    $authorization_url = $data["authorization_url"];
    if ($status) {
        $sql = "INSERT INTO `deposit`(`reference`, `amount`, `email`) VALUES ('$reference','$amount','$email')";
        $sql = mysqli_query($Core->dbCon, $sql);
        if ($sql) {
            $Template->redirect($authorization_url);
            return;
        }
    } else {
        $Template->setError("payment failled", "warning", "/seed/form-deposit");
        $Template->redirect("/seed/form-deposit");
    }
    // $Core->debug([$status,$link,$data,$message]);
}, 'POST');

$Route->add('/seed/paymentconfirm', function(){
$Template = new Template(auth_url);
$Core = new Core;
$reference = $Core->post($_GET)->reference;
$responseData = $Core->Verify($reference);
// $Core->debug($responseData);
$status= $responseData['status'];
$message = $responseData['message'];
$data = $responseData['data'];
$trxstatus = $data['status'];
$sql = " `deposit` WHERE `reference`='$reference'";
$sql = "UPDATE `deposit` SET `reference` = '$reference' WHERE id = ?";
$sql = "SELECT * FROM `deposit` WHERE `reference` = '$reference'";
}, 'GET');

$Route->add('/seed/withdrawalconfirm', function(){
    $Core = new Core;
    $amount = 1000;
    $reference = md5(date("Y:m:s"));
   $responseData=  $Core->Withdraw($amount, $reference);
   $Core->debug($responseData);
},"GET");


