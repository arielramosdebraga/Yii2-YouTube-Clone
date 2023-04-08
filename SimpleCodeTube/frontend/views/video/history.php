<?php

/** @var $dataProvider \yii\data\ActiveDataProvider */

$this->title = 'My Visited videos | '. Yii::$app->name;
?>
<h1>My Visited videos</h1>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
        'class' => \yii\bootstrap5\LinkPager::class,
    ],
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>