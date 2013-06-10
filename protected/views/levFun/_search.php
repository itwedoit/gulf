<?php
/* @var $this LevFunController */
/* @var $model LevFun */
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
		<?php echo $form->label($model,'fundSource'); ?>
		<?php echo $form->textField($model,'fundSource',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institutionID'); ?>
		<?php echo $form->textField($model,'institutionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectTitle'); ?>
		<?php echo $form->textField($model,'projectTitle',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objective'); ?>
		<?php echo $form->textArea($model,'objective',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'how'); ?>
		<?php echo $form->textArea($model,'how',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project'); ?>
		<?php echo $form->textField($model,'project',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'principalInvestigator'); ?>
		<?php echo $form->textField($model,'principalInvestigator',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'awardTerm'); ?>
		<?php echo $form->textField($model,'awardTerm',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institution'); ?>
		<?php echo $form->textField($model,'institution',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personID'); ?>
		<?php echo $form->textField($model,'personID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->