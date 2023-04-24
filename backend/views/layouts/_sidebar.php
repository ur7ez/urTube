<?php

use yii\bootstrap5\Nav;

?>
<aside class="shadow">
    <?= Nav::widget([
        'options' => [
            'class' => 'flex-column nav-pills',
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Videos',
                'url' => ['/video/index']
            ],
        ],
    ]);
    ?>
</aside>