<?php
/* @var $this ExternalSearchController */
/* @var $model ExternalSearch */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'external-search-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Grant'); ?>
		<?php echo $form->textField($model,'Grant',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Grant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Consortia'); ?>
		<?php echo $form->textField($model,'Consortia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Consortia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Task'); ?>
		<?php echo $form->textField($model,'Task',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Task'); ?>
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
		<?php echo $form->labelEx($model,'Keyword'); ?>
		<?php echo $form->textField($model,'Keyword'); ?>
		<?php echo $form->error($model,'Keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Publication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitutionID'); ?>
		<?php echo $form->textField($model,'InstitutionID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'InstitutionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataSet'); ?>
		<?php echo $form->textField($model,'DataSet',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DataSet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Award'); ?>
		<?php echo $form->textField($model,'Award',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Award'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme1'); ?>
		<?php echo $form->textField($model,'Theme1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Theme1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PersonID'); ?>
		<?php echo $form->textField($model,'PersonID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PersonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme2'); ?>
		<?php echo $form->textField($model,'Theme2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Theme2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme3'); ?>
		<?php echo $form->textField($model,'Theme3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Theme3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme4'); ?>
		<?php echo $form->textField($model,'Theme4',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Theme4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme5'); ?>
		<?php echo $form->textField($model,'Theme5',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Theme5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Institution'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->