<?php
/* @var $this GrantYearController */
/* @var $model GrantYear */
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
		<?php echo $form->label($model,'GrantUnitID'); ?>
		<?php echo $form->textField($model,'GrantUnitID',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GrantUnit'); ?>
		<?php echo $form->textField($model,'GrantUnit',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProgramID'); ?>
		<?php echo $form->textArea($model,'ProgramID',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StartDate'); ?>
		<?php echo $form->textField($model,'StartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EndDate'); ?>
		<?php echo $form->textField($model,'EndDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AwardDate'); ?>
		<?php echo $form->textField($model,'AwardDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->