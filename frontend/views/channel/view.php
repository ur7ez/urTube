<?php
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\widgets\Pjax;

/** @var $this \yii\web\View */
/** @var $channel User */
/** @var $dataProvider ActiveDataProvider */
?>

<div class="p-5 bg-body-tertiary border rounded-3">
    <h2 class="display-4 fw-bold"><?= $channel->username ?></h2>
    <hr class="my-3">
    <?php Pjax::begin() ?>
        <?= $this->render('_subscribe', [
            'channel' => $channel,
        ]) ?>
    <?php Pjax::end() ?>
</div>

<?= $this->render('@frontend/views/common/_video_list', ['dataProvider' => $dataProvider]) ?>