<?php
    if (!Yii::$app->user->isGuest) {
        echo '<aside class="shadow">';
        $menuItems[] = ['label' => '<i class="fas fa-home"></i> Home', 'url' => ['/video/index']];
        $menuItems[] = ['label' => '<i class="fas fa-history"></i> History','url' => ['/video/history']];
    
        echo \yii\bootstrap5\Nav::widget([
            'options' => [
                'class' => 'd-flex flex-column nav-pills'
            ],
            'encodeLabels' => false,
            'items' => $menuItems,
        ]);

        echo '</aside>';
    }
?>