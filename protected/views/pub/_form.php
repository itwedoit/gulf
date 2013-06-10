<?php
/* @var $this PubController */
/* @var $model Pub */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pub-form',
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
		<?php echo $form->labelEx($model,'authorsStudents'); ?>
		<?php echo $form->textField($model,'authorsStudents',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'authorsStudents'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Publication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Year'); ?>
		<?php echo $form->textField($model,'Year'); ?>
		<?php echo $form->error($model,'Year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Volume'); ?>
		<?php echo $form->textField($model,'Volume'); ?>
		<?php echo $form->error($model,'Volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Issue'); ?>
		<?php echo $form->textField($model,'Issue'); ?>
		<?php echo $form->error($model,'Issue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pages'); ?>
		<?php echo $form->textField($model,'Pages',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Pages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISBN'); ?>
		<?php echo $form->textField($model,'ISBN',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ISBN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOI'); ?>
		<?php echo $form->textField($model,'DOI',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DOI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PublicationType'); ?>
		<?php echo $form->textField($model,'PublicationType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PublicationType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PublicationStatus'); ?>
		<?php echo $form->textField($model,'PublicationStatus',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PublicationStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme'); ?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Keywords'); ?>
		<?php echo $form->textField($model,'Keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Link'); ?>
		<?php echo $form->textField($model,'Link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LinkGoMRI'); ?>
		<?php echo $form->textField($model,'LinkGoMRI',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'LinkGoMRI'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->