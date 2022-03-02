<?php

namespace app\controllers;

use yii\rest\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Yii;

class SendController extends Controller
{
    public function actionGo() {
        if (Yii::$app->request->isPost) {
            include '../src/Exception.php';
            include '../src/PHPMailer.php';
            include '../src/SMTP.php';

            $post = json_decode(file_get_contents('php://input'), true);
            $mail = isset($post['email']) ? $post['email'] : 'ERR: email empty!';
            $comment = isset($post['comment']) ? $post['comment'] : 'ERR: message empty!';
            $message = "$mail; $comment";
            $sender = isset($post['sec_src']) ? $post['sec_src'] : 'unknown';
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '25';
            $mail->isHTML(true);
            $mail->Username = 'metaphpmailer@gmail.com';
            $mail->Password = 'Ar5P2ly,X0';
            $mail->setFrom('metaphpmailer@gmail.com', "WhitePageNotify - $sender");
            $mail->Subject = "ModersSecrets";
            $mail->Body = $message;
            $mail->addAddress('mail@annihilan.com');
            $mail->AltBody = 'test omroemroemrom';
            $result = $mail->Send();
            if(!$result) {
                return $mail->ErrorInfo;
            }
        }
    }
}