<?php
/* @var $this SearchPController */
/* @var $model SearchP */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'search-p-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AmountPerInstitution'); ?>
		<?php echo $form->textField($model,'AmountPerInstitution',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'AmountPerInstitution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProjectTitle'); ?>
		<?php echo $form->textField($model,'ProjectTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ProjectTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitutionID'); ?>
		<?php echo $form->textField($model,'InstitutionID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'InstitutionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FundRec'); ?>
		<?php echo $form->textField($model,'FundRec'); ?>
		<?php echo $form->error($model,'FundRec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme'); ?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Publication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataSet'); ?>
		<?php echo $form->textField($model,'DataSet',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DataSet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrincipalInvestigator'); ?>
		<?php echo $form->textField($model,'PrincipalInvestigator',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PrincipalInvestigator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consortia'); ?>
		<?php echo $form->textField($model,'consortia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'consortia'); ?>
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