<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about wrapper">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <img src="<?php echo Yii::$app->request->baseUrl; ?>/media/logo.jpg" />
    <div class="logo_swg"><img src="a2.svg" alt="Aiapi Trans"></div>


    <code><?= __FILE__ ?></code>
</div>
