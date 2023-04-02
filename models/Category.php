<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function getPosts()
    {
        return $this->hasMany(Product::class, ['id' => 'category_id']);
    }
}