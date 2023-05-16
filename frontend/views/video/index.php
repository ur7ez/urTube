<?php
/** @var $this \yii\web\View */
/** @var $dataProvider \yii\data\ActiveDataProvider */
?>
<?= $this->render('@frontend/views/common/_video_list', ['dataProvider' => $dataProvider]) ?>