<?php
/* @var $this PersonNewController */
/* @var $model PersonNew */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-new-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'intstituionAbbr'); ?>
		<?php echo $form->textField($model,'intstituionAbbr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'intstituionAbbr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institutionID'); ?>
		<?php echo $form->textField($model,'institutionID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'institutionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectID'); ?>
		<?php echo $form->textField($model,'projectID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'projectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Role'); ?>
		<?php echo $form->textField($model,'Role',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eMailAddress'); ?>
		<?php echo $form->textField($model,'eMailAddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'eMailAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secondaryRole'); ?>
		<?php echo $form->textField($model,'secondaryRole',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'secondaryRole'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degreePursuing'); ?>
		<?php echo $form->textField($model,'degreePursuing',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'degreePursuing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ThesisResearchTopic'); ?>
		<?php echo $form->textField($model,'ThesisResearchTopic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ThesisResearchTopic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Department'); ?>
		<?php echo $form->textField($model,'Department',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Supervisor'); ?>
		<?php echo $form->textField($model,'Supervisor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Supervisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ExpectedCompletionYear'); ?>
		<?php echo $form->textField($model,'ExpectedCompletionYear'); ?>
		<?php echo $form->error($model,'ExpectedCompletionYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CompletionsQuarter'); ?>
		<?php echo $form->textField($model,'CompletionsQuarter',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CompletionsQuarter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SummerInternship'); ?>
		<?php echo $form->textField($model,'SummerInternship',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SummerInternship'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->