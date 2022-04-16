<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class HookController extends Controller
{
    public function actionTbp() {
        $rq_params = Yii::$app->request->queryParams;
        if (isset($rq_params['tbl_click_id']) && isset($rq_params['tbl_event_name'])) {
            $url = "https://trc.taboola.com/actions-handler/log/3/s2s-action?click-id=" . $rq_params['tbl_click_id'] . "&name=" . $rq_params['tbl_event_name'];
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTPS);
            curl_setopt($ch, CURLOPT_POST, true);
            $tbl_resp = curl_exec($ch);
            
            curl_close($ch);
            return var_dump(["Response" => $tbl_resp, "Url" => $url]);
        }
        return 'ne OK';
    }

    public function actionTb() {
        $rq_params = Yii::$app->request->queryParams;
        if (isset($rq_params['tbl_click_id']) && isset($rq_params['tbl_event_name'])) {
            $content = json_encode([
                "actions" => [
                    [
                        "click-id" => $rq_params['tbl_click_id'],
                        "timestamp" => time(),
                        "name" => "make_purchase"
                    ]
                ]
            ]);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://trc.taboola.com/1388223/log/3/bulk-s2s-action');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json", "Content-length: " . strlen($content)));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $tbl_resp = curl_exec($ch);
            $error = curl_error($ch);
            $info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            return $info;
        }
        return 'ne OK';
    }
}