<?php
/* @var $this SearchPageController */
/* @var $model SearchPage */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
            ));
    ?>


    <div class="row">                   
        <?php echo $form->label($model, 'Theme'); ?>
        <?php echo $form->dropDownList($model, 'State', CHtml::listData(RTheme::model()->findAll(), 'Theme', 'Theme'), array('multiple' => 'multiple', 'class' => 'dropCheck')); ?>
    </div>



    <div class="row">                   
        <?php echo $form->label($model, 'State'); ?>
        <?php echo $form->dropDownList($model, 'State', CHtml::listData(State::model()->findAll(), 'StateID', 'StateID', 'Type'), array('multiple' => 'multiple', 'class' => 'dropCheck')); ?>
    </div>

    <div class="row">


        <?php echo $form->label($model, 'Institution'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'Institution',
            'sourceUrl' => Yii::app()->createUrl('/searchP/GetInstitution'),
            'htmlOptions' => array('size' => 60),
        ));
        ?>
        <?php echo $form->error($model, 'attribute'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'Project Status'); ?>
        <?php
        echo $form->textField($model, 'InstitutionID', array('size' => 5
            , 'maxlength' => 255));
        ?>
    </div>



    <div class="row">
        <?php echo $form->label($model, 'Key word search'); ?>
<?php echo $form->textField($model, 'ProjectTitle', array('size' => 60, 'maxlength' => 255)); ?>
    </div>


</div>

<div class="row buttons">
<?php echo CHtml::submitButton('Search'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->getClientScript()->registerCoreScript('jquery.ui'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/jquery.multiselect.css", ''); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.multiselect.min.js'); ?>

<?php Yii::app()->clientScript->registerScript('dropScript', '
    $(function(){
        $(".dropCheck").multiselect(); 
    });
', CClientScript::POS_END); ?>