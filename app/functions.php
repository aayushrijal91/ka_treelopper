<?php
include __DIR__ . '/env.php';

$site = "K&A Tree Lopping Services";
$phone_number = "0432 406 340";
$admin_email = 'arijal@aiims.com.au'; // 'ridaalameddine127@gmail.com';
$bcc_email = "";
$no_reply_email = 'info@kandatreelopping.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
