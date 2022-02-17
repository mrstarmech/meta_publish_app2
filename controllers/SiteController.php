<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($id=0)
    {
        return $this->render('index');
    }

    public function actionError() {
        return $this->render('error',['message' => 'Requested page not found on server', 'name'=>'404 Not Found']);
    }

    public function actionOk() {
        return 'ok';
    }
}
