<?php
/* @var $this ReportSearchController */
/* @var $model Report */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ReportID'); ?>
		<?php echo $form->textField($model,'ReportID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Award'); ?>
		<?php echo $form->textField($model,'Award',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Project'); ?>
		<?php echo $form->textField($model,'Project',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Task'); ?>
		<?php echo $form->textField($model,'Task',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model,'ProjectTitle'); ?>
		<?php echo $form->textField($model,'ProjectTitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SubAwards'); ?>
		<?php echo $form->textField($model,'SubAwards',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StartDate'); ?>
		<?php echo $form->textField($model,'StartDate',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EndDate'); ?>
		<?php echo $form->textField($model,'EndDate',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AwardAmount'); ?>
		<?php echo $form->textField($model,'AwardAmount',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->