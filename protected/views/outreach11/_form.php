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
		<?php echo $form->labelEx($model,'OutreachProductActivity'); ?>
		<?php echo $form->textField($model,'OutreachProductActivity',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'OutreachProductActivity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PartnersInActivity'); ?>
		<?php echo $form->textField($model,'PartnersInActivity',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PartnersInActivity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Deliverables'); ?>
		<?php echo $form->textField($model,'Deliverables',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Deliverables'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TargetAudiences'); ?>
		<?php echo $form->textField($model,'TargetAudiences',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TargetAudiences'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImpactsOutcomes'); ?>
		<?php echo $form->textField($model,'ImpactsOutcomes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ImpactsOutcomes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Link'); ?>
		<?php echo $form->textField($model,'Link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->