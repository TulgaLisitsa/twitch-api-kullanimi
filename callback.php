<?php 
		session_start();
		require 'twitch.php'; // Twitch.php projemize reqire ediyoruz

		
		$provider = new TwitchProvider([
		    'clientId'                => 'tm2zyvvqdjdqj1mjl54aqcv7bhys4p',     // Uygulamanızın İstemci kimliği
		    'clientSecret'            => 'pmlc1ci0xqebq3iva50wgjbw3e1o7o', // Uygulamanızın İstemci Parolası
		    'redirectUri'             => 'http://localhost/twitch/callback.php',  // Yeniden Yönlendirme URL , Uygulama oluştururken belirtmiştik
		    'scopes'                  => ['channel_subscriptions']  // Giriş Yapan Kullanıcıların nelereine ulaşabileceğiniz
		]);

// If we don't have an authorization code then get one


        // Get an access token using authorization code grant.
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code' => $_GET["code"]
        ]);
       
        
        

        // Using the access token, get user profile
        $resourceOwner = $provider->getResourceOwner($accessToken);
        $user = $resourceOwner->toArray();
        $_SESSION["token"] = htmlspecialchars($accessToken->getToken()); // access tokeniniz
        $_SESSION["refresh"] = htmlspecialchars($accessToken->getRefreshToken()); // refresh Tokeniniz
        $_SESSION["kadi"] = htmlspecialchars($user["data"][0]['display_name']); // Kullanıcı adınız
        $_SESSION["bio"] = htmlspecialchars($user["data"][0]['description']); // açıklamanız
        $_SESSION["resim"] = htmlspecialchars($user["data"][0]['profile_image_url']); // presim
        
      	echo "Giriş Başarılı";
      	
      	header('Location: index.php');

 ?>