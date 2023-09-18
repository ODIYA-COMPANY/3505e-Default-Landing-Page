<?php
$product_id = "1239";
$clickID = isset($_COOKIE['click_id']) ? $_COOKIE['click_id'] : null;
$affID = isset($_COOKIE['aff_id']) ? $_COOKIE['aff_id'] : null;
$name = $_POST['name'];
$phone = $_POST['phone'];

setcookie("click_id", "", time() - 3600, "/");

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
  "product_id" => $product_id,
  "ip" => trim($_SERVER["REMOTE_ADDR"]),
  "name" => trim($_POST["name"]),
  "phone" =>  trim($_POST["phone"]),
  "click_id" => $clickID,
  "aff_id" => $affID,
];

$jsonData = json_encode($orderInfo);

$url = "https://api.kost1.space/createlead";
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
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
