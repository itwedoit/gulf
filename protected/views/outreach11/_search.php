<?php
/* @var $this OutreachController */
/* @var $model Outreach */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Project'); ?>
		<?php echo $form->textField($model,'Project',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OutreachProductActivity'); ?>
		<?php echo $form->textField($model,'OutreachProductActivity',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PartnersInActivity'); ?>
		<?php echo $form->textField($model,'PartnersInActivity',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Deliverables'); ?>
		<?php echo $form->textField($model,'Deliverables',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TargetAudiences'); ?>
		<?php echo $form->textField($model,'TargetAudiences',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImpactsOutcomes'); ?>
		<?php echo $form->textField($model,'ImpactsOutcomes',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Link'); ?>
		<?php echo $form->textField($model,'Link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->