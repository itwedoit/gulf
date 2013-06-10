<?php
/* @var $this OutreachController */
/* @var $model Outreach */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'outreach-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Project'); ?>
		<?php echo $form->textField($model,'Project',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Outreachproduct'); ?>
		<?php echo $form->textField($model,'Outreachproduct',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Outreachproduct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Partners'); ?>
		<?php echo $form->textField($model,'Partners',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Partners'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Deliverable'); ?>
		<?php echo $form->textField($model,'Deliverable',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Deliverable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TargetAudience'); ?>
		<?php echo $form->textField($model,'TargetAudience',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TargetAudience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Impacts'); ?>
		<?php echo $form->textField($model,'Impacts',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Impacts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Link'); ?>
		<?php echo $form->textField($model,'Link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personID'); ?>
		<?php echo $form->textField($model,'personID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'personID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectID'); ?>
		<?php echo $form->textField($model,'projectID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'projectID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->