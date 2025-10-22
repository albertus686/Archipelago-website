<?php
header('Content-Type: application/json; charset=utf-8');
$dataFile = __DIR__ . '/data.json';
$input = $_POST;
if(!$input){
  $raw = file_get_contents('php://input');
  $input = json_decode($raw, true) ?? [];
}
$company = trim($input['company'] ?? '');
$email = trim($input['email'] ?? '');
$product = trim($input['product'] ?? '');
$quantity = trim($input['quantity'] ?? '');
if(!$company || !$email || !$product || !$quantity){ echo json_encode(['success'=>false,'error'=>'Missing fields']); exit; }
$store = ['company'=>$company,'email'=>$email,'product'=>$product,'quantity'=>$quantity,'date'=>date('c')];
if(!file_exists($dataFile)) file_put_contents($dataFile, json_encode(['complaints'=>[],'quotes'=>[]], JSON_PRETTY_PRINT));
$db = json_decode(file_get_contents($dataFile), true);
$db['quotes'][] = $store;
file_put_contents($dataFile, json_encode($db, JSON_PRETTY_PRINT));
echo json_encode(['success'=>true]);
?>