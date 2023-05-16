<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;

$this->beginContent('@backend/views/layouts/base.php');
?>
<div class="container">
    <?= $this->render('_sidebar') ?>
</div>
<div class="container col-md-10">
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<?php $this->endContent(); ?>