<?php

use yii\helpers\Url;

/** @var $this \yii\web\View */
/** @var $model \common\models\Comment */

?>
<div class="media media-comment comment-item mb-3 position-relative" data-id="<?php echo $model->id ?>">
    <img class="mr-3 comment-avatar" src="/img/avatar.svg" alt="" style="width: 50px">
    <div class="media-body">
        <h6 class="mt-0">
            <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
            <small class="text-muted">
                <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
                <?php if ($model->created_at !== $model->updated_at): ?>
                    (edited)
                <?php endif; ?>
            </small>
        </h6>
        <div class="comment-text">
            <div class="text-wrapper">
                <?php if ($model->mention): ?>
                    <span class="badge bg-info"><?php echo '@' . $model->mention ?></span>
                <?php endif; ?>
                <?php echo $model->comment ?>
            </div>
            
            <div class="bottom-actions my-2 position-absolute top-0" style="left:50px;">
                <!--button data-action="<?php echo \yii\helpers\Url::to(['/comment/reply']) ?>"
                        class="btn btn-sm btn-light btn-reply" id="form_<?=$model->id?>">
                    REPLY
                </button-->
                <div class="btn-group comment-actions">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item item-delete-comment"
                           href="<?php echo \yii\helpers\Url::to(['/comment/delete', 'id' => $model->id]) ?>">
                            <i class="fas fa-trash"></i>
                            Delete
                        </a>
                    </div>
                </div>
            </div>
            <div class="reply-section form_<?=$model->id?>">
                <?php echo '<div class="d-none">' . $this->render('_comment_create', ['model' => $model]) . '</div>'; ?>
            </div>
            <div class="sub-comments">
                <?php foreach ($model->comments as $comment): ?>
                    <?php echo $this->render('_comment_item', ['model' => $comment]) ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>