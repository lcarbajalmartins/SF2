<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Empresa</h1>
<table>
<?php foreach ($empre as $Empresa): ?>
    <tr>
       <td> <?= Html::encode("({$Empresa->empresa }) {$Empresa->razonSocial}") ?>:
       <td><?= $Empresa->ruc ?>

    </tr>
<?php endforeach; ?>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>