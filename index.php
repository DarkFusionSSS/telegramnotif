<?php
$token = "8306419451:AAH_L9p00qaafvbjZVoWfobf74mVGpB_TJ8";
$chatid = "8311837558";

$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$msg = "🚨 NOTIF MASUK!\nIP: $ip\nUser-Agent: $ua";

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chatid&text=" . urlencode($msg);

$response = @file_get_contents($url);

if ($response === false) {
    echo "file_get_contents gagal (mungkin allow_url_fopen off)";
} else {
    echo "Pesan berhasil dikirim!";
}

header("Location: https://google.com");
exit;
?>
