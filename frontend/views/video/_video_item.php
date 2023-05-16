<?php
use yii\helpers\Url;

/** @var $model \common\models\Video */
?>

<div class="card m-3" style="width: 14rem;">
    <a href="<?= Url::to(['/video/view', 'id' => $model->video_id])?>">
        <div class="ratio ratio-16x9">
            <video poster="<?= $model->getThumbnailLink() ?>"
                   src="<?= $model->getVideoLink() ?>"></video>
        </div>
    </a>
    <div class="card-body p-2">
        <h6 class="card-title m-0"><?= $model->title ?></h6>
        <p class="text-muted card-text m-0">
            <?= \common\helpers\Html::channelLink($model->createdBy) ?>
        </p>
        <p class="text-muted card-text m-0">
            <?= $model->getViews()->count() ?> Views •
            <?= Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>
