<?php
/* @var $this LevFundController */
/* @var $model LevFund */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lev-fund-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fundSource'); ?>
		<?php echo $form->textField($model,'fundSource',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fundSource'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institutionID'); ?>
		<?php echo $form->textField($model,'institutionID'); ?>
		<?php echo $form->error($model,'institutionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectTitle'); ?>
		<?php echo $form->textField($model,'projectTitle',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'projectTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objective'); ?>
		<?php echo $form->textArea($model,'objective',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'objective'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'how'); ?>
		<?php echo $form->textArea($model,'how',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'how'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project'); ?>
		<?php echo $form->textField($model,'project',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->