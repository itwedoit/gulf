<?php
/* @var $this MSearchController */
/* @var $model MSearch */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'msearch-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'Grant'); ?>
        <?php echo $form->textField($model, 'Grant', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'Grant'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Consortia'); ?>
        <?php echo $form->textField($model, 'Consortia', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'Consortia'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Task'); ?>
        <?php echo $form->textField($model, 'Task', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'Task'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'ProjectTitle'); ?>
        <?php echo $form->textField($model, 'ProjectTitle', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'ProjectTitle'); ?>
    </div> 
    
     <div class="row">
        <?php echo $form->labelEx($model, 'State'); ?>
        <?php echo $form->dropDownList($model, 'State', CHtml::listData(State::model()->findAll(), 'StateID', 'StateID')); ?>
        <?php echo $form->error($model, 'State'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'SubAwards'); ?>
        <?php echo $form->textField($model, 'SubAwards', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'SubAwards'); ?>
    </div>
    
    
      <div class="row">
        <?php echo $form->labelEx($model, 'LastName'); ?>
        <?php echo $form->dropDownList($model, 'LastName', CHtml::listData(Person::model()->findAll(), 'lastName', 'lastName')); ?>
        <?php echo $form->error($model, 'LastName'); ?>
    </div>
    

    <div class="row">
        <?php echo $form->labelEx($model, 'StartDate'); ?>
        <?php echo $form->textField($model, 'StartDate', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'StartDate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'EndDate'); ?>
        <?php echo $form->textField($model, 'EndDate', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'EndDate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Abstract'); ?>
        <?php echo $form->textArea($model, 'Keyword', array('size' => 4000, 'maxlength' => 4000)); ?>
        <?php echo $form->error($model, 'Keyword'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Publication'); ?>
        <?php echo $form->dropDownList($model, 'Publication', CHtml::listData(Pub::model()->findAll(), 'Publication', 'Publication')); ?>
        <?php echo $form->error($model, 'Publication'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Institution'); ?>
        <?php echo $form->dropDownList($model, 'Institution', CHtml::listData(Institution::model()->findAll(), 'Institution', 'Institution')); ?>
        <?php echo $form->error($model, 'InstitutionID'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'DataSet'); ?>
        <?php echo $form->textField($model, 'DataSet', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'DataSet'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Award'); ?>
        <?php echo $form->textField($model, 'Award', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'Award'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->