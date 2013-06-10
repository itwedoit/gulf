<?php
/* @var $this QuotesController */
/* @var $model Quotes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quotes-form',
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
		<?php echo $form->labelEx($model,'Author'); ?>
		<?php echo $form->textField($model,'Author',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TitleHeadline'); ?>
		<?php echo $form->textField($model,'TitleHeadline',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TitleHeadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Publication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IssueEdition'); ?>
		<?php echo $form->textField($model,'IssueEdition',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'IssueEdition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Link'); ?>
		<?php echo $form->textField($model,'Link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Notes'); ?>
		<?php echo $form->textField($model,'Notes',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Copy'); ?>
		<?php echo $form->textField($model,'Copy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Copy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectID'); ?>
		<?php echo $form->textField($model,'projectID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'projectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personID'); ?>
		<?php echo $form->textField($model,'personID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'personID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->