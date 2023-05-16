<?php
use yii\helpers\Url;
/** @var $channel \common\models\User */
?>
<?php if (Yii::$app->user->id != $channel->id): ?>
<a class="btn btn-outline-light <?= $channel->isSubscribed(Yii::$app->user->id) ? 'btn-secondary' : 'btn-danger' ?>"
   href="<?= Url::to(['channel/subscribe', 'username' => $channel->username]) ?>"
   data-method="post" data-pjax="1">
    Subscribe <i class="fa-regular fa-bell"></i>
</a>
<?php endif; ?>
<span><?= $channel->getSubscribers()->count() ?> subscribers</span>
