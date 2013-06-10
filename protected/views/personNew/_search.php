<?php
/* @var $this PersonNewController */
/* @var $model PersonNew */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'personID'); ?>
		<?php echo $form->textField($model,'personID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intstituionAbbr'); ?>
		<?php echo $form->textField($model,'intstituionAbbr',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institutionID'); ?>
		<?php echo $form->textField($model,'institutionID',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectID'); ?>
		<?php echo $form->textField($model,'projectID',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Role'); ?>
		<?php echo $form->textField($model,'Role',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eMailAddress'); ?>
		<?php echo $form->textField($model,'eMailAddress',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secondaryRole'); ?>
		<?php echo $form->textField($model,'secondaryRole',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'degreePursuing'); ?>
		<?php echo $form->textField($model,'degreePursuing',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ThesisResearchTopic'); ?>
		<?php echo $form->textField($model,'ThesisResearchTopic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Department'); ?>
		<?php echo $form->textField($model,'Department',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Supervisor'); ?>
		<?php echo $form->textField($model,'Supervisor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ExpectedCompletionYear'); ?>
		<?php echo $form->textField($model,'ExpectedCompletionYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CompletionsQuarter'); ?>
		<?php echo $form->textField($model,'CompletionsQuarter',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SummerInternship'); ?>
		<?php echo $form->textField($model,'SummerInternship',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->