<?php
/* @var $this CostController */
/* @var $model Cost */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cost-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CostID'); ?>
		<?php echo $form->textField($model,'CostID'); ?>
		<?php echo $form->error($model,'CostID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Salaries'); ?>
		<?php echo $form->textField($model,'Salaries'); ?>
		<?php echo $form->error($model,'Salaries'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FringeBenefits'); ?>
		<?php echo $form->textField($model,'FringeBenefits'); ?>
		<?php echo $form->error($model,'FringeBenefits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Equipment'); ?>
		<?php echo $form->textField($model,'Equipment'); ?>
		<?php echo $form->error($model,'Equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Travel'); ?>
		<?php echo $form->textField($model,'Travel'); ?>
		<?php echo $form->error($model,'Travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ParticipantSupportCosts'); ?>
		<?php echo $form->textField($model,'ParticipantSupportCosts'); ?>
		<?php echo $form->error($model,'ParticipantSupportCosts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Materials'); ?>
		<?php echo $form->textField($model,'Materials'); ?>
		<?php echo $form->error($model,'Materials'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PublicationCosts'); ?>
		<?php echo $form->textField($model,'PublicationCosts'); ?>
		<?php echo $form->error($model,'PublicationCosts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ConsultantServices'); ?>
		<?php echo $form->textField($model,'ConsultantServices'); ?>
		<?php echo $form->error($model,'ConsultantServices'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ComputerServices'); ?>
		<?php echo $form->textField($model,'ComputerServices'); ?>
		<?php echo $form->error($model,'ComputerServices'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SubAwards'); ?>
		<?php echo $form->textField($model,'SubAwards'); ?>
		<?php echo $form->error($model,'SubAwards'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FacilityRental'); ?>
		<?php echo $form->textField($model,'FacilityRental'); ?>
		<?php echo $form->error($model,'FacilityRental'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SARATime'); ?>
		<?php echo $form->textField($model,'SARATime'); ?>
		<?php echo $form->error($model,'SARATime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OtherDirecCost'); ?>
		<?php echo $form->textField($model,'OtherDirecCost'); ?>
		<?php echo $form->error($model,'OtherDirecCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IndirectCost'); ?>
		<?php echo $form->textField($model,'IndirectCost'); ?>
		<?php echo $form->error($model,'IndirectCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Task'); ?>
		<?php echo $form->textField($model,'Task'); ?>
		<?php echo $form->error($model,'Task'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme'); ?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Year'); ?>
		<?php echo $form->textField($model,'Year'); ?>
		<?php echo $form->error($model,'Year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitutionAbrev'); ?>
		<?php echo $form->textField($model,'InstitutionAbrev',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'InstitutionAbrev'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EntryDate'); ?>
		<?php echo $form->textField($model,'EntryDate'); ?>
		<?php echo $form->error($model,'EntryDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->