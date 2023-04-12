<?php



 $name = $_POST['name'];
 $email = $_POST['email'];
$curl = curl_init();
curl_setopt_array($curl,[
    CURLOPT_RETURNTRANSFER => 1,
     CURLOPT_URL =>"https://www.google.com/recaptcha/api/siteverify",
     CURLOPT_POST => 1,
     CURLOPT_POSTFIELDS => [
         'secret' => '6LcQvV4lAAAAAEUvZx15GAtXUkGLNJaLh-uyTYFu',
         'response' => $_POST['g-recaptcha-response'],
     ],
     ]);

     $response = json_decode(curl_exec($curl)) ;

     if(!$response->success){
        echo 'login not possible';
         unset($_POST['submit']);

     }else{
        echo "successfully login";
        unset($_POST['submit']);
     }
     
    
?>