<?php

function sendmail($mail_expediteur, $nom_expediteur, $mail_replyto, $mail_destinataires, $bcc, $sujet, $message_text, $message_html, $fichiers)
{
    $frontiere = md5(uniqid(mt_rand()));

    $headers = 'From: "'. $nom_expediteur .'" <'.$mail_expediteur.'>' . "\n";
    $headers .= 'Return-Path: <'.$mail_replyto.'>' . "\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    if ($bcc!= '')
    {
        $headers .= 'Bcc' . $bcc . "\n";
    }
    $headers .= 'Content-Type: multipart/mixed; boundary="'.$frontiere.'"';

    /*if ($message_text!= '')
    {
        $message = '--' .$frontiere.'>' . "\n";
        $message .= 'Content-Type: text/plain; charset="utf-8"'. "\n";
        $message .= 'Content-Tranfert-Encoding: 8bit' . "\n\n";
        $message .= $message_text . "\n\n";
    }*/

    if ($message_html != '')
    {
        $message = '--' .$frontiere . "\n";
        $message .= 'Content-Type: text/html; charset="utf-8"'. "\n";
        $message .= 'Content-Tranfert-Encoding: 8bit' . "\n\n";
        $message .= $message_html . "\n\n";
    }

    /*if ($fichers != '')
    {
        $message = '--' .$frontiere.'>' . "\n";
        $message .= 'Content-Type: image/jpeg; name="image.jpg"'. "\n";
        $message .= 'Content-Tranfert-Encoding: base64' . "\n\n";
        $message .= 'Content-Disposition:attachement; filename="image.jpg"' . "\n\n";
        $message .= chunk_split(base64_encode(file_get_contents('image.jpg'))). "\n";
    }*/

    return mail($mail_destinataires,$sujet,$message,$headers);
}
