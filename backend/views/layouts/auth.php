<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;

$this->beginContent('@backend/views/layouts/base.php');
?>
<div class="container col-md-10">
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<?php $this->endContent(); ?>