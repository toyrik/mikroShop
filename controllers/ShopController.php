<?php

namespace app\controllers;

use app\models\Product;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Request;

class ShopController extends Controller
{
    public function actionIndex(Request $request)
    {
        $data = $request->get();
        $products = Product::find()->all();
        return $this->render('index', compact('products'));
    }
}