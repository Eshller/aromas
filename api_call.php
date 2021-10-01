<?php

$url = "localhost:3000/get_items";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);
// echo $result;
$result = json_decode($result,true);
// echo '<pre>';
// print_r($result);
// echo "HOLA AMIGOS";
// print_r($result['items']);
// foreach($result['items'] as $list){
//     echo $list[0]." ";
//     // foreach($list as $name)
//     // echo "<tr><td>".$name."</td>";
// }
foreach($result['items'] as $list){
    $sum = $sum + $list[2];
    echo trim($list[2])." ";
    
}
// echo $sum;

// foreach($result['items'] as $list){
//     echo $list[3]." ";
// }
// $list_1 = $result['items'];
// $list = $list_1[0];
// echo $list[0];
?>