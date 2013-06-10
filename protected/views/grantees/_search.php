<?php
/* @var $this GranteesController */
/* @var $model Grantees */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GulfState'); ?>
		<?php echo $form->textField($model,'GulfState',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Year1'); ?>
		<?php echo $form->textField($model,'Year1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field4'); ?>
		<?php echo $form->textField($model,'Field4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field5'); ?>
		<?php echo $form->textField($model,'Field5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field6'); ?>
		<?php echo $form->textField($model,'Field6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field7'); ?>
		<?php echo $form->textField($model,'Field7',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field8'); ?>
		<?php echo $form->textField($model,'Field8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RFPIII'); ?>
		<?php echo $form->textField($model,'RFPIII',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RFPILead'); ?>
		<?php echo $form->textField($model,'RFPILead',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RFPISub'); ?>
		<?php echo $form->textField($model,'RFPISub',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field12'); ?>
		<?php echo $form->textField($model,'Field12',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field13'); ?>
		<?php echo $form->textField($model,'Field13',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field14'); ?>
		<?php echo $form->textField($model,'Field14',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field15'); ?>
		<?php echo $form->textField($model,'Field15',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field16'); ?>
		<?php echo $form->textField($model,'Field16',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field17'); ?>
		<?php echo $form->textField($model,'Field17',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field18'); ?>
		<?php echo $form->textField($model,'Field18',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field19'); ?>
		<?php echo $form->textField($model,'Field19'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RFPII'); ?>
		<?php echo $form->textField($model,'RFPII',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field21'); ?>
		<?php echo $form->textField($model,'Field21',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field22'); ?>
		<?php echo $form->textField($model,'Field22'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field23'); ?>
		<?php echo $form->textField($model,'Field23',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FundingSources'); ?>
		<?php echo $form->textField($model,'FundingSources'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TotalFundingReceived'); ?>
		<?php echo $form->textField($model,'TotalFundingReceived',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field26'); ?>
		<?php echo $form->textField($model,'Field26',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field27'); ?>
		<?php echo $form->textField($model,'Field27',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OceanLeadership'); ?>
		<?php echo $form->textField($model,'OceanLeadership',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->