<?php
ini_set('display_errors', 1);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://www.noelshack.com/api.php');
curl_setopt($curl, CURLOPT_VERBOSE, 1);
//curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0');
//curl_setopt($curl, CURLOPT_ENCODING, '');
//curl_setopt($curl, CURLOPT_REFERER, 'http://www.noelshack.com/api.php');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

// download image to temp file for upload
$tmp = tempnam(sys_get_temp_dir(), 'php');
file_put_contents($tmp, file_get_contents('http://cdn.soccerwiki.org/images/player/2386.jpg'));

// send a file
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt(
    $curl,
    CURLOPT_POSTFIELDS,
    array(
      'fichier' => new CURLFile($tmp),
      'submit'  => 'Envoyer',
    ));

// output the response
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
var_dump($result, curl_error($curl));

unlink($tmp); // remove temp file

curl_close($curl);