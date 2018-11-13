<?php
use yii\helpers\Html;
?>
 <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
<div class="alert alert-success">
            G. We will respond to you as soon as possible.
        </div>
<p>Usted ha digitado la informacion:</p>

<ul>
    <li><label>Empresa</label>: <?= Html::encode($model->Empresa) ?></li>
    <li><label>Razon_social</label>: <?= Html::encode($model->Razon_social) ?></li>
    <li><label>ruc</label>: <?= Html::encode($model->ruc) ?></li>
    <li><label>encargado</label>: <?= Html::encode($model->encargado) ?></li>
    <li><label>proyecto</label>: <?= Html::encode($model->proyecto) ?></li>
    <li><label>titulo</label>: <?= Html::encode($model->titulo) ?></li>
    <li><label>fecha_Envio</label>: <?= Html::encode($model->fecha_Envio) ?></li>
	<li><label>descripcion_del_problema</label>: <?= Html::encode($model->descripcion_del_problema) ?></li>
	<li><label>sexo</label>: <?= Html::encode($model->sexo) ?></li>

</ul>
<p><h2>Con estos datos se evaluara su solicitud.</h2></p>