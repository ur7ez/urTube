<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;

$this->beginContent('@frontend/views/layouts/base.php');
?>
<div class="container col-md-2">
    <?= $this->render('_sidebar') ?>
</div>
<div class="container">
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<?php $this->endContent(); ?>