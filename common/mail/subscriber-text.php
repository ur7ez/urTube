<?php
/** @var $channel \common\models\User  */
/** @var $user \common\models\User  */
printf(
    "Hello %s\nUser `%s` has subscribed to you\n\n%s team",
    $channel->username,
    $user->username,
    Yii::$app->name
);