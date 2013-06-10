<?php
/* @var $this CostController */
/* @var $model Cost */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CostID'); ?>
		<?php echo $form->textField($model,'CostID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Salaries'); ?>
		<?php echo $form->textField($model,'Salaries'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FringeBenefits'); ?>
		<?php echo $form->textField($model,'FringeBenefits'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Equipment'); ?>
		<?php echo $form->textField($model,'Equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Travel'); ?>
		<?php echo $form->textField($model,'Travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ParticipantSupportCosts'); ?>
		<?php echo $form->textField($model,'ParticipantSupportCosts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Materials'); ?>
		<?php echo $form->textField($model,'Materials'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PublicationCosts'); ?>
		<?php echo $form->textField($model,'PublicationCosts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ConsultantServices'); ?>
		<?php echo $form->textField($model,'ConsultantServices'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ComputerServices'); ?>
		<?php echo $form->textField($model,'ComputerServices'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SubAwards'); ?>
		<?php echo $form->textField($model,'SubAwards'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FacilityRental'); ?>
		<?php echo $form->textField($model,'FacilityRental'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SARATime'); ?>
		<?php echo $form->textField($model,'SARATime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OtherDirecCost'); ?>
		<?php echo $form->textField($model,'OtherDirecCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IndirectCost'); ?>
		<?php echo $form->textField($model,'IndirectCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Task'); ?>
		<?php echo $form->textField($model,'Task'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Theme'); ?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Year'); ?>
		<?php echo $form->textField($model,'Year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstitutionAbrev'); ?>
		<?php echo $form->textField($model,'InstitutionAbrev',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EntryDate'); ?>
		<?php echo $form->textField($model,'EntryDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->