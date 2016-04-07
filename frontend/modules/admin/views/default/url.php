<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Url';

$url1 = Url::to();
$url2 = Url::to(['index']);
$url3 = Url::to(['/site/index']);
$url4 = Url::to(['site/index']);
$url5 = Url::home();
$url6 = Url::base();
$url7 = Url::previous();
$url8 = Url::current();
// $url9 - checking urlManager rules in config
$url9 = Url::to(['/site/index', 'name' => 'Андрей']);
?>

<div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3>Url Helper</h3>
          <p>
            <table class="responsive-table">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Button</th>
                </tr>
              </thead>
            
              <tbody>
                <tr>
                  <td><code><?="Url::to()"?></code></td>
                  <td><a href=<?=Html::encode($url1)?> class="btn"><?=Html::encode($url1)?></a></td>
                </tr>
                <tr>
                  <td><code><?="Url::to(['index'])"?></code></td>
                  <td><a href=<?=Html::encode($url2)?> class="btn"><?=Html::encode($url2)?></a></td>
                </tr>
                <tr>
                  <td><code><?="Url::to(['/site/index'])"?></code></td>
                  <td><a href=<?=Html::encode($url3)?> class="btn"><?=Html::encode($url3)?></a></td>
                </tr>
                <tr>
                  <td><code><?="Url::to(['site/index'])"?></code></td>
                  <td><a href=<?=Html::encode($url4)?> class="btn"><?=Html::encode($url4)?></a></td>
                </tr>
                <tr>
                  <td><code><?="Url::home()"?></code></td>
                  <td><a href=<?=Html::encode($url5)?> class="btn"><?=Html::encode($url5)?></a></td>
                </tr>
                <tr>
                  <td><code><?="Url::base()"?></code></td>
                  <td><a class="btn disabled">Base Url unvisible</a></td>
                </tr>
                <tr>
                  <td><code><?="Url::previous()"?></code></td>
                  <td><a href=<?=Html::encode($url7)?> class="btn"><?=Html::encode($url7)?></a></td>
                </tr>
                <tr>
                  <td><code><?="Url::current()"?></code></td>
                  <td><a href=<?=Html::encode($url8)?> class="btn"><?=Html::encode($url8)?></a></td>
                </tr>
                <tr>
                  <td><code><?="Url::to(['/site/index', 'name' => 'Андрей'])"?></code></td>
                  <td><a href=<?=Html::encode($url9)?> class="btn"><?=Html::encode($url9)?></a></td>
                </tr>
              </tbody>
            </table>
          </p>
        </div>
      </div>

    </div>
  </div>