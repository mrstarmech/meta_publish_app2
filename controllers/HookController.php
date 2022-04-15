<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class HookController extends Controller
{
    public function actionTb() {
        $rq_params = Yii::$app->request->queryParams;
        if (isset($rq_params['tbl_click_id'])) {
            $ch = curl_init("https://trc.taboola.com/actions-handler/log/3/s2s-action?click-id=" . $rq_params['tbl_click_id'] . "&name=" . $rq_params['tbl_event_name']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $tbl_resp = curl_exec($ch);
            curl_close($ch);
            return var_dump($tbl_resp);
        }
        return 'ne OK';
    }
}