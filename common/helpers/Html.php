<?php
namespace common\helpers;
use common\models\User;
use yii\helpers\Url;

class Html
{
    /**
     * @param User $user
     * @param boolean $scheme
     * @return string
     */
    public static function channelLink (User $user, bool $scheme = false): string
    {
        return \yii\helpers\Html::a(
            $user->username,
            Url::to(['/channel/view', 'username' => $user->username], $scheme),
            ['class' => 'text-dark text-underline-hover']
        );
    }
}