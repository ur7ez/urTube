<?php
/**
 * @var $model \common\models\Video
 */

use yii\helpers\StringHelper;
use yii\helpers\Url;
?>

<div class="d-flex">
    <a href="<?= Url::to(['/video/update', 'video_id' => $model->video_id]) ?>">
        <div class="ratio ratio-16x9 me-2" style="width: 120px">
            <video poster="<?= $model->getThumbnailLink() ?>"
                   src="<?= $model->getVideoLink() ?>"></video>
        </div>
    </a>
    <div class="flex-grow-1">
        <h6 class="mt-0"><?= $model->title ?></h6>
        <?= StringHelper::truncateWords($model->description, 10) ?>
    </div>
</div>
