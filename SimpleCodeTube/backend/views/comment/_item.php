<?php

/** @var $this \yii\web\View */
/** @var $model \common\models\Comment */

?>

<div class="d-flex mb-3">
    <div class="video-wrapper col-sm-6" style="margin-right: 25px;">
        <?php echo $this->render('@backend/views/video/_video_item', [
            'model' => $model->video
        ]) ?>
    </div>
    <div class="comment-wrapper col-sm-6">
        <?php echo $this->render('_comment_item', [
            'model' => $model
        ]) ?>
    </div>
</div>
