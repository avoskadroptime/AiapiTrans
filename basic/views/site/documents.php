<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


$this->title = 'Документы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about wrapper">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Это страница с документами
    </p>


    <?= Html::img('@web/images/logo.svg') ?>



    <code><?= __FILE__ ?></code>
</div>
