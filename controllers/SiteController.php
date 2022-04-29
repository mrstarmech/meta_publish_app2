<?php

namespace app\controllers;

use yii\web\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Yii;
use app\common\GetClick;

class SiteController extends Controller
{
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
        include '../../storage/clo_list.php';
        $params = Yii::$app->requestedParams;
        if(isset($params["id"])) {            
            if (isset($strm_cloaks[$params['id']])) {
                $click = new GetClick($strm_cloaks[$params['id']], $ApiKey);
                if($click instanceof GetClick && array_key_exists('path', $click->DataClick) && $click->DataClick['path']['name'] !== 'White') {
                    $plurl = '';
                    if($click->getLandingUrl() == 'Direct') {
                        $plurl = parse_url($click->getOfferUrl());
                    } else {
                        $plurl = parse_url($click->getLandingUrl());
                    }
                    $path = "/../../storage".$plurl["path"];
                    $query = $plurl["query"].$click->DataClick["campaign"]["campaign_land_tokens"];
                    if($query) {
                        parse_str($query, $query_params);
                    }
                    $this->layout = false;
                    return $this->render('indexpl',['root_fld'=>$path, 'path_to_pl'=>Yii::getAlias('@webroot').$path."index.php", 'query_params'=>$query_params, 'debug'=>$click->DataClick]);
                }
            }
        }
        $pixel=isset($params["id"]);
        if(isset($params["id"]) && $params["id"] == 63) {
            $pixel = `<script>
            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
                    vars[key] = value;
                });
                return vars;
            }
            var purlvars = getUrlVars();
            var obpximg = document.createElement('img');
            obpximg.style.display = "none!important";
            obpximg.style.width = 0;
            obpximg.style.height = 0;
            obpximg.src = 'https://howaboutagoodday.com/hook/ob?ob_click_id=' + purlvars['click_id'] + '&ob_event_name=PAGE_VIEW';
            document.body.appendChild(obpximg);
        </script>`;
        }
        return $this->render('index',['pixel'=>$pixel]);
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
