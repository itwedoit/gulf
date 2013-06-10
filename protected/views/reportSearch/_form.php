<?php
/* @var $this ReportSearchController */
/* @var $model Report */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Award'); ?>
		<?php echo $form->textField($model,'Award',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Award'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Project'); ?>
		<?php echo $form->textField($model,'Project',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Task'); ?>
		<?php echo $form->textField($model,'Task',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Task'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme'); ?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProjectTitle'); ?>
		<?php echo $form->textField($model,'ProjectTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ProjectTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SubAwards'); ?>
		<?php echo $form->textField($model,'SubAwards',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SubAwards'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StartDate'); ?>
		<?php echo $form->textField($model,'StartDate',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'StartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EndDate'); ?>
		<?php echo $form->textField($model,'EndDate',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'EndDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Publication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AwardAmount'); ?>
		<?php echo $form->textField($model,'AwardAmount',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'AwardAmount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->