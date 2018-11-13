<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Solicitud de cambio';
$this->params['breadcrumbs'][] = $this->title;


?>
<h1><?= Html::encode($this->title) ?></h1>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Empresa') ?>

    <?= $form->field($model, 'Razon_social') ?>

    <?= $form->field($model, 'ruc') ?>

    <?= $form->field($model, 'encargado') ?>

    <?= $form->field($model, 'proyecto') ?>

     <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'fecha_Envio') ?>

    <?= $form->field($model, 'descripcion_del_problema')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'verificar_codigo')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6" >{input}</div></div>',
                    ]) ?> 
    <div class="form-group">
        <?= Html::submitButton('Enviar solicitud', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>