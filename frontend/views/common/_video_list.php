<?php
use yii\bootstrap5\LinkPager;
use yii\widgets\ListView;

/** @var $dataProvider \yii\data\ActiveDataProvider */
?>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
        'class' => LinkPager::class,
    ],
    'itemView' => '@frontend/views/video/_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => ['tag' => false],
]) ?>