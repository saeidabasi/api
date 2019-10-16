<?php

if (isset($_POST['id']) && $_POST['id'] !=""){


   $id=$_POST['id'];
   $url="http://127.0.0.1:8080/restapi/api/".$id;

   $client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

$response=curl_exec($client);
$result=json_decode($response);


echo "id=>".$result->id."<br>";
echo "title_color=>".$result->title_color."<br>";
echo "apple=>".$result->apple."<br>";
echo "dec=>".$result->dec."<br>";

}


?>