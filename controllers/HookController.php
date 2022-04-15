<?php

namespace app\controllers;

use yii\rest\Controller;
use Yii;

class HookController extends Controller
{
    public function actionTb() {
        $rq_params = Yii::$app->requestedParams;
        if (isset($rq_params['tbl_click_id'])) {
            return "https://trc/?click-id=" . $rq_params['tbl_click_id'] . "&name=event_name";
        }
        return 'ne OK';
    }
}