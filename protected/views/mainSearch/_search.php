<?php
/* @var $this MainSearchController */
/* @var $model MainSearch */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AmountPerInstitution'); ?>
		<?php echo $form->textField($model,'AmountPerInstitution'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROGRAM'); ?>
		<?php echo $form->textField($model,'PROGRAM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstitutionID'); ?>
		<?php echo $form->textField($model,'InstitutionID',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FundRec'); ?>
		<?php echo $form->textField($model,'FundRec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Theme'); ?>
    
    
  <?php echo CHtml::dropDownList('RTheme,[Theme]','',
   CHtml::listData(RTheme::model()->findAll(), 'ID', 'Theme'),
   array('empty'=>'Select Theme'))?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataSet'); ?>
		<?php echo $form->textField($model,'DataSet',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrincipalInvestigator'); ?>
		<?php echo $form->textField($model,'PrincipalInvestigator',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->