<?php
/* @var $this PubController */
/* @var $model Pub */
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
		<?php echo $form->label($model,'Project'); ?>
		<?php echo $form->textField($model,'Project',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Author'); ?>
		<?php echo $form->textField($model,'Author',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'authorsStudents'); ?>
		<?php echo $form->textField($model,'authorsStudents',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Year'); ?>
		<?php echo $form->textField($model,'Year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Volume'); ?>
		<?php echo $form->textField($model,'Volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Issue'); ?>
		<?php echo $form->textField($model,'Issue'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pages'); ?>
		<?php echo $form->textField($model,'Pages',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISBN'); ?>
		<?php echo $form->textField($model,'ISBN',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOI'); ?>
		<?php echo $form->textField($model,'DOI',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PublicationType'); ?>
		<?php echo $form->textField($model,'PublicationType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PublicationStatus'); ?>
		<?php echo $form->textField($model,'PublicationStatus',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Theme'); ?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Keywords'); ?>
		<?php echo $form->textField($model,'Keywords',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Link'); ?>
		<?php echo $form->textField($model,'Link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LinkGoMRI'); ?>
		<?php echo $form->textField($model,'LinkGoMRI',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->