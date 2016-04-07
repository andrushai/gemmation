<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Materialize Parallax';
// $bg1 = Html::img(->baseUrl.'/background1.jpg')
$bg1 = 'http://materializecss.com/templates/parallax-template/background1.jpg';
$bg2 = 'http://materializecss.com/templates/parallax-template/background2.jpg';
$bg3 = 'http://materializecss.com/templates/parallax-template/background3.jpg';

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
  <div id="index-banner" class="admin-default-index parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img alt="Unsplashed background img 1" src=<?=Html::encode($bg1)?>></div>
  </div>


  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h5>Url Helper</h5>
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


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img alt="Unsplashed background img 2" src=<?=Html::encode($bg2)?>></div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img alt="Unsplashed background img 3" src=<?=Html::encode($bg3)?>></div>
  </div>


