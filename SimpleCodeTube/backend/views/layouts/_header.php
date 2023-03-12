<?php
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Html;
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
    $menuItems = [
        ['label' => 'Create', 'url' => ['/video/create']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'options' => ['class' => ''],
            'linkOptions' => [
                'data-method' => 'post'
            ]
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav position-absolute end-0 p-1'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>