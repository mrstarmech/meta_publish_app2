<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class PlController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionView($id='')
    {
        $this->layout = false;
        if($id !== '') {
            $path = Yii::getAlias('@webroot')."/../views/pl/$id.php";
            if(file_exists($path)){
                return $this->render($id,['root_fld'=>"/res/$id/"]);
            }
            return "file not found on $path";
        }
        return $this->redirect('site/index');
    }

    public function actionOk() {
        return 'ok';
    }
}
