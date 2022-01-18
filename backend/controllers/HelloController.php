<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;


class HelloController extends Controller


{
	public function actionIndex()
	{
			return $this->render(view:'index')
	}
}

