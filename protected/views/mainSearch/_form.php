<?php
/* @var $this MainSearchController */
/* @var $model MainSearch */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'main-search-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

  	<div class="row">
		<?php echo $form->labelEx($model,'Institution'); ?>
  <?php echo CHtml::dropDownList('Institution,[Institution]','',
   CHtml::listData(Institution::model()->findAll(), 'ID', 'Institution'),
   array('empty'=>'Select Instititution'))?>  
 

	
		<?php echo $form->error($model,'Institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AmountPerInstitution'); ?>
		<?php echo $form->textField($model,'AmountPerInstitution'); ?>
		<?php echo $form->error($model,'AmountPerInstitution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROGRAM'); ?>
		<?php echo $form->textField($model,'PROGRAM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PROGRAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitutionID'); ?>
		<?php echo $form->textField($model,'InstitutionID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'InstitutionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
    $list=CHtml::listData(SysState::model()->findAll(), 'state_id', 'state_name');
		
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FundRec'); ?>
		<?php echo $form->textField($model,'FundRec'); ?>
		<?php echo $form->error($model,'FundRec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Theme'); ?>
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Publication'); ?>
		<?php echo $form->textField($model,'Publication',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Publication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataSet'); ?>
		<?php echo $form->textField($model,'DataSet',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DataSet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrincipalInvestigator'); ?>
		<?php echo $form->textField($model,'PrincipalInvestigator',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PrincipalInvestigator'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->