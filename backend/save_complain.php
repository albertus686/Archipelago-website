<?php
header('Content-Type: application/json; charset=utf-8');
$dataFile = __DIR__ . '/data.json';
$input = $_POST;
if(!$input){
  $raw = file_get_contents('php://input');
  $input = json_decode($raw, true) ?? [];
}
$name = trim($input['name'] ?? '');
$email = trim($input['email'] ?? '');
$message = trim($input['message'] ?? '');
if(!$name || !$email || !$message){ echo json_encode(['success'=>false,'error'=>'Missing fields']); exit; }
$store = ['name'=>$name,'email'=>$email,'message'=>$message,'date'=>date('c')];
if(!file_exists($dataFile)) file_put_contents($dataFile, json_encode(['complaints'=>[],'quotes'=>[]], JSON_PRETTY_PRINT));
$db = json_decode(file_get_contents($dataFile), true);
$db['complaints'][] = $store;
file_put_contents($dataFile, json_encode($db, JSON_PRETTY_PRINT));
echo json_encode(['success'=>true]);
?>