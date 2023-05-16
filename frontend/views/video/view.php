<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

/** @var $model \common\models\Video */
/** @var $similarVideos \common\models\Video[] */
/** @var $this \yii\web\View */
?>

<div class="row">
    <div class="col-sm-8">
        <div class="ratio ratio-16x9">
            <video poster="<?= $model->getThumbnailLink() ?>"
                   src="<?= $model->getVideoLink() ?>" controls></video>
        </div>
        <h6 class="mt-2"><?= $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-muted">
                <?= $model->getViews()->count() ?> views •
                <?= Yii::$app->formatter->asDate($model->created_at) ?>
            </div>
            <div>
                <?php Pjax::begin() ?>
                <?= $this->render('_buttons', ['model' => $model]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
        <div>
            <p><?= \common\helpers\Html::channelLink($model->createdBy) ?></p>
            <small>
                <?= $model->description
                    ? Html::encode($model->description)
                    : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid, delectus
                dignissimos doloremque dolores eligendi et, facere incidunt laudantium molestias
                 nesciunt nihil odit officia porro quaerat quam quas, sint. Natus!' ?>
            </small>
        </div>
    </div>
    <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo): ?>
            <div class="d-flex mb-2">
                <div class="flex-shrink-0">
                    <a href="<?= \yii\helpers\Url::to(['/video/view', 'video_id' => $similarVideo->video_id]) ?>">
                        <div class="ratio ratio-16x9" style="width: 120px">
                            <video poster="<?= $similarVideo->getThumbnailLink() ?>"
                                   src="<?= $similarVideo->getVideoLink() ?>"></video>
                        </div>
                    </a>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="m-0"><?= $similarVideo->title ?></h6>
                    <div class="text-muted">
                        <p class="m-0">
                            <?= \common\helpers\Html::channelLink($similarVideo->createdBy) ?>
                        </p>
                        <small>
                            <?= $similarVideo->getViews()->count() ?> views •
                            <?= Yii::$app->formatter->asRelativeTime($similarVideo->created_at) ?>
                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>