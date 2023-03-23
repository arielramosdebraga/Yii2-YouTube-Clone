<?php
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;
?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-lg navbar-light bg-light shadow-sm'],
        'innerContainerOptions' => [
            'class' => 'container-fluid'
        ]
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        $position = 'end-50';
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => [
                'data-method' => 'post'
            ]
        ];
        $position = 'end-100';
    }
  echo Nav::widget([
      'options' => ['class' => 'navbar-nav position-absolute end-0 pe-1'],
      'items' => $menuItems,
  ]); 
  
  ?>
  
  <form action="<?= Url::to(['/video/search']) ?>" class="position-relative <?= $position ?>">
        <div class="input-group">
            <div class="form-outline">
                <input type="search" name="keyword" placeholder="Search" class="form-control" value="<?= Yii::$app->request->get('keyword') ?>" />
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
  <?php NavBar::end(); ?>
</header>