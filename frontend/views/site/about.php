<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

//For testing Url::previous() in module/admin/views/index
Url::remember();
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>This is the About page. You may modify the following file to customize its content:</p> -->

    <!-- <code><?= __FILE__ ?></code> -->
    <p>Id контроллера: <?= Html::encode($this->context->id) ?></p>
    <p>Переменная из контроллера, отображаемая в виде: <?= Html::encode($this->context->some_string) ?></p>
</div>
