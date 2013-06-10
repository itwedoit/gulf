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
		<?php echo $form->label($model,'Total'); ?>
    <?php echo $form->textField($model,array('columns'=>array(
	'totalA',)
     ); ?>
<?php $this->endWidget(); ?>

</div><!-- search-form -->