<?php
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var  $latestVideo \common\models\Video */
/** @var  $numberOfViews integer */
/** @var  $numberOfSubscribers integer */
/** @var  $subscribers \common\models\Subscriber[] */

$this->title = Yii::$app->name;
?>
<div class="site-index d-flex">
    <div class="card m-2" style="width: 14rem;">
        <?php if ($latestVideo): ?>
        <div class="ratio ratio-16x9 mb-3 mt-2">
            <video poster="<?= $latestVideo->getThumbnailLink() ?>"
                   src="<?= $latestVideo->getVideoLink() ?>"></video>
        </div>
        <div class="card-body">
            <h6 class="card-title"><?= $latestVideo->title ?></h6>
            <p class="card-text">
                Likes: <?= $latestVideo->getLikes()->count() ?><br>
                Views: <?= $latestVideo->getViews()->count() ?>
            </p>
            <a href="<?= Url::to(['/video/update', 'video_id' => $latestVideo->video_id]) ?>"
               class="btn btn-primary">Edit</a>
        </div>
        <?php else: ?>
            <div class="card-body">
                You don't have uploaded videos yet
            </div>
        <?php endif; ?>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Total Views</h6>
            <p class="card-text" style="font-size: 62px">
                <?= $numberOfViews ?><br>
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Total Subscribers</h6>
            <p class="card-text" style="font-size: 62px">
                <?= $numberOfSubscribers ?><br>
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Latest Subscribers</h6>
            <?php foreach ($subscribers as $subscriber): ?>
                <div class="car-text">
                    <?= $subscriber->user->username ?><br>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
