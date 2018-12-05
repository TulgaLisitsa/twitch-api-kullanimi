<?php 


////////////////////////////////////////
//                                    //
//      Popüler Oyunlar               //
//                                    //
////////////////////////////////////////


$th = curl_init();

curl_setopt(
    $th, 
    CURLOPT_HTTPHEADER,
    array(
        'Accept: application/vnd.twitchtv.v5+json',  // BURASI SABİ
        'Client-ID: tm2zyvvqdjdqj1mjl54aqcv7bhys4p'  // İSTEMCİ KİMLİĞİNİZİ GİRİNİZ
    )
);

curl_setopt($th, CURLOPT_URL, 'https://api.twitch.tv/kraken/games/top');

curl_setopt($th, CURLOPT_RETURNTRANSFER, 1);

$t = curl_exec($th);
curl_close($th);

$stast = json_decode($t,true); // DEKODE ETTİK

print_r($stast); // DÖKÜMANLARI EKRANA BASTIK



 ?>