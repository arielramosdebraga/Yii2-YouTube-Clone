<?php
/** @var $model \common\models\Video */

use \yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="d-flex">
  <a href="<?= Url::to(['/video/update', 'id' => $model->video_id]) ?>">
    <div class="flex-shrink-0 thumb" style="background-image: url('<?= $model->getThumbnailLink() ?>');"></div>
  </a>
  <div class="flex-grow-1 ms-3">
    <h6 class="mt-0"><?php echo $model->title ?></h6>
    <?= $model->description ?>
  </div>
</div>