<?php

namespace backend\controllers;

class BudController extends Controller

{
	public function actionIndex()
	{
		return $this->render(view: 'index')
	}
}
	