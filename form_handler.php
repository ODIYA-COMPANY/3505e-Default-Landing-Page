<?php
$name  = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$aff_id = isset($_POST["aff_id"]) ? $_POST["aff_id"] : $_COOKIE['aff_id'] ?? null;
$offer_id = isset($_POST["offer_id"]) ? $_POST["offer_id"] : $_COOKIE['offer_id'] ?? null;
$click_id = isset($_POST["click_id"]) ? $_POST["click_id"] : null;

function isVaildPhone($phone)
{
  $mobilePrefixes = ['39', '67', '68', '96', '97', '98', '50', '66', '95', '99', '63', '93', '73', '91', '92', '94'];
  if (preg_match('/(\d)\1{6}/', $phone)) {
    return false;
  }
  $phone = preg_replace('/\D/', '', $phone);
  $phone = preg_replace('/^\+380/', '', $phone);
  $phone = preg_replace('/^380/', '', $phone);
  $phone = preg_replace('/^80/', '', $phone);
  $phone = preg_replace('/^0/', '', $phone);
  return strlen($phone) == 9 && in_array(substr($phone, 0, 2), $mobilePrefixes);
};

function isValidInfo($phone)
{
  if (isVaildPhone($phone)) {
    return false;
  }
  return true;
};
function isSpam($phone)
{
  return isValidInfo($phone);
};

$orderInfo = [
  "offer_id"        => $offer_id,
  "name"            => $name,
  "phone"           => $phone,
  "aff_id"          => $aff_id ?? null,
  "click_id"        => $click_id ?? null,
  "server_info"     => $_SERVER
];

$jsonData = json_encode($orderInfo);

$url = "https://api.kost1.space/v1/lead/create";
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt(
  $curl,
  CURLOPT_HTTPHEADER,
  array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
  )
);

$response = curl_exec($curl);
curl_close($curl);

$isSpam = isSpam($phone);
if ($isSpam) {
  //Сторінка дякую для не валідних номерів
  header("Location: thnx.php?name={$name}&phone={$phone}");
} else {
  header("Location: thanks.php?name={$name}&phone={$phone}");
}
