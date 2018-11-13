<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Empresa</h1>
<ul>
<?php foreach ($Empresa as $empre): ?>
    <li>
        <?= Html::encode("{$empre->razonSocial} ({$empre->empresa })") ?>:
        <?= $empre->ruc ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>