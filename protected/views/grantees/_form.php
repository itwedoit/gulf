<?php
/* @var $this GranteesController */
/* @var $model Grantees */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grantees-form',
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
		<?php echo $form->labelEx($model,'GulfState'); ?>
		<?php echo $form->textField($model,'GulfState',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'GulfState'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Year1'); ?>
		<?php echo $form->textField($model,'Year1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Year1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field4'); ?>
		<?php echo $form->textField($model,'Field4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field5'); ?>
		<?php echo $form->textField($model,'Field5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field6'); ?>
		<?php echo $form->textField($model,'Field6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field7'); ?>
		<?php echo $form->textField($model,'Field7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field8'); ?>
		<?php echo $form->textField($model,'Field8'); ?>
		<?php echo $form->error($model,'Field8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RFPIII'); ?>
		<?php echo $form->textField($model,'RFPIII',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'RFPIII'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RFPILead'); ?>
		<?php echo $form->textField($model,'RFPILead',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RFPILead'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RFPISub'); ?>
		<?php echo $form->textField($model,'RFPISub',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RFPISub'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field12'); ?>
		<?php echo $form->textField($model,'Field12',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field13'); ?>
		<?php echo $form->textField($model,'Field13',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field14'); ?>
		<?php echo $form->textField($model,'Field14',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field15'); ?>
		<?php echo $form->textField($model,'Field15',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field16'); ?>
		<?php echo $form->textField($model,'Field16',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field17'); ?>
		<?php echo $form->textField($model,'Field17',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field17'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field18'); ?>
		<?php echo $form->textField($model,'Field18',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field18'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field19'); ?>
		<?php echo $form->textField($model,'Field19'); ?>
		<?php echo $form->error($model,'Field19'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RFPII'); ?>
		<?php echo $form->textField($model,'RFPII',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RFPII'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field21'); ?>
		<?php echo $form->textField($model,'Field21',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field22'); ?>
		<?php echo $form->textField($model,'Field22'); ?>
		<?php echo $form->error($model,'Field22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field23'); ?>
		<?php echo $form->textField($model,'Field23',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field23'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FundingSources'); ?>
		<?php echo $form->textField($model,'FundingSources'); ?>
		<?php echo $form->error($model,'FundingSources'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TotalFundingReceived'); ?>
		<?php echo $form->textField($model,'TotalFundingReceived',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'TotalFundingReceived'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field26'); ?>
		<?php echo $form->textField($model,'Field26',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Field26'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field27'); ?>
		<?php echo $form->textField($model,'Field27',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Field27'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OceanLeadership'); ?>
		<?php echo $form->textField($model,'OceanLeadership',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'OceanLeadership'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->