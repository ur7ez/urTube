<?php
use yii\bootstrap5\Nav;

?>
<aside class="shadow">
    <?= Nav::widget([
        'options' => [
            'class' => 'flex-column nav-pills',
        ],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => '<i class="fa-solid fa-home"></i> Home',
                'url' => ['/video/index']
            ],
            [
                'label' => '<i class="fa-solid fa-clock-rotate-left"></i> History',
                'url' => ['/video/history']
            ],
        ],
    ]);
    ?>
</aside>