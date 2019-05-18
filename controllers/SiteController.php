<?php
/**
 * @author xialeistudio
 * @date 2019-05-18
 */

namespace app\controllers;


use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return \Yii::$app->db->createCommand('SELECT VERSION() as version')->queryOne();
    }

    public function actionA()
    {
        \Yii::$app->response->format = Response::FORMAT_HTML;
        return $this->render('a', []);
    }
}