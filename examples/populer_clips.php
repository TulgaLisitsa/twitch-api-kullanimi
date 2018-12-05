<?php 


////////////////////////////////////////
//                                    //
//        Popüler Klipler             //
//                                    //
////////////////////////////////////////



$th = curl_init();

curl_setopt(
    $th, 
    CURLOPT_HTTPHEADER,
    array(
        'Accept: application/vnd.twitchtv.v5+json',  // BURASI SABİ
        'Client-ID: 56aqt7azf80fdrv2iispvyyj9dgw2l'  // İSTEMCİ KİMLİĞİNİZİ GİRİNİZ
    )
);


$kadi = 'XANTAREScN'; // KLİP CEKMEK İSTEDİĞİNİZ HESABIN KULLANICI ADI

curl_setopt($th, CURLOPT_URL, 'https://api.twitch.tv/kraken/clips/top?limit=10&channel='.$kadi);


curl_setopt($th, CURLOPT_RETURNTRANSFER, 1);

$t = curl_exec($th);
curl_close($th);

$stast = json_decode($t,true); // DEKODE ETTİK

print_r($stast); // DÖKÜMANLARI EKRANA BASTIK



 ?>