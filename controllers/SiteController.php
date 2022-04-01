<?php

namespace app\controllers;

use yii\web\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Yii;
use app\common\GetClick;

class SiteController extends Controller
{
    static $ApiKey       = '210000010ca4a2321865f666be13c6205ef577ce';
    static $strm_cloaks = [
        '65' => 'https://tblkngs.com/click.php?key=wvr8b8vjlcu7pzmerbe5',
        '58' => 'https://tblkngs.com/click.php?key=qwej9kgi1jijca7l3otp',
        '57' => 'https://tblkngs.com/click.php?key=wvr8b8vjlcu7pzmerbe5'
    ];
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($id = 0)
    {
        $params = Yii::$app->requestedParams;
        if(isset($params["id"])) {            
            if (isset(SiteController::$strm_cloaks[$params['id']])) {
                $click = new GetClick(SiteController::$strm_cloaks[$params['id']], SiteController::$ApiKey);
                if($click instanceof GetClick && array_key_exists('path', $click->DataClick) && $click->DataClick['path']['name'] !== 'White') {
                    $plurl = '';
                    if($click->getLandingUrl() == 'Direct') {
                        $plurl = parse_url($click->getOfferUrl());
                    } else {
                        $plurl = parse_url($click->getLandingUrl());
                    }
                    $path = "/../../storage".$plurl["path"];
                    $query = $plurl["query"];
                    if($query) {
                        parse_str($query, $query_params);
                    }
                    $this->layout = false;
                    return $this->render('indexpl',['root_fld'=>$path, 'path_to_pl'=>Yii::getAlias('@webroot').$path."index.php", 'query_params'=>$query_params]);
                }
            }
        }
        return $this->render('index');
    }

    public function actionSend() {
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
            $mail->addAddress('rv@metacpa.ru');
            $mail->AltBody = 'test omroemroemrom';
            $mail->Send();
        }
    }

    public function actionError()
    {
        return $this->render('error', ['message' => 'Requested page not found on server', 'name' => '404 Not Found']);
    }

    public function actionOk()
    {
        return 'ok';
    }
}
