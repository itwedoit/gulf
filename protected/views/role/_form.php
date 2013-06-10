<?php
/* @var $this RoleController */
/* @var $model Role */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Role'); ?>
		<?php echo $form->textField($model,'Role',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OtherRole'); ?>
		<?php echo $form->textField($model,'OtherRole',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'OtherRole'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->