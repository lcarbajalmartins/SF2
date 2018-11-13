<?php
use yii\helpers\Html;
?>
<?=Html::encode($mensaje)?>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>true,
)); ?>

<?php echo $form->errorSummary(array($a,$b)); ?>

<div class="row">
    <?php echo $form->labelEx($a,'firstName'); ?>
    <?php echo $form->textField($a,'firstName'); ?>
    <?php echo $form->error($a,'firstName'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($b,'lastName'); ?>
    <?php echo $form->textField($b,'lastName'); ?>
    <?php echo $form->error($b,'lastName'); ?>
</div>

<?php $this->endWidget(); ?>