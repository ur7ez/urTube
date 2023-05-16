<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-md navbar-dark bg-dark shadow-sm',
    ],
]);
$menuItems = [];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login'], 'class' => ['btn btn-link login text-decoration-none']];
} else {
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post'],
        'class' => 'btn btn-link logout text-decoration-none',
    ];
}
?>
    <form action="<?= \yii\helpers\Url::to(['/video/search']) ?>"
          class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search"
               name="keyword" value="<?= Yii::$app->request->get('keyword') ?>">
        <button class="btn btn-outline-success">Search</button>
    </form>
<?php
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ms-auto mb-2 mb-md-0'],
    'items' => $menuItems,
]);
NavBar::end();