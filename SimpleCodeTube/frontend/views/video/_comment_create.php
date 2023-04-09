<?php

use yii\helpers\Url;

/** @var $model \common\models\Video */

?>

<form class="create-comment-form" method="post" action="<?php echo Url::to(['/comment/create', 'id' => $model->video_id]) ?>">
    <input type="hidden" name="video_id" value="<?php echo $model->video_id ?>">
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    <textarea rows="1"
                class="form-control comment-input"
                name="comment"
                placeholder="Add a public comment"></textarea>
    <div class="action-buttons text-right mt-2">
        <button type="button" class="btn btn-light btn-cancel">Cancel</button>
        <button class="btn btn-primary btn-save">Comment</button>
    </div>
</form>