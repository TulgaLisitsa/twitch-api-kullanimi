<?php


require 'twitch.php'; // Twitch.php projemize reqire ediyoruz

$provider = new TwitchProvider([
    'clientId'                => 'tm2zyvvqdjdqj1mjl54aqcv7bhys4p',     // Uygulamanızın İstemci kimliği
    'clientSecret'            => 'pmlc1ci0xqebq3iva50wgjbw3e1o7o', // Uygulamanızın İstemci Parolası
    'redirectUri'             => 'http://localhost/twitch/callback.php',  // Yeniden Yönlendirme URL , Uygulama oluştururken belirtmiştik
    'scopes'                  => ['channel_subscriptions']  // Giriş Yapan Kullanıcıların nelereine ulaşabileceğiniz
]);

// If we don't have an authorization code then get one
if (!isset($_GET['code'])) {

    // Fetch the authorization URL from the provider, and store state in session
    $authorizationUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();

    // Display link to start auth flow
    echo "<html><a href=\"$authorizationUrl\">Twitch İle Giriş Yap</a><html>";
    exit;

// Check given state against previously stored one to mitigate CSRF attack
} else {

   

    echo "Giriş Başarılı";




}
