<?php
/* @var $this SearchPageController */
/* @var $model SearchPage */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

  <div class="row">
		<?php echo $form->label($model,'Theme'); ?>
     <?php echo CHtml::dropDownList('RTheme,[Theme]','',
   CHtml::listData(RTheme::model()->findAll(), 'Theme', 'Theme'),
   array('empty'=>'Select Theme'))?>
    
		<?php echo $form->textField($model,'Theme',array('size'=>60,'maxlength'=>255)); ?>
	</div>
   	<div class="row">
     <div class="column">
		<?php echo $form->label($model,'State'); ?>
    <?php echo $form->dropDownList($model,'State',
   CHtml::listData(State::model()->findAll(), 'StateID', 'StateID'),
   array('submit'=>'State'));?>
  <?php echo $form->textField($model,'State',array('size'=>4,'maxlength'=>4)); ?>
        </div> 
		<?php echo $form->label($model,'Type'), 
		$form->textField($model,'Type',array('size'=>20,'maxlength'=>20)); ?>
	        
    
	</div>
  
	<div class="row">
		<?php echo $form->label($model,'Institution'); ?>
		<?php echo $form->textField($model,'Institution',array('size'=>60,'maxlength'=>255)); ?>
	</div>
  
	<div class="row">
		<?php echo $form->label($model,'InstitutionID'); ?>
		<?php echo $form->textField($model,'InstitutionID',array('size'=>60,'maxlength'=>255)); ?>
	</div>


    
    	<div class="row">
		<?php echo $form->label($model,'ProjectTitle'); ?>
		<?php echo $form->textField($model,'ProjectTitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->