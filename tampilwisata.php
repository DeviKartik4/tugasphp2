<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

//alamat localhost untuk file getWisata.php, ambil hasil export JSON
$send = curl("http://localhost/rekayasaweb056/pertemuan2/getwisata.php");

//mengubah JSON menjadi array
$data = json_decode($send,TRUE);

foreach($data as $row){
    echo $row["id_wisata"]."<br/>";
    echo $row["kota"]."<br/>";
    echo $row["landmark"]."<br/>";
    echo $row["tarif"]."<br/><hr/>";
}
?>