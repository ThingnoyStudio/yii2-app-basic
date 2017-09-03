<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{

    public function actionHello()
    {
        echo "Hello Yii2";
    }
    public  function actionHi()
    {
      echo "Hi Yii2";
    }
    public  function actionParam1($name)
    {
      echo "Hello ".$name;
    }
    public function actionParam2($fname,$lname)
    {
      echo "Hello $fname $lname";
    }
}
