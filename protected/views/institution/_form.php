<?php
/* @var $this InstitutionController */
/* @var $model Institution */
/* @var $form CActiveForm */
?>

<div class="form">
<div>
  <?php echo $form->label($model,Yii::t('messages','Instition Name')); ?>
  <?php echo $form->hiddenField($model,'Institution_id',array()); ?>
  <?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
    array(
      'model'=>$model,
      'attribute'=>'hotels_name',
      'source'=>$this->createUrl('institution/autocomplete'),
      'htmlOptions'=>array('placeholder'=>'Any'),
      'options'=>
         array(
               'showAnim'=>'fold',
               'select'=>"js:function(institution, ui) {
                  $('#institution_id').val(ui.item.id);
                         }"
                ),
      'cssFile'=>false,
    )); ?>
</div>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'institution-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitutionAbrev'); ?>
		<?php echo $form->textField($model,'InstitutionAbrev',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'InstitutionAbrev'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field3'); ?>
		<?php echo $form->textField($model,'Field3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Field3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AmountPerInstitution'); ?>
		<?php echo $form->textField($model,'AmountPerInstitution',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'AmountPerInstitution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitutionID'); ?>
		<?php echo $form->textField($model,'InstitutionID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'InstitutionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>60,'maxlength'=>255)); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->