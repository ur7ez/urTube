<?php
/** @var $this \yii\web\View */
/** @var $dataProvider \yii\data\ActiveDataProvider */
?>
<h1>My History</h1>
<?= $this->render('@frontend/views/common/_video_list', ['dataProvider' => $dataProvider]) ?>