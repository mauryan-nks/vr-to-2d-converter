<?php
$apiUrl = "https://api.sinhcoms.com/video/vr-2d/";
$videoUrl = isset($_GET['videoUrl']) ? $_GET['videoUrl'] : null;

if (!$videoUrl) {
    echo json_encode(['error' => 'Please provide a valid videoUrl.']);
    exit;
}
$fullUrl = $apiUrl . "?videoUrl=" . urlencode($videoUrl);
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true, 
    CURLOPT_URL => $fullUrl,        
    CURLOPT_HEADER => false,        
    CURLOPT_FOLLOWLOCATION => true
]);
$response = curl_exec($curl);
if ($response === false) {
    echo json_encode(['error' => curl_error($curl)]);
    exit;
}

curl_close($curl);
header('Content-Type: video/mp4');
echo $response;
