<?php
/* @var $this SearchPageController */
/* @var $model SearchPage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'search-page-form',
	'enableAjaxValidation'=>false,
)); ?>
  
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $total; ?>
		<?php echo $form->textField($model,'total'); ?>

	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->