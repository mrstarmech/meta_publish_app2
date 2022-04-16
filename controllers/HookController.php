<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class HookController extends Controller
{
    public function actionTb() {
        $rq_params = Yii::$app->request->queryParams;
        if (isset($rq_params['tbl_click_id']) && isset($rq_params['tbl_event_name'])) {
            $url = "https://trc.taboola.com/actions-handler/log/3/s2s-action?click-id=" . $rq_params['tbl_click_id'] . "&name=" . $rq_params['tbl_event_name'];
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTPS);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $tbl_resp = curl_exec($ch);
            
            curl_close($ch);
            return var_dump(["Response" => $tbl_resp, "Url" => $url]);
        }
        return 'ne OK';
    }
}