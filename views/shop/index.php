<?php

/** @var yii\web\View $this */
/** @var array $products */
/** @var $pages */

use yii\widgets\LinkPager;

$this->title = Yii::$app->name;
?>
<div class="container">
    <div class="row">
        <?php
            if (count($products)):
                foreach ($products as $product): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=> $product->id]) ?>">
                                        <?= $product->title ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <?= $product->category->title ?>
                            </div>
                        </div>
                    </div>
        <?php
                endforeach;
            else: ?>
            <div class="card">
                Ничего не найдено
            </div>
        </div>
    <?php
        endif; ?>
</div>
