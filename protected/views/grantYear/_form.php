<?php
/* @var $this GrantYearController */
/* @var $model GrantYear */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grant-year-form',
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
		<?php echo $form->labelEx($model,'GrantUnitID'); ?>
		<?php echo $form->textField($model,'GrantUnitID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'GrantUnitID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GrantUnit'); ?>
		<?php echo $form->textField($model,'GrantUnit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'GrantUnit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProgramID'); ?>
		<?php echo $form->textArea($model,'ProgramID',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ProgramID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StartDate'); ?>
		<?php echo $form->textField($model,'StartDate'); ?>
		<?php echo $form->error($model,'StartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EndDate'); ?>
		<?php echo $form->textField($model,'EndDate'); ?>
		<?php echo $form->error($model,'EndDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AwardDate'); ?>
		<?php echo $form->textField($model,'AwardDate'); ?>
		<?php echo $form->error($model,'AwardDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->