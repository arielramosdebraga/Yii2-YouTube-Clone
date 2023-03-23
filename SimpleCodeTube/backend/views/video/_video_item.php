<?php
/** @var $model \common\models\Video */

use \yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="d-flex">
  <div class="flex-shrink-0">
    <a href="<?= Url::to(['/video/update', 'video_id' => $model->video_id]) ?>">
        <img src="<?= $model->getThumbnailLink() ?>" alt="<?= $model->title ?>">
    </a>
  </div>
  <div class="flex-grow-1 ms-3">
    <h6 class="mt-0"><?php echo $model->title ?></h6>
    <?= $model->description ?>
  </div>
</div>