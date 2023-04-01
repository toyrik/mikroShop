<?php

namespace app\controllers;

use app\models\Product;
use yii\web\Controller;
use yii\web\Request;

class ShopController extends Controller
{
    public function actionIndex(Request $request)
    {
        $data = $request->get();
        var_dump($data);
        $products = Product::find()->all();
        return $this->render('index', compact('products'));
    }
}