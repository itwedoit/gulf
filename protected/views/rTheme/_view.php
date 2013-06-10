<?php
/* @var $this RThemeController */
/* @var $data RTheme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Theme')); ?>:</b>
	<?php echo CHtml::encode($data->Theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ThemeDescription')); ?>:</b>
	<?php echo CHtml::encode($data->ThemeDescription); ?>
	<br />


</div>