<?php
/* @var $this WorkshopController */
/* @var $model Workshop */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workshop-form',
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
		<?php echo $form->labelEx($model,'InternalExternal'); ?>
		<?php echo $form->textField($model,'InternalExternal',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'InternalExternal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date1'); ?>
		<?php echo $form->textField($model,'Date1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Date1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Location'); ?>
		<?php echo $form->textField($model,'Location',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Organizer'); ?>
		<?php echo $form->textField($model,'Organizer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Organizer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Objective'); ?>
		<?php echo $form->textField($model,'Objective',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Objective'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Participants'); ?>
		<?php echo $form->textField($model,'Participants',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Participants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Participant'); ?>
		<?php echo $form->textField($model,'Participant',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Participant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Website'); ?>
		<?php echo $form->textField($model,'Website',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Website'); ?>
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